<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'name' => 'required',
            'explanation' => 'required|max:225',
            'image' => 'required|mimes:jpeg,png',
            'category_id' => 'required|integer',
            'state' => 'required|integer',
            'price' => 'required|integer|min:0',
        ];
    }

}
