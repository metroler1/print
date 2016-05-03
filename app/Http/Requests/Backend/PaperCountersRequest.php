<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class PaperCountersRequest extends Request
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
            'device_name' => 'required',
            'number_of' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'device_name.required' => 'Все поля должны быть заполнены',
            'number_of.integer' => 'Колличество должно быть циферками)',

        ];
    }
}
