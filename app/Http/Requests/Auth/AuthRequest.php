<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{

    /**
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     *
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $message = collect($validator->getMessageBag()->getMessages())
            ->flatten()
            ->implode(', ');

        logger()->channel('auth')->debug($message, [
            'type' => 'registered',
        ]);

        parent::failedValidation($validator);
    }

}
