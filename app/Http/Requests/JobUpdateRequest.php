<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobUpdateRequest extends FormRequest
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
            'job' => 'required',
            'salary' => 'required',
            'time' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'job.required' => 'Ingrese el nuevo puesto',
            'salary.required' => 'Ingrese el nuevo salario',
            'time.required' => 'Ingrese el tiempo que el empleado ha estado en la compañia'
        ];
    }
}
