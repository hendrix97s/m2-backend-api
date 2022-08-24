<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
          'name'        => 'required|string|max:255',
          'description' => 'required|string|max:255',
          'price'       => 'required|numeric',
        ];
    }

    public function messages()
    {
      return [
        'name.required'        => __('product.validate.required.name'),
        'name.max'             => __('product.validate.max.name'),
        'name.string'          => __('product.validate.string.name'),
        'description.required' => __('product.validate.required.description'),
        'description.max'      => __('product.validate.max.description'),
        'description.string'   => __('product.validate.string.description'),
        'price.required'       => __('product.validate.required.price'),
        'price.numeric'        => __('product.validate.numeric.price'),
      ];
    }
}
