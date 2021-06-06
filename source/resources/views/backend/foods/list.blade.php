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
                                        <a href="#" class="btn btn-second btn-success text-light">Edit</a>
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
                        <div class="sort-tag-filter padding-15">
                            <div class="restaurent-tags"> 
                            </div>
                            <div class="sorting"> <span class="text-dark-white fs-16 fw-600">Sort: </span>
                                <select>
                <option>Default</option>
                <option>Price</option>
                <option>Rating</option>
                <option>Distance</option>
              </select>
                            </div>
                        </div>
                        <div class="food-list">
                            @foreach ($foods as $food)
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="#">
                                            <img src={{ asset("storage/" . $food->image) }} class="img-fluid" alt="food image">
                                        </a>    
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="#" class="text-light-blue fw-600">{{ $food->name }}</a></h6>
                                                <p class="text-light-white fs-12">{{ $food->categories->category_name }}</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-tags"> 
                                                <span class="text-custom-white square-tag">
                                                    <img src={{ asset("assets/img/svg/004-leaf.svg") }} alt="tag">
                                                </span>
                                                <span class="text-custom-white rectangle-tag bg-gradient-red" style=" text-decoration-line: line-through">
                                                    {{ $food->price }} VND
                                                </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                                                    {{ $food->sale_price }} VND
                                                </span>
                                            </div>
                                            <div class="product-list-tags"> 
                                                <span class="text-custom-white square-tag">
                                                    <img src={{ asset("assets/img/svg/005-chef.svg") }} alt="tag">
                                                </span>
                                                <span class="text-custom-white rectangle-tag bg-gradient-orange">
                                                    {{ $food->prepare_food }} minutes
                                                </span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-primary text-custom-white" data-bs-toggle="modal" data-bs-target="#editModal">Edit</span>
                                                <span class="rectangle-tag bg-danger text-custom-white action-delete" data-food-id={{ $food->id }} onclick="actionDelete(event)">Delete</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="product-list-bottom">
                                        <div class="product-list-type">
                                            @foreach ($food->tags as $tag)
                                            <span class="">
                                                #{{ $tag->tag_name }}
                                            </span>
                                            @endforeach
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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@fat">Open modal for @fat</button>

<div class="modal" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update food</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="javascript:void(0)" enctype="multipart/form-data">
          <div class="mb-3" id="editFoodName">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3" id="editFoodRestaurant">
            <label for="recipient-name" class="col-form-label">Restaurant:</label>
            <input type="text" class="form-control" name="restaurant_id">
          </div>
          <div class="mb-3" id="editFoodRestaurant">
            <label for="recipient-name" class="col-form-label">Category:</label>
            <select name="category_id" class="form-control"></select>
          </div>
          <div class="mb-3" id="editFoodPrepare">
            <label for="recipient-name" class="col-form-label">Preparation time (minutes):</label>
            <input type="text" class="form-control" name="prepare_food">
          </div>
          <div class="mb-3" id="editFoodRestaurant">
            <label for="recipient-name" class="col-form-label">Tags:</label>
            <select name="tags[]" class="form-control" multiple="multiple" id="editFoodRestaurant"></select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<script>
        $("#editFoodRestaurant").select2({
    tags: true,
    tokenSeparators: [' ']
    });
     function actionDelete(event){
        event.preventDefault();
        let page = $('#custom-pagination').find('.active').children().attr('id');
        let urlRequest = "/collaborators/foods/delete/" + event.target.getAttribute('data-food-id') + "/" + page;
        let that = $(this);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: urlRequest,
                        async: true,
                        success: function (data) {
                            if(data.code==200){
                                that.parent().parent().remove();
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            }        
                            updateListOfFoods (data);
                        },
                        error: function (data) {
        
                        }
                    });
                }
            })
    }

    function updateListOfFoods (data) {
        $(".food-list").empty(); // Xóa toàn bộ thông tin hiện tại
        let foods = data.foods;
        let html = [];
        $.each(foods, function (i, food) {
            html.push('<div class="product-list-view">');
            html.push('<div class="product-list-info">');
            html.push('<div class="product-list-img">');
            html.push('<a href="#">');
            html.push('<img src="' + 'http://127.0.0.1:8000/storage/' + food.image + '"class="img-fluid" alt="food image">');
            html.push('</a></div></div>');
            html.push('<div class="product-right-col"> <div class="product-list-details">  <div class="product-list-title"> <div class="product-info"> ');
            html.push('<h6><a href="#" class="text-light-blue fw-600">' +  food.name + '</a></h6>');
            html.push('<p class="text-light-white fs-12">' + food.categories.category_name + '</p>');
            html.push('</div> </div>');
            html.push('<div class="product-detail-right-box">  <div class="product-list-tags"> <span class="text-custom-white square-tag"> <img src="http://127.0.0.1:8000/assets/img/svg/004-leaf.svg" alt="tag"> </span>');
            html.push('<span class="text-custom-white rectangle-tag bg-gradient-red" style=" text-decoration-line: line-through">' + food.price + ' VND</span>');
            html.push('<span class="rectangle-tag bg-gradient-green text-custom-white">' + food.sale_price + ' VND</span>');
            html.push('</div>');
            html.push('<div class="product-list-tags"> <span class="text-custom-white square-tag"> <img src="http://127.0.0.1:8000/assets/img/svg/005-chef.svg"  alt="tag"> </span>');
            html.push('<span class="text-custom-white rectangle-tag bg-gradient-orange">' + food.prepare_food + ' minutes </span>');
            html.push('</div>');
            // Delete & edit button
            html.push('<div class="product-list-label"> <span class="rectangle-tag bg-primary text-custom-white" data-bs-toggle="modal" data-bs-target="#editModal">Edit</span> <span class="rectangle-tag bg-danger text-custom-white action-delete" onclick="actionDelete(event)">Delete</span> </div>');
            html.push('</div> </div>');
            html.push('<div class="product-list-bottom">  <div class="product-list-type">');

            //Food tags
            $.each(food.tags, function (i, tag) {
                html.push('<span class="">' + "#"+ tag.tag_name + '</span>' + " ");
            });
            
            html.push('</div> </div> </div> </div>');
        });
        $('.food-list').append(html.join(""));
    }
</script>

@endsection

