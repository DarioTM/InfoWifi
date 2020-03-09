<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return true;
    // }

    public function messages()
    {
        $required   =   'El campo :attribute es obligatorio';
        $email        =   'El campo :attribute tiene que ser tipo email';

        return [
                'name.required'     =>  $required,
                'email.required'    =>  $required,

        ];
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
        ];
    }
}
