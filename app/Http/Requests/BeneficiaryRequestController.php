<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRequestController extends FormRequest
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
        'fullName' =>'required|unique:Beneficiaries|string',
        'age' => 'required',
        'gender' => 'required|string',
        // 'phoneNumber' =>'required',
        'address' => 'required|string',
        'nationality' => 'required|string',
        'village' => 'required|string',
        'acres' => 'required|string',
        'ownership' => 'required|string',
        ];
    }
}
