<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProduct extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'min:3',
                'max:255',
            ],
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
        ];

        if ($this->method() == 'PUT') {
            $rules['img_url'] = ['nullable', 'img_url'];
        }

        return $rules;
    }
}
