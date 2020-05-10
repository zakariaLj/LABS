<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialeRequest extends FormRequest
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
            'nom'         =>   'required',
            'fonction'    =>   'required',
            'img_path'    =>   'required',
            'commentaire' =>   'required',
        ];
    }

        public function messages()
        {
            return [

                'nom.required' => 'Entrer le Titre SVP ...',
                'fonction.required' => 'Entrer le lien SVP ...',
                'img_path.required' => 'Entrer le l image SVP ...',
                'commentaire.required' => 'Entrer le commentaire SVP ...',

        ];
        }
}
