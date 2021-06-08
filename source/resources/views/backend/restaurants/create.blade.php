@extends('layouts.home')
@section('title', 'QuickMunch|Add restaurants')

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
                                                    <img src={{ URL("assets/img/sidebanner-1.jpg") }} class="img-fluid full-width" alt="image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="large-product-box p-relative pb-0">
                                                    <img src={{ URL("assets/img/sidebanner-2.jpg") }} class="img-fluid full-width" alt="image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="large-product-box p-relative pb-0">
                                                    <img src={{ URL("assets/img/sidebanner-3.jpg") }} class="img-fluid full-width" alt="image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="large-product-box p-relative pb-0">
                                                    <img src={{ URL("assets/img/sidebanner-2.jpg") }} class="img-fluid full-width" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-6">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
                                                <form action="{{ route('collaborators.restaurants.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="text-light-black fw-700">General Information</h5>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Restaurant name <sup class="fs-16">*</sup>
                                                                </label>
                                                                <input type="text" name="name" class="form-control form-control-submit" placeholder="i.e Pizza Hut" value={{ old('name') }}>
                                                                @error('name')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Open time</label>
                                                                <input type="time" name="open_time" class="form-control form-control-submit" value={{ old('open_time') }}>
                                                                @error('open_time')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Close time</label>
                                                                <input type="time" name="close_time" class="form-control form-control-submit" value={{ old('close_time') }}>
                                                                @error('close_time')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="u-line mb-xl-20"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="text-light-black fw-700">Location</h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">City <sup class="fs-16">*</sup>
                                                                </label>
                                                                <select class="form-control form-control-submit custom-select-2 full-width" id="city" name="city_id">
                                                                    <option value="0">Select City</option>
                                                                    @foreach ($cities as $city)
                                                                        <option value={{ $city->id }}>{{ $city->city_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('city')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">District</label>
                                                                <select class="form-control form-control-submit custom-select-2 full-width" id="district" name="district_id">
                                                                    <option value="0">Select District</option>     
                                                                    @foreach ($districts as $district)
                                                                        <option value={{ $district->id }}>{{ $district->district_name }}</option>
                                                                    @endforeach                                                        
                                                                </select>
                                                                @error('district')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Commune</label>
                                                                <select class="form-control form-control-submit custom-select-2 full-width" id="commune" name="commune_id">
                                                                    <option value="0">Select Commune</option>     
                                                                    @foreach ($communes as $commune)
                                                                        <option value={{ $commune->id }}>{{ $commune->commune_name }}</option>
                                                                    @endforeach                                                              
                                                                </select>
                                                                @error('commune')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-light-black fw-700">Address</sup>
                                                                </label>
                                                                <input type="text" name="address" class="form-control form-control-submit" placeholder="No.22, Street">
                                                                @error('address')
                                                                <p class="text-danger fw-700">{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                        </div>                                                      
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="u-line mb-xl-20"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="">Restaurant image</label>
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
                                                            <button class="btn btn-success">Register</button>
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
                    <div class="advertisement-slider swiper-container h-auto">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="large-product-box p-relative pb-0">
                                    <img src={{ URL("assets/img/sidebanner-1.jpg") }} class="img-fluid full-width" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="large-product-box p-relative pb-0">
                                    <img src={{ URL("assets/img/sidebanner-2.jpg") }} class="img-fluid full-width" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="large-product-box p-relative pb-0">
                                    <img src={{ URL("assets/img/sidebanner-3.jpg") }} class="img-fluid full-width" alt="image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="large-product-box p-relative pb-0">
                                    <img src={{ URL("assets/img/sidebanner-2.jpg") }} class="img-fluid full-width" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

@endsection
