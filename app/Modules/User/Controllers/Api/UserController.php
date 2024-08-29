<?php

namespace Modules\User\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiTraits;
use Modules\User\Requests\UserLoginRequestApi;
use Modules\User\Requests\UserRegisterRequestApi;
use Modules\User\Requests\UserUpdateInfoRequest;
use Modules\User\Services\UserServiceApi;

class UserController extends Controller
{
    use ApiTraits;
    private UserServiceApi $userService;

    public function __construct(UserServiceApi $userService)
    {
        $this->userService = $userService;
    }

    public function Login(UserLoginRequestApi $request)
    {
        return $this->userService->login($request);
    }

    public function register(UserRegisterRequestApi $request)
    {
        return  $this->userService->register($request);
    }

    public function me()
    {
        return $this->returnSuccessResponseWithData(auth('api')->user());
    }

    public function update(UserUpdateInfoRequest $request)
    {
       return $this->userService->update($request);
    }
    public function logout()
    {
        auth('api')->logout();
        return $this->returnSuccessResponse('Logged out successfully');

    }

}
