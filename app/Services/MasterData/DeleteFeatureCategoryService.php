<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\FeatureCategory;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteFeatureCategoryService extends ServiceBase
{
    protected $results;
    protected $featureCategoryRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
        $this->featureCategoryRepo = new Repository(new FeatureCategory());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $this->featureCategoryRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
