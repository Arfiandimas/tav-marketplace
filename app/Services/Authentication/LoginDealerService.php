<?php

namespace App\Services\Authentication;

use App\Base\ServiceBase;
use App\Models\Dealer;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginDealerService extends ServiceBase
{
    protected Request $request;
    protected $dealerRepo;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->dealerRepo = new Repository(new Dealer());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $dealer = $this->dealerRepo->condition(['email' => $this->request->email], true);
            if (!$dealer || !Hash::check($this->request->password, $dealer->password)) return self::error(null, "gagal, periksa kembali email dan password anda", 401, 401);
            $dealer->token = $dealer->createToken('My Token')->plainTextToken;
            return self::success($dealer);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
