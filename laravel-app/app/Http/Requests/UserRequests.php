<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        if ($this->path() == 'register') {
            return true;
          } else {
            return false;
          }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:7','confirmed'],
            'password_confirmation' => ['required']
        ];
    }

     /**
     * バリデーションエラーのカスタム属性の取得
     *
     * @return array
     */

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email' => 'E-Mail Address',
            'password' => 'Password',
            'password_confirmation' => 'Confirm Password',
        ];
    }
}
