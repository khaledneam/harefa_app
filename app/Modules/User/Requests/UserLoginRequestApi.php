<?php

namespace Modules\User\Requests;

use App\Http\Requests\ApiRequest;

class UserLoginRequestApi extends ApiRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
       return [
         'email'=>'required|email',
         'password'=>'required',
       ];
    }
}
