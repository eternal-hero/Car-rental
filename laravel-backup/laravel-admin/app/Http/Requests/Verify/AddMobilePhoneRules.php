<?php

namespace App\Http\Requests\Verify;

use Illuminate\Foundation\Http\FormRequest;

class AddMobilePhoneRules extends FormRequest
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
	        'phone_number' => 'required|numeric',
	        'country_code' => 'required|numeric'
        ];
    }
}
