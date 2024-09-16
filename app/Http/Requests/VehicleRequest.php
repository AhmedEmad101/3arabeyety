<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

                'Model_ID'=>['required','int'],
                'Tank_ID'=>['required','int'],
                'Owner_ID'=>['required','int'],
                'Transimision_ID'=>['required','int'],
                'Type_ID'=>['required','int'],
                'Motor_ID'=>['required','int'],
                'Color_ID'=>['required','int'],
                'Condition_ID'=>['required','int'],
                'price'=>['required','int'],
                'photo'=>['required','String']
                ];
    }
}
