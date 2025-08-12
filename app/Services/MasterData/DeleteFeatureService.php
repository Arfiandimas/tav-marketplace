<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Feature;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteFeatureService extends ServiceBase
{
    protected $results;
    protected $featureRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
        $this->featureRepo = new Repository(new Feature());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $this->featureRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
