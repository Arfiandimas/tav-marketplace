<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;

class CreateUpdateFeatureRequest extends ReqValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'id' => 'integer|exists:feature,id',
            'feature_category_id' => 'integer|exists:feature_category,id',
            'is_default' => 'boolean',
            'name' => 'string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:256',
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id', 'is_default']);
        }

        return $rules;
    }
}
