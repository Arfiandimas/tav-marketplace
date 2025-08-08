<?php

namespace App\Http\Requests\Authentication;

use App\Http\Requests\ReqValidator;

class LoginDealerRequest extends ReqValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'email' => 'required|email:rfc,dns|exists:dealer,email',
            'password' => 'required|string',
        ];

        return $rules;
    }

    /**
     * Custom pesan kesalahan
     */
    public function messages(): array
    {
        return [
            'email.exists' => 'gagal, periksa kembali email dan password anda'
        ];
    }
}
