<?php

namespace App\Services\Authentication;

use App\Base\ServiceBase;
use App\Models\User;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginUserService extends ServiceBase
{
    protected Request $request;
    protected $userRepo;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->userRepo = new Repository(new User());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $user = $this->userRepo->orCondition(['email' => $this->request->email_or_phone], ['phone' => $this->request->email_or_phone], true);
            if (!$user || !Hash::check($this->request->password, $user->password)) return self::error(null, "gagal, periksa kembali email dan password anda", 401, 401);
            $user->token = $user->createToken('My Token')->plainTextToken;
            return self::success($user);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
