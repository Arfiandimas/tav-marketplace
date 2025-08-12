<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Variation;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateUpdateVariationService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $variationRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
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
            if ($this->request->id) {
                $dataUpdate = $this->request->all();
                unset($dataUpdate['id']);
                $this->variationRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->variationRepo->condition(["id" => $this->request->id], true);
            } else {
                $this->results = $this->variationRepo->store($this->request->all());
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
