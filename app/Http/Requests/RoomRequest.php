<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
 
    public function rules()
    {
        return [
            'key'=> 'required|string|size:7',
        ];
    }
}
