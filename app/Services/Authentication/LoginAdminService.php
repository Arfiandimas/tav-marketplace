<?php

namespace App\Services\Authentication;

use App\Base\ServiceBase;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class LoginAdminService extends ServiceBase
{

    protected Request $request;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
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
