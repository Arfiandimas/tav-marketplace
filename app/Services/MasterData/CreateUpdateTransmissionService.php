<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Transmission;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateUpdateTransmissionService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $transmissionRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
        $this->transmissionRepo = new Repository(new Transmission());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            if ($this->request->id) {
                $dataUpdate = $this->request->all();
                unset($dataUpdate['id']);
                $this->transmissionRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->transmissionRepo->condition(["id" => $this->request->id], true);
            } else {
                $this->results = $this->transmissionRepo->store($this->request->all());
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
