<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;
use Illuminate\Validation\Rule;

class CreateTypeRequest extends ReqValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'id' => 'integer|exists:type,id',
            'name' => ['string', 'max:255',  Rule::unique('type', 'name')->ignore($this->id)->whereNull('deleted_at')],
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:256',
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id']);
        }

        return $rules;
    }
}
