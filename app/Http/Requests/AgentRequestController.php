<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneNumber;
class AgentRequestController extends FormRequest
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
        $phoneRegex = "/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})?$/";

        return [
            //
        'fullName' => 'required|unique:agents|string',
        'age' => 'required|integer',
        'gender' =>'required|string',
        // 'phoneNumber' => ['required',"regex:$phoneRegex"],//'required|regex:/(01)[0-9]{9}/',//'required|integer',
        'address' => 'required|string',
        'nationality' => 'required|string',
        'village' => 'required|string',
        ];
    }
}
