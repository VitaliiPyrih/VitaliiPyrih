<?php

namespace App\Http\Requests;

use App\Rules\Recaptcha;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class SendForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function attributes()
    {
        return [

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'email' => 'email',
            'phone' => 'required|regex:/^([0-9\s\+\(\)]*)$/|min:9|max:20',
            'text' => 'required',
            'g-recaptcha-response' => ['required',new Recaptcha]
        ];
    }
}
