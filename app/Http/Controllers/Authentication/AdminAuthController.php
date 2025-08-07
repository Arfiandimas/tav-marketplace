<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\AdminLoginRequest;
use App\Services\Authentication\LoginAdminService;

class AdminAuthController extends Controller
{
    public function login(AdminLoginRequest $request) {
        try {
            $login = (new LoginAdminService($request))->call();
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
