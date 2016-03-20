<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePrintersPostRequest extends Request
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
            'current_id' => 'required'
        ];
    }

	public function messages()
	{
		return [
			'current_id.required' => 'Указанная категория не существует.'
		];
	}
}
