<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginUserRequest;
use App\Services\Authentication\LoginUserService;
use Illuminate\Http\Request;

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
}
