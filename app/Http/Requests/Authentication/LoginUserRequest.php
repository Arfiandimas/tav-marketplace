<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class LoginUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'email_or_phone' => [
                'required',
                function ($attribute, $value, $fail) {
                    $isEmail = filter_var($value, FILTER_VALIDATE_EMAIL);

                    if ($isEmail) {
                        $exists = DB::table('user')->where('email', $value)->exists();
                        if (! $exists) {
                            return $fail('gagal, periksa kembali akun anda');
                        }
                    } else {
                        if (!preg_match('/^\d{9,}$/', $value)) {
                            return $fail('gagal, periksa kembali akun anda');
                        }

                        $exists = DB::table('user')->where('phone', $value)->exists();
                        if (! $exists) {
                            return $fail('gagal, periksa kembali akun anda');
                        }
                    }
                },
            ],
            'password' => 'required|string',
        ];

        return $rules;
    }
}
