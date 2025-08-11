<?php

namespace App\Services\User;

use App\Base\ServiceBase;
use App\Models\Car;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class ListMobilService extends ServiceBase
{

    protected Request $request;
    protected $carRepo;
    protected $results;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->carRepo = new Repository(new Car());
        $this->results = [];
    }

    /**
     * main method of this service
     *
     * @return ServiceResponse
     */
    public function call(): ServiceResponse
    {
        try{
            $cars = $this->carRepo->paginate(20);
            $this->results = [
                'total_data' => $cars->total(),
                'per_page' => intval ($cars->perPage()),
                'current_page' => $cars->currentPage(),
                'last_page' => $cars->LastPage(),
                'next_page_url' => urldecode($cars->nextPageUrl()),
                'result' => $cars->toArray()['data']
            ];
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
