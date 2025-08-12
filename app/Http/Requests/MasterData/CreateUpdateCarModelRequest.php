<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;
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
            'name' => ['string', 'max:255',  Rule::unique('car_model', 'name')->ignore($this->id)->whereNull('deleted_at')]
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id']);
        }

        return $rules;
    }
}
