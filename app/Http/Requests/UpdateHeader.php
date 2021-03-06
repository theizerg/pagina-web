<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Currentpass;

class UpdateHeader extends FormRequest
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
           'titulo'  => 'required',
           'cuerpo'  => 'required',
           'status'  => 'sometimes',
           'current_password' => ['required', new Currentpass],
      ];
    }
}
