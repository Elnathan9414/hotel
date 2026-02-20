<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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
            'hotel_id'        => 'required|exists:hotels,id',
            'number'          => 'required|string|max:50',
            'type'            => 'required|string|max:100',
            'capacity'        => 'required|integer|min:1',
            'price_per_night' => 'required|numeric|min:0',

        ];
    }
}
