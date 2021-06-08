@extends('layouts.home')
@section('title', 'Restaurants, foods')

@section('content')

<!-- Browse by category -->
 <div class="most-popular section-padding">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-3 mb-md-40">
                <div class="advertisement-slider swiper-container p-relative h-auto mb-md-40">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-wrapper">
                                <div class="testimonial-box">
                                    <div class="testimonial-img p-relative">
                                        <a href="restaurant.html">
                                            <img src={{ asset("storage/" . $restaurants[0]->image) }} class="img-fluid full-width" alt="testimonial-img" id="restaurantImg">
                                        </a>
                                        <div class="overlay">
                                            <div class="brand-logo">
                                                <img src={{ asset("assets/img/logo-4.jpg") }} class="img-fluid" alt="logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-caption padding-15" id="restaurant_info">
                                        <p class="text-light-white text-uppercase no-margin fs-12">Restaurant information</p>
                                        <h5 class="fw-600 restaurant-name" style="font-size: 40px">{{ $restaurants[0]->name }}</h5>
                                        <p class="text-light-white fw-100 "><strong class="text-light-black fw-700">Open time: </strong> <span class="restaurant-open-time">{{ $restaurants[0]->open_time }} - {{ $restaurants[0]->close_time }}</span></p>
                                        <p class="text-light-white fw-100 "><strong class="text-light-black fw-700">Address: </strong><span class="restaurant-address">{{ $restaurants[0]->address }}</span></p>
                                        <p class="text-light-white fw-100 "><strong class="text-light-black fw-700">City: </strong> <span class="restaurant-city">{{ $restaurants[0]->city->city_name }}</span></p>
                                        <p class="text-light-white fw-100 "><strong class="text-light-black fw-700">District: </strong> <span class="restaurant-district"> {{ $restaurants[0]->district->district_name }} </span></p>
                                        <p class="text-light-white fw-100 "><strong class="text-light-black fw-700">Commune: </strong> <span class="restaurant-commune">{{ $restaurants[0]->commune->commune_name }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-lg-9 browse-cat border-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header-left">
                            <h3 class="text-light-black header-title title-2">Collaborators information <small><a href="#" class="text-dark-white fw-600">{{ $restaurants_amount }} restaurants</a></small></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="popular-item-slider swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($restaurants as $restaurant)
                                    <div class="swiper-slide">
                                        <div class="categories restaurants_info" name={{ $restaurant->id }}>
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src={{ asset("storage/" . $restaurant->image) }} class="rounded-circle" alt="restaurants">
                                            </div> <span class="text-light-black cat-name">{{ $restaurant->name }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="food-list" id="food_list">
                            @foreach ($foods as $food)
                            <div class={{ $food->id }}>
                                <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img" id="food_img">
                                        <a href="#">
                                            <img src={{ asset("storage/" . $food->image) }} class="img-fluid" alt="food image" >
                                        </a>    
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="#" class="text-light-blue fw-600" id="food_name">{{ $food->name }}</a></h6>
                                                <p class="text-light-white fs-12" id="food_category">{{ $food->categories->category_name }}</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-tags"> 
                                                <span class="text-custom-white square-tag">
                                                    <img src={{ asset("assets/img/svg/004-leaf.svg") }} alt="tag">
                                                </span>
                                                <span class="text-custom-white rectangle-tag bg-gradient-red" id="food_price" style=" text-decoration-line: line-through">
                                                    {{ $food->price }} VND
                                                </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white" id="food_sale_price">
                                                    {{ $food->sale_price }} VND
                                                </span>
                                            </div>
                                            <div class="product-list-tags"> 
                                                <span class="text-custom-white square-tag">
                                                    <img src={{ asset("assets/img/svg/005-chef.svg") }} alt="tag">
                                                </span>
                                                <span class="text-custom-white rectangle-tag bg-gradient-orange" id="prepare_food">
                                                    {{ $food->prepare_food }} minutes
                                                </span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-primary text-custom-white" data-bs-toggle="modal" data-bs-target="#editModal" data-food-id={{ $food->id }} onclick="getFoodInfor(event)">Edit</span>
                                                <span class="rectangle-tag bg-danger text-custom-white action-delete" data-food-id={{ $food->id }} onclick="actionDelete(event)">Delete</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-list-bottom">
                                        <div class="product-list-type" id="list_tags">
                                            @foreach ($food->tags as $tag)
                                            <span>
                                                #{{ $tag->tag_name }}
                                            </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        </div>
                        <div class="custom-pagination">
                            <ul class="pagination" id="custom-pagination" data-restaurant-id="1">
                                <li class="page-item">
                                    <a class="page-link -2" aria-label="Previous" > <span aria-hidden="true"  id="previous">&laquo;</span>
                                        <span class="sr-only" ">Previous</span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $pages; $i++)
                                    @if ($i == 1)
                                        <li class="page-item active"  ><a class="page-link {{ $i }}" id={{ $i }}>{{ $i }}</a></li>
                                    @else
                                        <li class="page-item"><a class="page-link {{ $i }}" id={{ $i }}>{{ $i }}</a></li>
                                    @endif
                                @endfor
                                <li class="page-item" >
                                    <a class="page-link -1" aria-label="Next" id="next"> <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal edit --}}
<div class="modal" id="editModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update food</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="javascript:void(0)" enctype="multipart/form-data" id="foodEditForm" data-food-id="">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6" id="editFoodName">
                    <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3 col-md-6" id="editFoodRestaurant">
                    <label for="recipient-name" class="col-form-label">Restaurant:</label>
                    <select class="form-control" name="restaurant_id"></select>
                </div>
                <div class="mb-3 col-md-6" id="editFoodCategory">
                    <label for="recipient-category" class="col-form-label">Category:</label>
                    <select name="category_id" class="form-control"></select>
                </div>
                <div class="mb-3 col-md-6" id="editFoodPrepare">
                    <label for="recipient-name" class="col-form-label">Preparation time (minutes):</label>
                    <input type="text" class="form-control" name="prepare_food">
                </div>
                <div class="mb-3 col-md-6" id="editFoodTags">
                    <label for="editTags" class="col-form-label">Tags:</label>
                    <select name="tags[]" class="form-control" multiple="multiple" id="editTags"></select>
                </div>
                <div class="mb-3 col-md-6" id="editFoodPrice">
                    <label for="price" class="col-form-label">Price (VND):</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3 col-md-6" id="editFoodSalePrice">
                    <label for="price" class="col-form-label">Sale price (VND):</label>
                    <input type="text" class="form-control" name="sale_price">
                </div>
                <div class="mb-3 col-md-6" id="editFoodFee">
                    <label for="fee" class="col-form-label">Fee (%):</label>
                    <input type="text" class="form-control" name="fee" id="fee">
                </div>
                <div class="mb-3 col-md-12" id="editExplainFee">
                    <label for="explain_fee" class="col-form-label">Explain fee:</label>
                    <textarea class="form-control" name="explain_fee" id="explain_fee"></textarea>
                </div>
                <div class="mb-3 col-md-12" id="editDescription">
                    <label for="explain_fee" class="col-form-label">Description:</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>
                <div class="mb-3" id="editFoodImage">
                    <label for="image" class="col-form-label">Food image:</label>
                    <input type="file" class=" form-control" data-default-file="" name="image" id="image">
                </div>
            </div>    
        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script>
    
</script>
@endsection

