<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;
use Illuminate\Validation\Rule;

class CreateUpdateStoreLocationRequest extends ReqValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'id' => 'integer|exists:store_location,id',
            'name' => 'string|max:255',
            'address' => 'string|max:255',
            'maps' => 'string',
            'opening_time' => 'date_format:H:i:s',
            'closing_time' => 'date_format:H:i:s',
            'opening_day' => 'in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'closing_day' => 'in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu,Minggu',
            'phone' => ['string', 'max:20',  Rule::unique('store_location', 'phone')->ignore($this->id)->whereNull('deleted_at')]
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id', 'nullable']);
        }

        return $rules;
    }
}
