<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SmtpTesterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'host' => 'required|string|max:255',
            'port' => 'required|integer',
            'secured' => 'required|boolean',
            'encryption' => 'required_if:secured,true',
            'authentication' => 'required|boolean',
            'login' => 'required_if:authentication,true|string|max:255',
            'password' => 'required_if:authentication,true|string|max:255',
            'from' => 'required|email',
            'to' => 'required|email'
        ];
    }
}
