<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CreateUpdateCarModelRequest extends ReqValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'id' => 'integer|exists:car_model,id',
            'brand_id' => 'integer|exists:brand,id',
            'name' => [
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    $query = DB::table('car_model')
                        ->whereNull('deleted_at')
                        ->where('id', '!=', $this->id)
                        ->whereRaw('LOWER(name) = ?', [strtolower($value)]);
                    
                    if ($query->exists()) {
                        $fail('The name has already been taken.');
                    }
                },
            ],
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id']);
        }

        return $rules;
    }
}
