<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterData\CreateUpdateFeatureRequest;
use App\Services\MasterData\CreateUpdateFeatureService;
use App\Services\MasterData\DeleteFeatureService;
use App\Services\MasterData\GetFeatureService;

class FeatureController extends Controller
{
    public function index($feature_category_id)
    {
        try {
            $results = (new GetFeatureService($feature_category_id))->call();
            if ($results->status() != 200) {
                return $this->error($results->message(), __FUNCTION__, $results->status(), null, $results->status());
            }
            return $this->success($results->data(), $results->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }

    public function createUpdate(CreateUpdateFeatureRequest $request)
    {
        try {
            $results = (new CreateUpdateFeatureService($request))->call();
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

    public function delete($feature_category_id, $id)
    {
        try {
            $results = (new DeleteFeatureService($id))->call();
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
