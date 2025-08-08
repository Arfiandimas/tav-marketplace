<?php

namespace App\Services\Authentication;

use App\Base\ServiceBase;
use App\Models\User;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Laravel\Socialite\Facades\Socialite;

class HandleProviderCallbackService extends ServiceBase
{
    protected $userRepo;
    
    public function __construct()
    {
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
            $user = Socialite::driver('google')->stateless()->user();

            $finduser = $this->userRepo->condition(['gauth_id' => $user->id], true);

            if (!$finduser) {
                $finduser = $this->userRepo->store([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gauth_id'=> $user->id,
                    'gauth_type'=> 'google',
                    'email_verified_at' => now(),
                    'password' => encrypt('admin@123')
                ]);
            }

            $finduser->token = $finduser->createToken('My Token')->plainTextToken;

            return self::success($finduser);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
