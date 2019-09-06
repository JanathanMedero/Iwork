<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required',
            'age' => 'required',
            'job' => 'required',
            'salary' => 'required',
            'time' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Ingrese el nombre del empleado',
            'age.required' => 'Ingrese la edad del empleado',
            'job.required' => 'Ingrese el puesto del empleado',
            'salary.required' => 'Ingrese el salario del empleado',
            'time.required' => 'Ingrese el tiempo que ha trabajado el empleado en la empresa'
        ];
    }
}
