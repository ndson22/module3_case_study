<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\StoreRestaurantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return view('backend.restaurants.create')->with('cities', $cities);;
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