<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\CarModel;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateUpdateCarModelService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $carModelRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
        $this->carModelRepo = new Repository(new CarModel());
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
                $this->carModelRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->carModelRepo->condition(["id" => $this->request->id], true);
            } else {
                $this->results = $this->carModelRepo->store($this->request->all());
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
