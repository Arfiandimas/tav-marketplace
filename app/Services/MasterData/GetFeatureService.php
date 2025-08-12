<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Feature;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetFeatureService extends ServiceBase
{
    protected $results;
    protected $featureRepo;

    public function __construct(protected int $featureCategoryId)
    {
        $this->results = null;
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
            $type = $this->featureRepo->paginateWithConditions(['feature_category_id' => $this->featureCategoryId], 20, 'created_at', 'desc');
            $this->results = [
                'total_data' => $type->total(),
                'per_page' => intval ($type->perPage()),
                'current_page' => $type->currentPage(),
                'last_page' => $type->LastPage(),
                'next_page_url' => urldecode($type->nextPageUrl()),
                'result' => $type->toArray()['data']
            ];
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
