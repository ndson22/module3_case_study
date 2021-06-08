<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateFoodRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Tag;
use App\Models\City;
use App\Models\Commune;
use App\Models\District;
use App\Models\Category;

class CollaboratorController extends Controller
{
    public function index ()
    {
        $restaurants = Restaurant::where('customer_id', Auth::id())->get();
        $restaurants_amount = Restaurant::where('customer_id', Auth::id())->count();
        $foods_amount = Food::where('restaurant_id', 1)->get()->count();
        $foodsPerPage = 5;
        $pages = ceil($foods_amount/$foodsPerPage);
        $foods = Food::where('restaurant_id', 1)->skip(0)->take(5)->get();
        return view('backend.foods.list', ['restaurants' => $restaurants, 'restaurants_amount' => $restaurants_amount, 'pages' => $pages, 'foods' => $foods]);
    }

    public function createFood ()
    {
        // Lấy toàn bộ thông tin về nhà hàng của khách hàng
        $restaurants = Restaurant::where('customer_id', Auth::id())->get();
        // Lấy toàn bộ category 
        $categories = Category::all();
        $tags = Tag::all();
        if ($restaurants) {
            return view('backend.foods.create', compact('restaurants', 'categories', 'tags'));
        } else {
            return view('backend.restaurant.create')->with('warning', "You don\'t have any restaurant, please add your restaurant first.");
        }
    }

    public function storeFood (StoreFoodRequest $request)
    {
        try {
            DB::beginTransaction();
            // Kiểm tra xem tag đã tồn tại hay chưa
            $foodRequestTags = $request->tags;
            $tagId = [];
            foreach ($foodRequestTags as $foodRequestTag) {
                $tag = Tag::where('tag_name', $foodRequestTag)->get();
                if ($tag->count() > 0) {
                    $tag[0]->extra += 1;
                } else {
                    $tag[0] = Tag::create([
                        'tag_name' => $foodRequestTag,
                        'slug' => Str::slug($foodRequestTag, '-'),
                    ]);
                };
                $tag[0]->save();
                $tagId[] = $tag[0]->id;
            };
            $food = new Food();
            $newImageName = time() . '-' . str_replace(' ', '', $request->name) . "." . $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('public/images/foods', $newImageName);
            $food->fill($request->all());
            $food->image = "images/foods/" . $newImageName;
            $food->save();
            $food->tags()->attach($tagId); // Tự thêm vào bảng trung gian food_tag
            DB::commit();
            return redirect()->route('collaborators.foods.create')->with('message','Your food added Successfully!'); 
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Something wrong!');
        }
    }

    public function deleteFood ($food_id, $page)
    {
        try {
            DB::beginTransaction();
            $food = Food::find($food_id);
            $restaurant_id = $food->restaurant_id;
            $food->tags()->detach();
            $food->delete();
            DB::commit();
            $foods = Food::where('restaurant_id', $restaurant_id)->skip(($page-1)*5)->take(5)->get();
            foreach ($foods as $food) {
                $food->categories;
                $food->tags;
            };
            return response()->json(['foods' => $foods, 'code' => 200]);
        } catch (Exception $e) {
            DB::rollback();
        }
    }

    public function getFood ($food_id)
    {
        $food = Food::find($food_id);
        $restaurants = Restaurant::where('customer_id', Auth::id())->get();
        $categories = Category::all();
        $tags = Tag::all();
        $foodTagId = [];
        foreach ($food->tags as $tag) {
            $foodTagId[] = $tag->id;
        }
        return response()->json(['food' => $food, 'restaurants' => $restaurants, 'categories' => $categories, 'tags' => $tags, 'foodTagId' => $foodTagId]);
    }

    public function updateFood (UpdateFoodRequest $request, $food_id)
    {   
        try {
            DB::beginTransaction();

            // Xử lý upload ảnh
            $food = Food::find($food_id);
            if ($request->hasFile('image')) {
                Storage::delete('public/' . $food->image); // Xóa ảnh cũ
                $newImageName = time() . '-' . str_replace(' ', '', $request->name) . "." . $request->image->getClientOriginalExtension();
                $path = $request->image->storeAs('public/images/foods', $newImageName);
                $food->image = "images/foods/" . $newImageName;
            }
            $food->name = $request->name;
            $food->description = $request->description;
            $food->price = $request->price;
            $food->sale_price = $request->sale_price;
            $food->fee = $request->fee;
            $food->explain_fee = $request->explain_fee;
            $food->prepare_food = $request->prepare_food;
            $food->category_id = $request->category_id;
            $food->restaurant_id = $request->restaurant_id;
            // Kiểm tra xem tag đã tồn tại hay chưa
            $foodRequestTags = $request->tags;
            $tagId = [];
            foreach ($foodRequestTags as $foodRequestTag) {
                $tag = Tag::where('tag_name', $foodRequestTag)->get();
                if ($tag->count() > 0) {
                    $tag[0]->extra += 1;
                } else {
                    $tag[0] = Tag::create([
                        'tag_name' => $foodRequestTag,
                        'slug' => Str::slug($foodRequestTag, '-'),
                    ]);
                };
                $tag[0]->save();
                $tagId[] = $tag[0]->id;
            };
            $food->save();
            // Đồng bộ bảng trung gian food_tag
            $food->tags()->sync($tagId);
            $food->categories;
            foreach ($food->tags as $tag) {
                $tag->tag_name;
            }
            DB::commit();
            return response()->json(['food' => $food]);
        } catch (Exception $e) {
            DB::rollback();
        }
    }
        
    public function getRestaurant($restaurant_id, $page)
    {   
        $restaurant = Restaurant::find($restaurant_id);
        $restaurant->city = $restaurant->city->city_name; // lấy thông tin city
        $restaurant->district = $restaurant->district->district_name; // lấy thông tin huyện
        $restaurant->commune = $restaurant->commune->commune_name; // lấy thông tin xã
        $restaurant->amount = $restaurant->foods->count();
        $foods = Food::where('restaurant_id', $restaurant_id)->skip(($page-1)*5)->take(5)->get();
        foreach ($foods as $food) {
            $food->categories;
            $food->tags;
        };
        return response()->json(['restaurant' => $restaurant, 'foods' => $foods]);
    }

    public function createRestaurant ()
    {
        $cities = City::all();
        $districts = District::all();
        $communes = Commune::all();
        return view('backend.restaurants.create', ['cities' => $cities, 'districts' => $districts, 'communes' => $communes]);
    }

    public function storeRestaurant (StoreRestaurantRequest $request)
    {
        try {
            DB::beginTransaction();
            $restaurant = new Restaurant();
            $newImageName = time() . '-' . str_replace(' ', '', $request->name) . "." . $request->image->extension();
            $path = $request->image->storeAs(
                'public/images/restaurants', $newImageName
            );
            $restaurant->fill($request->all());
            $restaurant->customer_id = Auth::id();
            $restaurant->image = "images/restaurants/" . $newImageName;
            $restaurant->save();
            DB::commit();
            return redirect()->route('collaborators.restaurants.create')->with('message','Restaurant added Successfully!'); 
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error','Something wrong!');
        }
    }

    public function getDistricts ($city_id)
    {
        $districts = District::where('city_id', $city_id)->get();
        return response()->json(['districts' => $districts]);
    }

    public function getCommunes ($district_id)
    {
        $communes = Commune::where('district_id', $district_id)->get();
        return response()->json(['communes' => $communes]);
    }

}