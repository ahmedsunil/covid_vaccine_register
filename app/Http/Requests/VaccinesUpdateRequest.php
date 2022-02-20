<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VaccinesUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
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
            'brand' => 'required|string|max:255|unique:vaccines,brand,' . $this->vaccine->id,
            'expiry_date' => 'required|date',
            'type' => 'required|string|max:255',
            'approved_for' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'number_of_doses' => 'required|in:1,2,booster'
        ];
    }
}
