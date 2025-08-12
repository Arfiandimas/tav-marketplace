<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterData\CreateTypeRequest;
use App\Services\MasterData\CreateTypeService;
use App\Services\MasterData\DeleteTypeService;
use App\Services\MasterData\GetTypeService;

class TypeController extends Controller
{
    public function index()
    {
        try {
            $results = (new GetTypeService())->call();
            if ($results->status() != 200) {
                return $this->error($results->message(), __FUNCTION__, $results->status(), null, $results->status());
            }
            return $this->success($results->data(), $results->message(), __FUNCTION__, 200, 200);
        } catch (\Throwable $th) {
            $this->logError($th, __METHOD__);
            return $this->error($th->getMessage(), __FUNCTION__);
        }
    }

    public function createUpdate(CreateTypeRequest $request)
    {
        try {
            $results = (new CreateTypeService($request))->call();
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
            $results = (new DeleteTypeService($id))->call();
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
