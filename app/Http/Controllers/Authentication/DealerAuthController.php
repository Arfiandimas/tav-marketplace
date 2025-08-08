<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\LoginDealerRequest;
use App\Services\Authentication\LoginDealerService;
use Illuminate\Http\Request;

class DealerAuthController extends Controller
{
    public function login(LoginDealerRequest $request) {
        try {
            $login = (new LoginDealerService($request))->call();
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
