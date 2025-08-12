<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Feature;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateUpdateFeatureService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $featureRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
        $this->featureRepo = new Repository(new Feature());
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
                $feature = $this->featureRepo->condition(["id" => $this->request->id], true);
                if ($this->request->icon) {
                    $file_delete = storage_path().'/app/public/feature-icon/'.$feature?->getRawOriginal('icon');
                    try {
                        unlink($file_delete);
                    } catch (\Throwable $th) {
                    }
                    $file = $this->request->file('icon');
                    $nama_file = filter_var(microtime(true), FILTER_SANITIZE_NUMBER_INT) . randomCode(3) . '.' . $file->getClientOriginalExtension();
                    $destinationPath = storage_path('/app/public/feature-icon');
                    $file->move($destinationPath, $nama_file);
                }

                $dataUpdate = [
                    "feature_category_id" => $this->request->feature_category_id ? $this->request->feature_category_id : null,
                    "name" => $this->request->name ? $this->request->name : $feature->name,
                    "is_default" => isset($this->request->is_default) ? $this->request->is_default : $feature->is_default,
                    "icon" => $this->request->icon ? $nama_file : $feature->icon,
                ];

                $this->featureRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->featureRepo->condition(["id" => $this->request->id], true);
            } else {
                $file = $this->request->file('icon');
                $nama_file = filter_var(microtime(true), FILTER_SANITIZE_NUMBER_INT) . randomCode(3) . '.' . $file->getClientOriginalExtension();
                $destinationPath = storage_path('/app/public/feature-icon');
                $file->move($destinationPath, $nama_file);
                $dataCreate = [
                    "feature_category_id" => $this->request->feature_category_id,
                    "name" => $this->request->name,
                    "is_default" => isset($this->request->is_default) ? $this->request->is_default : false,
                    "icon" => $nama_file,
                ];

                $this->results = $this->featureRepo->store($dataCreate);
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
