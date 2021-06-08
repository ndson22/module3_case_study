<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'address' => 'required|alpha_num|max:255',
            'commune_id' => 'required',
            'district_id' => 'required',
            'city_id' => 'required',
            'image' => 'required|max:5048|mimes:png,jpg,jpeg',
            'open_time' => 'required',
            'close_time' => 'required',
        ];
    }

    public function messages ()
    {
        return [
            'name.required' => 'Restaurant name is required',
            'name.alpha' => 'Restaurant name is only alphabet',
            'name.max' => 'Restaurant name is max 255 character',

            'address.required' => 'Restaurant address is required',
            'address.alpha_num' => 'Restaurant address includes alphabet and numeric',
            'address.max' => 'Restaurant address is max 255 character',

            'commune_id.required' => 'Commune is required',
            
            'district_id.required' => 'District is required',

            'city_id.required' => 'City is required',

            'image.required' => 'Restaurant image is required',
            'image.image' => 'Invalid image form',
            'image.max' => 'Image max 5048 KB',

            'open_time.required' => 'Open time is required',
            
            'close_time.required' => 'Close time is required',
        ];
    }
}
