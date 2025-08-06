<?php

namespace App\Services\Authentication;

use App\Base\ServiceBase;
use App\Responses\ServiceResponse;

class RegisterService extends ServiceBase
{

    public function __construct()
    {

    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{

            return self::success(null);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
