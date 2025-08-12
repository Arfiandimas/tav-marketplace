<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Type;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteTypeService extends ServiceBase
{
    protected $results;
    protected $typeRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
        $this->typeRepo = new Repository(new Type());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $this->typeRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
