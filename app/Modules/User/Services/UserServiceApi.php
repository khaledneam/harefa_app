<?php

namespace Modules\User\Services;

use App\Models\User;
use App\Traits\ApiTraits;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Repositries\UserRepositry;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserServiceApi
{
    use ApiTraits;

    private UserRepositry $userRepositry;

    public function __construct(UserRepositry $userRepositry)
    {
        $this->userRepositry = $userRepositry;
    }

    public function login($request)
    {
        // Validate the request
        $credentials = $request->only('email', 'password');

        if (!$token = auth('api')->attempt($credentials)) {
            return $this->returnError('Unauthorized');
        }

        // Return the token and user details

        return $this->returnDataWithToken(auth('api')->user(), $token);

    }


    public function register($request)
    {
        $data = $request->toArray();

        if ($data) {
            // Hash the password before storing it in the database
            $plainPassword = $data['password'];
            $data['password'] = Hash::make($plainPassword);
        }

        // Store the user
        $user = $this->userRepositry->store($data);

        // Now attempt to authenticate using the original plain text password
        $credentials = [
            'email' => $data['email'],
            'password' => $plainPassword, // Use the plain text password here
        ];

        $token = auth('api')->attempt($credentials);

        return $this->returnDataWithToken(auth('api')->user(), $token);
    }

    public function update($request)
    {
        $auth = auth('api')->user();
        $data = $request->toArray();
        $data['id'] = $auth->id;

        if (isset($data['password']))
        {
            // Hash the password before storing it in the database
            $plainPassword = $data['password'];
            $data['password'] = Hash::make($plainPassword);
        }

        $user = $this->userRepositry->update($data);

        return $this->returnSuccessResponseWithData($user);

    }


}
