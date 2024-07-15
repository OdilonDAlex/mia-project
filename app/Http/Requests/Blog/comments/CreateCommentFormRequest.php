<?php

namespace App\Http\Requests\Blog\comments;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class CreateCommentFormRequest extends FormRequest
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
            'content' => ['required', 'string', ],
            'post_id' => ['required', 'integer', 'exists:posts,id'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'post_id' => (int)$this->post_id,
        ]);
    }
}
