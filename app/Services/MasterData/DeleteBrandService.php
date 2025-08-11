<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Brand;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteBrandService extends ServiceBase
{
    protected $results;
    protected $brandRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
        $this->brandRepo = new Repository(new Brand());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $this->brandRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
