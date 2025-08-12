<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Variation;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetVariationService extends ServiceBase
{
    protected $results;
    protected $variationRepo;

    public function __construct(protected int $car_model_id)
    {
        $this->results = null;
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
            $data = $this->variationRepo->paginateWithConditions(['car_model_id' => $this->car_model_id], 20, 'created_at', 'desc');
            $this->results = [
                'total_data' => $data->total(),
                'per_page' => intval ($data->perPage()),
                'current_page' => $data->currentPage(),
                'last_page' => $data->LastPage(),
                'next_page_url' => urldecode($data->nextPageUrl()),
                'result' => $data->toArray()['data']
            ];
            return self::success($this->results);
            return self::success(null);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
