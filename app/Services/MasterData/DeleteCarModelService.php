<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\CarModel;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteCarModelService extends ServiceBase
{
    protected $results;
    protected $carModelRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
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
            $this->carModelRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
