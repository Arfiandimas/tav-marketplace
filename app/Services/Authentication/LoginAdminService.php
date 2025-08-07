<?php

namespace App\Services\Authentication;

use App\Base\ServiceBase;
use App\Models\Admin;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAdminService extends ServiceBase
{

    protected Request $request;
    protected $adminRepo;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->adminRepo = new Repository(new Admin());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $admin = $this->adminRepo->condition(['email' => $this->request->email], true);
            if (!$admin || !Hash::check($this->request->password, $admin->password)) return self::error(null, "gagal, periksa kembali email dan password anda", 401, 401);
            $admin->token = $admin->createToken('My Token')->plainTextToken;
            return self::success($admin);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
