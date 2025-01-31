<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class CategoryRequest extends FormRequest
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
            'name' =>['required','string','max:10','unique:categories']
        ];
    }

    public function messages(){
        return [
            'name.required'=>'カテゴリを入力してください',
            'name.string' => 'カテゴリを文字列で入力して下さい',
            'name.max' => 'カテゴリを10文字いないで入力して下さい',
            'name.unique' => 'カテゴリが既に存在しています',
        ];
    }
}