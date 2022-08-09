<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'mail_address' => 'required|email|unique:users|max:100',
            'password' => 'required|alpha|max:255',
            'confirm_password' => 'same:password',
            'name' => 'required|max:255',
            'address' => 'max:255',
            'phone' => 'numeric|digits_between:1,15',
        ];
    }
}
