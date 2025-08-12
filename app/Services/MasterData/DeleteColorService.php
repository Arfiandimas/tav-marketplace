<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Color;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;

class DeleteColorService extends ServiceBase
{
    protected $results;
    protected $colorRepo;

    public function __construct(protected int $id)
    {
        $this->results = $id;
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
            $this->colorRepo->delete($this->id);
            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
