@extends('layouts.home')
@section('title', 'Login')

@section('content')

<div class="inner-wrapper">
    <div class="container-fluid no-padding">
      <div class="row no-gutters overflow-auto">
        <div class="col-md-6">
          <div class="main-banner">
            <img src={{ URL("assets/img/banner/banner-1.jpg") }} class="img-fluid full-width main-img" alt="banner">
            <div class="overlay-2 main-padding">
              <img src={{ URL("assets/img/logo-2.jpg") }} class="img-fluid" alt="logo">
            </div>
            <img src={{ URL("assets/img/banner/burger.png") }} class="footer-img" alt="footer-img">
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-2 user-page main-padding">
            <div class="login-sec">
              <div class="login-box">
                <form action="{{ route('customer.verify') }}" method="POST" id="login-form">
                  @csrf
                  <h4 class="text-light-black fw-600">Sign in with your account</h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="text-light-white fs-14">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-submit" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label class="text-light-white fs-14">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-submit" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button  class="btn-second btn-submit full-width">
                          <img src={{ URL("assets/img/M.png") }} alt="btn logo">Sign in</button>
                      </div>
                      @if (Session::has('error'))
                      <div class="form-group text-center text-danger mb-0">{{ Session::get('error') }}
                      </div>
                      @endif
                      <div class="form-group text-center mb-0"> <a href="{{ route('customer.register') }}">Create your account</a>
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

@endsection