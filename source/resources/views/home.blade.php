@extends('layouts.home')
@section('title', 'Restaurants, Eatery, Coffee, ...')

@section('content')

  
   <!-- slider -->
  <section class="about-us-slider swiper-container p-relative">
      <div class="swiper-wrapper">
          <div class="swiper-slide slide-item">
              <img src={{ asset("assets/img/about/blog/1920x700/banner-4.jpg") }} class="img-fluid full-width" alt="Banner">
              <div class="transform-center">
                  <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-lg-7 align-self-center">
                              <div class="right-side-content">
                                  <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                  <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                  <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="overlay overlay-bg"></div>
          </div>
          <div class="swiper-slide slide-item">
              <img src=={{ asset("assets/img/about/blog/1920x700/banner-5.jpg") }} class="img-fluid full-width" alt="Banner">
              <div class="transform-center">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-8 align-self-center">
                              <div class="right-side-content text-center">
                                  <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                  <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                  <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="overlay overlay-bg"></div>
          </div>
          <div class="swiper-slide slide-item">
              <img src={{ asset("assets/img/about/blog/1920x700/banner-6.jpg") }} class="img-fluid full-width" alt="Banner">
              <div class="transform-center">
                  <div class="container">
                      <div class="row justify-content-end">
                          <div class="col-lg-7 align-self-center">
                              <div class="right-side-content text-right">
                                  <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                  <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                  <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="overlay overlay-bg"></div>
          </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </section>
  <!-- slider -->
  <!-- Browse by category -->
  <section class="browse-cat u-line section-padding">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-header-left">
                      <h3 class="text-light-black header-title title">Discovery <span class="fs-14"><a href="#">See all foods</a></span></h3>
                  </div>
              </div>
              <div class="col-12">
                  <div class="category-slider swiper-container">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-1.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Italian </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-2.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Thai </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-3.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Chinese </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-4.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Mexican </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-5.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Indian </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-6.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Lebanese </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-7.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">Japanese </span>
                              </a>
                          </div>
                          <div class="swiper-slide">
                              <a href="restaurant.html" class="categories">
                                  <div class="icon text-custom-white bg-light-green ">
                                      <img src={{ asset("assets/img/restaurants/125x125/cuisine-8.jpg") }} class="rounded-circle" alt="categories">
                                  </div> <span class="text-light-black cat-name">American </span>
                              </a>
                          </div>
                      </div>
                      <!-- Add Arrows -->
                      <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Browse by category -->
  <!-- Explore collection -->
  <section class="ex-collection section-padding">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-header-left">
                      <h3 class="text-light-black header-title title">Explore our collections</h3>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="ex-collection-box mb-xl-20">
                      <img src="assets/img/restaurants/540x300/collection-1.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="ex-collection-box mb-xl-20">
                      <img src="assets/img/restaurants/540x300/collection-2.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-md-4">
                  <div class="large-product-box mb-xl-20 p-relative">
                      <img src="assets/img/restaurants/255x587/Banner-12.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15">
                          <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9 col-md-8">
                  <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-23.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        10%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                      3.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">American, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/006-chili.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-2.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Flavor Town</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-3.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Big Bites</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Pizzas, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-4.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Smile N’ Delight</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Desserts, Beverages</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-5.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        20%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Lil Johnny’s</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Continental & Mexican</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-6.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="text-custom-white type-tag bg-gradient-orange">
                      NEW
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Choice Foods</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Indian, Chinese, Tandoor</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- advertisement banner-->
          <div class="row">
              <div class="col-12">
                  <div class="banner-adv2 mb-xl-20">
                      <img src="assets/img/restaurants/1110x100/vbanner-2.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="assets/img/tag.jpg" alt="logo">
                          <a href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                      <span class="close-banner"></span>
                  </div>
              </div>
          </div>
          <!-- advertisement banner-->
          <div class="row">
              <div class="col-lg-9 col-md-8">
                  <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-7.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        10%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                      3.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">American, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/006-chili.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-8.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Flavor Town</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-9.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Big Bites</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Pizzas, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-10.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Smile N’ Delight</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Desserts, Beverages</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-24.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        20%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Lil Johnny’s</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Continental & Mexican</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-12.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="text-custom-white type-tag bg-gradient-orange">
                      NEW
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Choice Foods</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Indian, Chinese, Tandoor </p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4">
                  <div class="large-product-box mb-xl-20 p-relative">
                      <img src="assets/img/restaurants/255x587/Banner-1.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15">
                          <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- advertisement banner-->
          <div class="row">
              <div class="col-12">
                  <div class="banner-adv2 mb-xl-20">
                      <img src="assets/img/restaurants/1110x100/vbanner-3.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="assets/img/tag.jpg" alt="logo">
                          <a href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                      <span class="close-banner"></span>
                  </div>
              </div>
          </div>
          <!-- advertisement banner-->
          <div class="row">
              <div class="col-lg-3 col-md-4">
                  <div class="large-product-box mb-xl-20 p-relative">
                      <img src="assets/img/restaurants/255x587/Banner-2.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15">
                          <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9 col-md-8">
                  <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-25.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        10%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                      3.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">American, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/006-chili.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-26.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Flavor Town</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-27.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Big Bites</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Pizzas, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-28.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Smile N’ Delight</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Desserts, Beverages</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-15.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        20%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black">Lil Johnny’s</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Continental & Mexican</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-16.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="text-custom-white type-tag bg-gradient-orange">
                      NEW
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Choice Foods</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Indian, Chinese, Tandoor</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- advertisement banner-->
          <div class="row">
              <div class="col-12">
                  <div class="banner-adv2 mb-xl-20">
                      <img src="assets/img/restaurants/1110x100/vbanner-1.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="assets/img/tag.jpg" alt="logo">
                          <a href="restaurant.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
                      <span class="close-banner"></span>
                  </div>
              </div>
          </div>
          <!-- advertisement banner-->
          <div class="row">
              <div class="col-lg-9 col-md-8">
                  <div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-17.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        10%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Great Burger</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                      3.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">American, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/006-chili.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-18.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Flavor Town</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-19.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Big Bites</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Pizzas, Fast Food</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/004-leaf.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-20.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="type-tag bg-gradient-green text-custom-white">
                      Trending
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Smile N’ Delight</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Desserts, Beverages</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-21.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                        20%
                      </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Lil Johnny’s</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                      2.1
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Continental & Mexican</p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                          <div class="product-box mb-xl-20">
                              <div class="product-img">
                                  <a href="restaurant.html">
                                      <img src="assets/img/restaurants/255x150/shop-22.jpg" class="img-fluid full-width" alt="product-img">
                                  </a>
                                  <div class="overlay">
                                      <div class="product-tags padding-10"> <span class="circle-tag">
                      <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                    </span>
                                          <span class="text-custom-white type-tag bg-gradient-orange">
                      NEW
                    </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="product-caption">
                                  <div class="title-box">
                                      <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">Choice Foods</a></h6>
                                      <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                      4.5
                    </span>
                                      </div>
                                  </div>
                                  <p class="text-light-white">Indian, Chinese, Tandoor </p>
                                  <div class="product-details">
                                      <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                          <span class="text-light-white price">$10 min</span>
                                      </div>
                                      <div class="rating"> <span>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                      <i class="fas fa-star text-yellow"></i>
                    </span>
                                          <span class="text-light-white text-right">4225 ratings</span>
                                      </div>
                                  </div>
                                  <div class="product-footer"> <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/005-chef.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/008-protein.svg" alt="tag">
                  </span>
                                      <span class="text-custom-white square-tag">
                    <img src="assets/img/svg/009-lemon.svg" alt="tag">
                  </span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-4">
                  <div class="large-product-box mb-xl-20 p-relative">
                      <img src="assets/img/restaurants/255x587/Banner-3.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15">
                          <button class="category-btn">Most popular near you</button> <a href="restaurant.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="ex-collection-box mb-sm-20">
                      <img src="assets/img/restaurants/540x300/collection-3.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="ex-collection-box">
                      <img src="assets/img/restaurants/540x300/collection-4.jpg" class="img-fluid full-width" alt="image">
                      <div class="category-type overlay padding-15"> <a href="restaurant.html" class="category-btn">Top rated</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Explore collection -->
  <!-- footer -->
  <div class="footer-top section-padding bg-black">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                  <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                      <span class="text-custom-white">100% Payment<br>Secured</span>
                  </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                  <div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
                      <span class="text-custom-white">Support lots<br> of Payments</span>
                  </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                  <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                      <span class="text-custom-white">24 hours / 7 days<br>Support</span>
                  </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                  <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                      <span class="text-custom-white">Free Delivery<br>with $50</span>
                  </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                  <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                      <span class="text-custom-white">Best Price<br>Guaranteed</span>
                  </div>
              </div>
              <div class="col-md-2 col-sm-4 col-6">
                  <div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
                      <span class="text-custom-white">Mobile Apps<br>Ready</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <footer class="section-padding bg-light-theme pt-0 u-line bg-black">
      <div class="u-line instagram-slider swiper-container">
          <ul class="hm-list hm-instagram swiper-wrapper">
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-3.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-1.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-2.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-4.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-5.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-6.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-7.jpg" alt="instagram"></a>
              </li>
              <li class="swiper-slide">
                  <a href="#"><img src="assets/img/restaurants/250x200/insta-8.jpg" alt="instagram"></a>
              </li>
          </ul>
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-contact">
                      <h6 class="text-custom-white">Need Help</h6>
                      <ul>
                          <li class="fw-600"><span class="text-light-white">Call Us</span> <a href="tel:" class="text-custom-white">+(347) 123 456 789</a>
                          </li>
                          <li class="fw-600"><span class="text-light-white">Email Us</span> <a href="mailto:" class="text-custom-white">demo@domain.com</a>
                          </li>
                          <li class="fw-600"><span class="text-light-white">Join our twitter</span> <a href="#" class="text-custom-white">@quickmunch</a>
                          </li>
                          <li class="fw-600"><span class="text-light-white">Join our instagram</span> <a href="#" class="text-custom-white">@quickmunch</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-links">
                      <h6 class="text-custom-white">Get to Know Us</h6>
                      <ul>
                          <li><a href="#" class="text-light-white fw-600">About Us</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Blog</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Socialize</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Quickmunch</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Perks</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-links">
                      <h6 class="text-custom-white">Let Us Help You</h6>
                      <ul>
                          <li><a href="#" class="text-light-white fw-600">Account Details</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Order History</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Find restaurant</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Login</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Track order</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-links">
                      <h6 class="text-custom-white">Doing Business</h6>
                      <ul>
                          <li><a href="#" class="text-light-white fw-600">Suggest an Idea</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Be a Partner restaurant</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Create an Account</a>
                          </li>
                          <li><a href="#" class="text-light-white fw-600">Help</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-links">
                      <h6 class="text-custom-white">Download Apps</h6>
                      <div class="appimg">
                          <a href="#">
                              <img src="assets/img/playstore.jpg" class="img-fluid" alt="app logo">
                          </a>
                      </div>
                      <div class="appimg">
                          <a href="#">
                              <img src="assets/img/appstore.jpg" class="img-fluid" alt="app logo">
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                  <div class="footer-contact">
                      <h6 class="text-custom-white">Newsletter</h6>
                      <form class="subscribe_form">
                          <div class="input-group">
                              <input type="text" class="form-control form-control-submit" name="email" placeholder="Enter your email">
                              <span class="input-group-btn">
                    <button class="btn btn-second btn-submit" type="button"><i class="fas fa-paper-plane"></i></button>
               </span>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="ft-social-media">
                      <h6 class="text-center text-custom-white">Follow us</h6>
                      <ul>
                          <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li> <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li> <a href="#"><i class="fab fa-instagram"></i></a>
                          </li>
                          <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
                          </li>
                          <li> <a href="#"><i class="fab fa-youtube"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <div class="copyright bg-black">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-4">
                  <div class="payment-logo mb-md-20"> <span class="text-light-white fs-14 mr-3">We are accept</span>
                      <div class="payemt-icon">
                          <img src="assets/img/card-front.jpg" alt="#">
                          <img src="assets/img/visa.jpg" alt="#">
                          <img src="assets/img/amex-card-front.png" alt="#">
                          <img src="assets/img/mastercard.png" alt="#">
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 text-center medewithlove align-self-center">
                  <a href="../../../../../www.slidesigma.com/index.html" class="text-custom-white">Made with Real <i class="fas fa-heart"></i> Slidesigma</a>
              </div>
              <div class="col-lg-4">
                  <div class="copyright-text"> <span class="text-light-white">© <a href="#" class="text-light-white">Slidesigma</a> - 2019 | All Right Reserved</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- footer -->

@endsection