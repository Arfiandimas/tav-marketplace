<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Color;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class GetColorService extends ServiceBase
{
    protected $results;
    protected $colorRepo;

    public function __construct()
    {
        $this->results = null;
        $this->colorRepo = new Repository(new Color());
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $data = $this->colorRepo->paginateWithConditions([], 20, 'created_at', 'desc');
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
