<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CheckRequest extends Request
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
			'price' => 'required',
			'master' => 'required',
			// 'catridge_model' => 'required'
		];
	}

	public function messages()
	{
		return [
			'price.required' => 'цена обязательно должно быть заполнено',
			'master.required' => 'Имя мастера обязательно должно быть заполнено',
			// 'catridge_model.required' => 'Модель катриджа обязательно должно быть заполнено'


		];
	}
}
