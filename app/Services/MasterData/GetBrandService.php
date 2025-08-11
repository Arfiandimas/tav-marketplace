<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Brand;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetBrandService extends ServiceBase
{
    protected $results;
    protected $brandRepo;

    public function __construct()
    {
        $this->results = null;
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
            $brand = $this->brandRepo->paginateWithConditions([], 20, 'created_at', 'desc');
            $this->results = [
                'total_data' => $brand->total(),
                'per_page' => intval ($brand->perPage()),
                'current_page' => $brand->currentPage(),
                'last_page' => $brand->LastPage(),
                'next_page_url' => urldecode($brand->nextPageUrl()),
                'result' => $brand->toArray()['data']
            ];
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
