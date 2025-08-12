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
            $data = $this->carModelRepo->paginateWithConditions(['brand_id' => $this->brand_id], 20, 'created_at', 'desc');
            $this->results = [
                'total_data' => $data->total(),
                'per_page' => intval ($data->perPage()),
                'current_page' => $data->currentPage(),
                'last_page' => $data->LastPage(),
                'next_page_url' => urldecode($data->nextPageUrl()),
                'result' => $data->toArray()['data']
            ];
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
