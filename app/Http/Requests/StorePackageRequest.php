<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePackageRequest extends FormRequest
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
            //
     'name' => 'required|string',
     'description' =>'required|string',
     'quantity' => 'required|numeric',
     'category' => 'required|string',
     'start_date' => 'required|string',
     'end_date'  =>'required|string',
    //  'slug' => 'required'
        ];
    }
}
