<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateairlineRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') { // the put method requires all the arguments
            return [
                'name' => ['required'],
                'class' => ['required'],
                'time' => ['required'],
                'passengers' => ['required']
            ];
        } else {     // it is either patch or post so the arguments can be empty sometimes
            return [
                'name' => ['sometimes','required'],
                'class' => ['sometimes','required'],
                'time' => ['sometimes','required'],
                'passengers' => ['sometimes','required']
            ];
    }
}
}