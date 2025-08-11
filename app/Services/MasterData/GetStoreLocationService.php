<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\StoreLocation;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetStoreLocationService extends ServiceBase
{
    protected $results;
    protected $storeLocationRepo;
    
    public function __construct()
    {
        $this->results = null;
        $this->storeLocationRepo = new Repository(new StoreLocation());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $storeLocation = $this->storeLocationRepo->paginateWithConditions([], 20, 'created_at', 'desc');
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
