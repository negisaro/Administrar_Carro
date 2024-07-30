<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PropietarioRequest extends FormRequest
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
            'documento' => ['required', 'max:20', 'min:6', Rule::unique(table: 'propietarios', column: 'documento')->ignore(id: request('propietarios'), idColumn: 'id')],
            'primer_nombre' => ['string'],
            'segundo_nombre' => [''],
            'primer_apellido' => ['string'],
            'segundo_apellido' => [''],
            'email' => ['required', Rule::unique(table: 'propietarios', column: 'email')->ignore(id: request('propietarios'), idColumn: 'id')],
            'numero_telefon' => ['string'],
            'direccion' => ['string'],
            'is_active' => [''],
        ];
    }

    public function messages(): array
    {
        return [
            'documento.unique' => ('el Documento ya existe'),
            'primer_nombre' => ('el nombre no puede estar vacio')
        ];
    }
}
