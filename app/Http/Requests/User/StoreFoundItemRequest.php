<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoundItemRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'dateFound' => 'nullable|date',
            'user_id' =>'required|integer'
        ];
    }
}
