<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\ListMobilService;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function list(Request $request) {
        try {
            $login = (new ListMobilService($request))->call();
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
