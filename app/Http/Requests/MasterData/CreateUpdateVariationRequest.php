<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;
use Illuminate\Validation\Rule;

class CreateUpdateVariationRequest extends ReqValidator
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
            'car_model_id' => 'integer|exists:car_model,id',
            'name' => ['string', 'max:255']
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id']);
        }

        return $rules;
    }
}
