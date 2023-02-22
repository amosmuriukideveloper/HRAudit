<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class UpdateProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required','string', 'max:255'],
            'phone' => ['numeric'],
            'title' => ['string', 'max:200'],
            'bio' => ['string', 'max:255'],
            'email' => ['email', 'max:255', ValidationRule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
