<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetugasRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:users'],
            'username' => ['required', 'string', 'unique:users'],
            'jenis_kelamin' =>  ['required'],
            'password' => ['required', 'string', 'min:6', 'max:20'],
            'telepon' => ['required', 'numeric'],
            'alamat' => ['required', 'string'],
            'level' => ['required']
        ];
    }
}