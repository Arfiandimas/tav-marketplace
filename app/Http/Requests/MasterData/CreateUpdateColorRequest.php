<?php

namespace App\Http\Requests\MasterData;

use App\Http\Requests\ReqValidator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CreateUpdateColorRequest extends ReqValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'id' => 'integer|exists:color,id',
            'name' => [
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    $query = DB::table('color')
                        ->whereNull('deleted_at')
                        ->where('id', '!=', $this->id)
                        ->whereRaw('LOWER(name) = ?', [strtolower($value)]);
                    
                    if ($query->exists()) {
                        $fail('The name has already been taken.');
                    }
                },
            ],
            'hex' => ['regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', 'max:7',  Rule::unique('color', 'hex')->ignore($this->id)->whereNull('deleted_at')]
        ];
        
        if(!isset($this->id)){
            $rules = $this->addRequired($rules, ['id']);
        }

        return $rules;
    }

    /**
     * Custom pesan kesalahan
     */
    public function messages(): array
    {
        return [
            'hex.regex' => 'Format warna harus berupa kode hex yang diawali #, contoh: #101211',
        ];
    }
}
