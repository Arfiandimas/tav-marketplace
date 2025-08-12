<?php

namespace App\Services\MasterData;

use App\Base\ServiceBase;
use App\Models\Type;
use App\Repositories\Repository;
use App\Responses\ServiceResponse;
use Illuminate\Http\Request;

class CreateTypeService extends ServiceBase
{
    protected $results;
    protected Request $request;
    protected $typeRepo;

    public function __construct(Request $request)
    {
        $this->results = null;
        $this->request = $request;
        $this->typeRepo = new Repository(new Type());
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
                $type = $this->typeRepo->condition(["id" => $this->request->id], true);
                if ($this->request->icon) {
                    $file_delete = storage_path().'/app/public/type-icon/'.$type?->getRawOriginal('icon');
                    try {
                        unlink($file_delete);
                    } catch (\Throwable $th) {
                    }
                    $file = $this->request->file('icon');
                    $nama_file = filter_var(microtime(true), FILTER_SANITIZE_NUMBER_INT) . randomCode(3) . '.' . $file->getClientOriginalExtension();
                    $destinationPath = storage_path('/app/public/type-icon');
                    $file->move($destinationPath, $nama_file);
                }

                $dataUpdate = [
                    "name" => $this->request->name ? $this->request->name : $type->name,
                    "icon" => $this->request->icon ? $nama_file : $type->icon,
                ];

                $this->typeRepo->update($this->request->id, $dataUpdate);
                $this->results = $this->typeRepo->condition(["id" => $this->request->id], true);
            } else {
                $file = $this->request->file('icon');
                $nama_file = filter_var(microtime(true), FILTER_SANITIZE_NUMBER_INT) . randomCode(3) . '.' . $file->getClientOriginalExtension();
                $destinationPath = storage_path('/app/public/type-icon');
                $file->move($destinationPath, $nama_file);
                $dataCreate = [
                    "name" => $this->request->name,
                    "icon" => $nama_file
                ];

                $this->results = $this->typeRepo->store($dataCreate);
            }

            return self::success($this->results);
        }catch (\Throwable $th) {
            return self::catchError($th, $th->getMessage());
        }

    }
}
