<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'title'=>'required|max:50',
            'text'=>'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'*必須項目です',
            'max'=>'*:max文字以内で入力して下さい',
        ];
    }
}
