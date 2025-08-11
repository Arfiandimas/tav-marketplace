<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\StoreLocation;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateUpdateStoreLocationService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $storeLocationRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
        $this->storeLocationRepo = new Repository(new StoreLocation());
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
                $this->storeLocationRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->storeLocationRepo->condition(["id" => $this->request->id], true);
            } else {
                $this->results = $this->storeLocationRepo->store($this->request->all());
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
