<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:5|max:50',
            'description' => 'string|nullable',
            'thumb' => 'string|nullable',
            'price' => 'required|numeric|between:0.01,999.99', // ?
            'series' => 'required|string|max:255',     
            'sale_date' => 'required|date' , 
            'type' => 'required|string|min:5|max:30',
        ];
    }

        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'price.required' => 'A price is required',
            'series.required' => 'A series is required',
            'dale_date.required' => 'A sale_date is required',
            'type.required' => 'A type is required',
        ];
    }
}
