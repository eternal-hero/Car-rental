<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class DeleteImageRules extends FormRequest
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
	        'image_id' => 'required|exists:car_images,id',
        ];
    }
}
