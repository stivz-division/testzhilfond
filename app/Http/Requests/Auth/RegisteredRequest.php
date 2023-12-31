<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisteredRequest extends AuthRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:255',
            'surname'  => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:'
                          .User::class,
            'password' => [
                'required', 'confirmed', Password::defaults(),
            ],
        ];
    }

}
