<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'edad' => 'required',
			'fecha_nacimiento' => 'required',
			'CI' => 'required',
			'sexo' => 'required|string',
			'email' => 'required|string',
			'contacto_enmergencia' => 'required',
			'cargos_id' => 'required',
        ];
    }
}
