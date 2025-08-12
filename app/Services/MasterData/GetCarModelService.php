<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\CarModel;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetCarModelService extends ServiceBase
{
    protected $results;
    protected $carModelRepo;

    public function __construct(protected int $brand_id)
    {
        $this->results = null;
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
            $storeLocation = $this->carModelRepo->paginateWithConditions(['brand_id' => $this->brand_id], 20, 'created_at', 'desc');
            $this->results = [
                'total_data' => $storeLocation->total(),
                'per_page' => intval ($storeLocation->perPage()),
                'current_page' => $storeLocation->currentPage(),
                'last_page' => $storeLocation->LastPage(),
                'next_page_url' => urldecode($storeLocation->nextPageUrl()),
                'result' => $storeLocation->toArray()['data']
            ];
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
