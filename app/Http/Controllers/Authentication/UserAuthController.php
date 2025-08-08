<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginUserRequest;
use App\Models\User;
use App\Services\Authentication\HandleProviderCallbackService;
use App\Services\Authentication\LoginUserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserAuthController extends Controller
{
    public function login(LoginUserRequest $request) {
        try {
            $login = (new LoginUserService($request))->call();
            if ($login->status() != 200) {
                return $this->error($login->message(), __FUNCTION__, $login->status(), null, $login->status());
            }
            return $this->success($login->data(), $login->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $login = (new HandleProviderCallbackService())->call();
            if ($login->status() != 200) {
                return $this->error($login->message(), __FUNCTION__, $login->status(), null, $login->status());
            }
            return $this->success($login->data(), $login->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }
}
