<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterData\CreateUpdateStoreLocationRequest;
use App\Services\MasterData\CreateUpdateStoreLocationService;
use App\Services\MasterData\DeleteStoreLocationService;
use App\Services\MasterData\GetStoreLocationService;

class StoreLocationController extends Controller
{
    public function index()
    {
        try {
            $results = (new GetStoreLocationService())->call();
            if ($results->status() != 200) {
                return $this->error($results->message(), __FUNCTION__, $results->status(), null, $results->status());
            }
            return $this->success($results->data(), $results->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }

    public function createUpdate(CreateUpdateStoreLocationRequest $request)
    {
        try {
            $results = (new CreateUpdateStoreLocationService($request))->call();
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

    public function delete($id)
    {
        try {
            $results = (new DeleteStoreLocationService($id))->call();
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
