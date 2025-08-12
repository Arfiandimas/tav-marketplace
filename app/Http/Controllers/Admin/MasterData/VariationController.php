<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterData\CreateUpdateVariationRequest;
use App\Services\MasterData\CreateUpdateVariationService;
use App\Services\MasterData\DeleteVariationService;
use App\Services\MasterData\GetVariationService;

class VariationController extends Controller
{
    public function index($brand_id, $car_model_id)
    {
        try {
            $results = (new GetVariationService($car_model_id))->call();
            if ($results->status() != 200) {
                return $this->error($results->message(), __FUNCTION__, $results->status(), null, $results->status());
            }
            return $this->success($results->data(), $results->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }

    public function createUpdate(CreateUpdateVariationRequest $request)
    {
        try {
            $results = (new CreateUpdateVariationService($request))->call();
            if ($results->status() != 200) {
                return $this->error($results->message(), __FUNCTION__, $results->status(), null, $results->status());
            }
            $statusCode = $request->id ? 200 : 201;
            return $this->success($results->data(), $results->message(), __FUNCTION__, $statusCode, $statusCode);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }

    public function delete($brand_id, $car_model_id, $id)
    {
        try {
            $results = (new DeleteVariationService($id))->call();
            if ($results->status() != 200) {
                return $this->error($results->message(), __FUNCTION__, $results->status(), null, $results->status());
            }
            return $this->success($results->data(), $results->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }
}
