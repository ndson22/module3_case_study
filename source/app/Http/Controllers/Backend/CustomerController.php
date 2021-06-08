<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CustomerRegisterRequest;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function login ()
    {
        // Kiểm tra xem người dùng đăng nhập chưa 
        // nếu đăng nhập rồi thì k cho vào trang đăng nhập nữa
        if (!Auth::check()) {
            return view('backend.customers.login');
        } else {
            return redirect()->route('home.index');
        }
    }

    public function verify (Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return view('home');
        }
        return redirect()->back()->with("error", "Email or password is not correct");
    }

    public function logout (Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index');
    }

    public function register ()
    {
        return view('backend.customers.register');
    }

    public function store (CustomerRegisterRequest $request)
    {
        $customer = new Customer ();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();
        return redirect()->route('customer.register')->with('success', 'Register success!');
    }
}
