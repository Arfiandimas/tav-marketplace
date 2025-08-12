<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\FeatureCategory;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateUpdateFeatureCategoryService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $featureCategoryRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
        $this->featureCategoryRepo = new Repository(new FeatureCategory());
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
                $this->featureCategoryRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->featureCategoryRepo->condition(["id" => $this->request->id], true);
            } else {
                $this->results = $this->featureCategoryRepo->store($this->request->all());
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
