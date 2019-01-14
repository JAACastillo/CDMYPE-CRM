<?php

namespace App\Http\Requests\Pagina;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'finalizacion' => 'required',
            'estado' => 'required',
            'duracion' => 'required',
            'especialidad_id' => 'required'
        ];
    }
}
