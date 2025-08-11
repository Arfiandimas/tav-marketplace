<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\StoreLocation;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteStoreLocationService extends ServiceBase
{
    protected $results;
    protected $storeLocationRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
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
            $this->storeLocationRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
