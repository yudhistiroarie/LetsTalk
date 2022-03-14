<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\PO;

class CreatePORequest extends FormRequest
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
        return PO::$rules;
    }
    
    /**
     * Get custom attributes for validator errors
     * 
     * @return array
     */
    public function attributes()
    {
        return PO::$attrib;
    }
}
