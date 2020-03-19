<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreUpdateProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:3|max:255',
            'description'=> 'nullable|min:3|max:255',
            'filephoto'=>'required|image'
        ];
    }
    public function message(){
        return [
            'name.required'=> 'Nome é obrigatório.',
            'name.min'=> 'Nome deve ter pelo menos 3 caracteres.',
        ];
    }
}
