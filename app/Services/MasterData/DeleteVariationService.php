<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Variation;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteVariationService extends ServiceBase
{
    protected $results;
    protected $variationRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
        $this->variationRepo = new Repository(new Variation());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $this->variationRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
