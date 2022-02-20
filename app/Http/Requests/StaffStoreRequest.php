<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffStoreRequest extends FormRequest
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
    public function rules() : array
    {
        return [
            'name' => 'string|required|max:255',
            'government_id' => 'string|required|unique:staff,government_id',
            'record_card_number' => 'string|required|unique:staff,record_card_number',
            'designation' => 'string|required|in:registered_nurse,doctor'
        ];
    }
}
