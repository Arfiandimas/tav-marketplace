<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Transmission;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetTransmissionService extends ServiceBase
{
    protected $results;
    protected $transmissionRepo;

    public function __construct()
    {
        $this->results = null;
        $this->transmissionRepo = new Repository(new Transmission());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $storeLocation = $this->transmissionRepo->paginateWithConditions([], 20, 'created_at', 'desc');
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
