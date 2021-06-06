@extends('layouts.home')
@section('title', 'QuickMunch|Add Foods')

@section('content')

    <section class="register-restaurent-sec section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row">
                                <div class="col-xl-4 col-lg-3 mb-md-40">
                                    <div class="advertisement-slider swiper-container h-auto">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="large-product-box p-relative pb-0">
                                                    <img src={{ URL("assets/img/sidebanner-1.jpg") }} id="restaurant_image" class="img-fluid full-width" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-6">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
                                                <form action="{{ route('collaborators.foods.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="text-light-black fw-700">General Food Information</h5>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Food name <sup class="fs-16">*</sup>
                                                                </label>
                                                                <input type="text" name="name" class="form-control form-control-submit" placeholder="i.e Pizza" value={{ old('name') }}>
                                                                @error('name')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Restaurant<sup class="fs-16">*</sup></label>
                                                                <select class="form-control form-control-submit custom-select-2 full-width" id="restaurant_id" name="restaurant_id">
                                                                    <option>Select your restaurant</option>
                                                                    @foreach ($restaurants as $restaurant)
                                                                        <option value={{ $restaurant->id }}>{{ ucfirst($restaurant->name) }}</option>
                                                                    @endforeach                                                         
                                                                </select>
                                                                @error('restaurant_id')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Category<sup class="fs-16">*</sup></label>
                                                                <select class="form-control form-control-submit custom-select-2 full-width" id="category" name="category_id">
                                                                    <option>Select type</option>  
                                                                    @foreach ($categories as $category)
                                                                        <option value={{ $category->id }}>{{ ucfirst($category->category_name) }}</option>
                                                                    @endforeach                                                           
                                                                </select>
                                                                @error('category_id')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Preparation time (minutes)<sup class="fs-16">*</sup></label>
                                                                <input type="number" name="prepare_food" class="form-control form-control-submit" placeholder="i.e 30" value={{ old('prepare_food') }}>
                                                                @error('prepare_food')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Tags<sup class="fs-16">*</sup></label>
                                                                <select class="form-control" multiple="multiple" id="tags" name="tags[]">
                                                                    @foreach ($tags as $tag)
                                                                        <option value={{ $tag->tag_name }}>{{ $tag->tag_name }}</option>
                                                                    @endforeach
                                                                  </select>
                                                                @error('tags')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Price (VND)<sup class="fs-16">*</sup></label>
                                                                <input type="number" name="price" class="form-control form-control-submit" placeholder="i.e 30000" value={{ old('price') }}>
                                                                @error('price')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Sale Price (VND)<sup class="fs-16">*</sup></label>
                                                                <input type="number" name="sale_price" class="form-control form-control-submit" placeholder="i.e 20000" value={{ old('sale_price') }}>
                                                                @error('sale_price')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Type of fee<sup class="fs-16">*</sup></label>
                                                                <select class="form-control form-control-submit custom-select-2 full-width" id="district" name="type_of_fee">
                                                                    <option>Select type</option>                                                             
                                                                </select>
                                                                @error('type_of_fee')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Fee (%)<sup class="fs-16">*</sup></label>
                                                                <input type="number" name="fee" class="form-control form-control-submit" value={{ old('fee') }}>
                                                                @error('fee')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Explain fee<sup class="fs-16">*</sup>
                                                                </label>
                                                                <textarea name="explain_fee" rows="5" class="form-control form-control-submit" value={{ old('explain_fee') }}></textarea>
                                                                @error('explain_fee')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Description<sup class="fs-16">*</sup>
                                                                </label>
                                                                <textarea name="description" rows="5" class="form-control form-control-submit" value={{ old('description') }}></textarea>
                                                                @error('description')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="">Food image</label>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="file" name="image">
                                                        </div>
                                                        @error('image')
                                                            <p class="text-danger fw-700">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="u-line mb-xl-20"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-success">Register</button>
                                                        </div>
                                                    </div>                                                    
                                                </form>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="text-light-black fw-700">Restaurant Information</h5>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Name</label>
                                                                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control form-control-submit" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Open time</label>
                                                                <input type="time" name="restaurant_openTime" id="restaurant_openTime" class="form-control form-control-submit" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Close time</label>
                                                                <input type="time" name="restaurant_closeTime" id="restaurant_closeTime" class="form-control form-control-submit" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Address</label>
                                                                <textarea name="restaurant_address" id="restaurant_address" class="form-control form-control-submit"  rows="4" disabled></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">City</label>
                                                                <input type="text" name="restaurant_city" id="restaurant_city" class="form-control form-control-submit" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">District</label>
                                                                <input type="text" name="restaurant_district" id="restaurant_district" class="form-control form-control-submit" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Commune</label>
                                                                <input type="text" name="restaurant_commune" id="restaurant_commune" class="form-control form-control-submit" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
@endsection
