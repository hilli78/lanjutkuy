<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class agen extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "nama" => ["required", "min:5"],
            "nowa" => ['numeric'],
            "ttl" =>  ['required'],
            "alamat" =>  ['required'],
            "nik" =>  ['numeric'],
            "email" =>  ['required'],
            "foto" =>  ['file']

            

        ];

    }
}
