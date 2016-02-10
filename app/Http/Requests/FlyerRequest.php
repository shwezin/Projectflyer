<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FlyerRequest extends Request
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
<<<<<<< HEAD
            'street'        =>  'required',
            'city'          =>  'required',
            'zip'           =>  'required',
            'country'       =>  'required',
            'state'         =>  'required',
            'price'         =>  'required|integer',
            'description'   =>  'required',
        ];
    }
}
=======
        'street'        => 'required',
        'city'          => 'required',
        'zip'           => 'required',
        'country'       => 'required',
        'state'         => 'required',
        'price'         => 'required',
        'description'   => 'required|integer',
        ];
    }
}
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
