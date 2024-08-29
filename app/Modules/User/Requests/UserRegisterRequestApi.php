<?php

namespace Modules\User\Requests;

use App\Http\Requests\ApiRequest;

class UserRegisterRequestApi extends ApiRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'name'=>'required|string',
          'email'=>'required|email|unique:users,email',
          'password'=>'required'
        ];
    }
}
