<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Transmission;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteTransmissionService extends ServiceBase
{
    protected $results;
    protected $transmissionRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
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
            $this->transmissionRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
