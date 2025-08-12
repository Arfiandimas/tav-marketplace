<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Type;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetTypeService extends ServiceBase
{
    protected $results;
    protected $typeRepo;

    public function __construct()
    {
        $this->results = null;
        $this->typeRepo = new Repository(new Type());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $type = $this->typeRepo->paginateWithConditions([], 20, 'created_at', 'desc');
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
