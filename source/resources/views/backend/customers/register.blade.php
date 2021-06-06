@extends('layouts.home')
@section('title', 'Register')

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
                <form action="{{ route('customer.store') }}" method="post">
                  @csrf
                  <h4 class="text-light-black fw-600">Create your account</h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="text-light-white fs-14"><b>Your name</b></label>
                        <input type="text" name="name" class="form-control form-control-submit" placeholder="Enter your name" value="{{ old('name') }}">
                      </div>
                      @error('name')
                        <p class="text-danger fs-14"><b>{{ $message }}</b></p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="text-light-white fs-14"><b>Email</b></label>
                        <input type="email" name="email" class="form-control form-control-submit" placeholder="Enter your email" value="{{ old('email') }}">
                      </div>
                      @error('email')
                        <p class="text-danger fs-14"><b>{{ $message }}</b></p>
                      @enderror
                      <div class="form-group">
                        <label class="text-light-white fs-14"><b>Password</b></label>
                        <input type="password" id="password-field" name="password" class="form-control form-control-submit" placeholder="Enter your password">
                      </div>
                      @error('password')
                        <p class="text-danger fs-14"><b>{{ $message }}</b></p>
                      @enderror
                      <div class="form-group">
                        <label class="text-light-white fs-14"><b>Confirm password</b></label>
                        <input type="password" id="password-field" name="password_confirmation" class="form-control form-control-submit" placeholder="Enter your password">
                      </div>
                      @error('password_confirmation')
                        <p class="text-danger fs-14"><b>{{ $message }}</b></p>
                      @enderror
                      <div class="form-group">
                        <button type="submit" class="btn-second btn-submit full-width">Create your account</button>
                      </div>
                      @if (Session::has('success'))
                      <div class="form-group text-center">
                        <p class="text-light-black mb-0">{{ Session::get('success') }} <a href="{{ route("customer.login") }}">Sign in now</a>
                        </p>
                      </div>
                      @else
                      <div class="form-group text-center">
                        <p class="text-light-black mb-0">Have an account? <a href="{{ route("customer.login") }}">Sign in</a>
                        </p>
                      </div>
                      @endif
                       <span class="text-light-black fs-12 terms">By creating your Quickmunch account, you agree to the <a href="#"> Terms of Use </a> and <a href="#"> Privacy Policy.</a></span>
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