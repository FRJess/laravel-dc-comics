<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:2',
            'thumb' => 'required|max:255|min:10',
            'series' => 'required|max:50',
            'type' => 'max:20',
            'price' => 'required|max:10|min:2',
            'sale_date' => 'required|max:15|min:2',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Comic title is required',
            'title.max' => 'The maximum lenght for comic title is :max characters',
            'title.min' => 'The minimum lenght for comic title is :min characters',
            'thumb.required' => 'Image URL is required',
            'thumb.max' => 'The maximum lenght for Image URL is :max characters',
            'thumb.min' => 'The minimum lenght for Image URL is :min characters',
            'series.required' => 'Series is required',
            'series.max' => 'The maximum lenght for series is :max characters',
            'type.max' => 'The maximum lenght for type is :max characters',
            'price.required' => 'Price is required',
            'price.max' => 'The maximum lenght for price is :max characters',
            'price.min' => 'The minimum lenght for price is :min characters',
            'sale_date.required' => 'Release date is required',
            'sale_date.max' => 'The maximum lenght for release date is :max characters',
            'sale_date.min' => 'The minimum lenght for release date is :min characters',
        ];
    }
}
