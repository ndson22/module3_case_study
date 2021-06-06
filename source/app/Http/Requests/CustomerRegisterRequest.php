<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100|regex:/^[a-zA-z ]+$/',
            'email' => 'required|email|max:100|unique:customers,email',
            'password' => 'required|max:15|min:6|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function messages ()
    {
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Name is max 100 character',
            'name.regex' => 'Name is only includes alphabet',
            'email.required' => 'Email is required',
            'email.max' => 'Email is max 100 character',
            'email.email' => 'Email is not correct form',
            'email.unique' => 'Email is existed',
            'password.required' => 'Password is required',
            'password.max' => 'Password is max 15 character',
            'password.min' => 'Password is min 6 character',
            'password_confirmation.required' => 'Confirm password incorrect',
            'password.confirmed' => 'Confirm password incorrect',
        ];
    }
}
