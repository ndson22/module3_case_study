<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-z ]+$/|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'fee' => 'required|numeric',
            'explain_fee' => 'required|alpha_num',
            'prepare_food' => 'required|numeric|min:1',
            'category_id' => 'required',
            'restaurant_id' => 'required',
            'type_of_fee' => 'nullable',
        ];
    }

    public function messages ()
    {
        return [
            'name.required' => 'Food name is required',
            'name.regex' => 'Food name is incorrect',
            'name.max' => 'Food name max 255 character',
            'price.required' => 'Food price is required',
            'price.numeric' => 'Food price is a number',
            'sale_price.required' => 'Food sale price is required',
            'sale_price.numeric' => 'Food sale price is a number',
            'fee.required' => 'Fee price is required',
            'fee.numeric' => 'Fee price is a number',
            'explain_fee.required' => 'Explain fee price is required',
            'explain_fee.alpha_num' => 'Explain fee price is only alphabet and number',
            'prepare_food.required' => 'Prepare food is required',
            'prepare_food.numeric' => 'Prepare food is a number',
            'prepare_food.min' => 'Prepare food is greater than 0',
            'category_id.required' => 'Category is required',
            'restaurant_id.required' => 'Restaurant is required',
        ];
    }
}
