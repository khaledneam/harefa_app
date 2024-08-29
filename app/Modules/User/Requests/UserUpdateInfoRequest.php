<?php

namespace Modules\User\Requests;

use App\Http\Requests\ApiRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserUpdateInfoRequest extends ApiRequest
{

    public function authorize()
    {
       return true;
    }

    public function rules()
    {
        $record = auth('api')->user();

        return [
            'email' => [
                'sometimes',
                'email',
                function ($attribute, $value, $fail) use ($record) {
                    if (DB::table('users')->where('email', $value)->where('id', '!=', $record->id)->exists()) {
                        $fail('The email has already been taken.');
                    }
                },
            ],
            'password' => 'string|min:8',
            'name' => 'sometimes|string|max:100|min:3',
        ];
    }
}
