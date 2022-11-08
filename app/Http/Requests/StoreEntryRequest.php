<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id'=>'required|exists:App\Models\Category,id',
            'name'=>'required|unique:entries|min:3|max:255|',
            'comment'=>'max:1000',
            'amount'=>'required|integer|min:0'
        ];
    }
}
