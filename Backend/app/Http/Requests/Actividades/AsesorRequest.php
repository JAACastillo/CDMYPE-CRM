<?php

namespace App\Http\Requests\Actividades;

use Illuminate\Foundation\Http\FormRequest;

class AsesorRequest extends FormRequest
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
            'asesor_id'        => 'required',
            'actividad_id'     => 'required'
        ];
    }
}
