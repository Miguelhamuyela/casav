<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidacyRequest extends FormRequest
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
            'bi' => 'required|string|min:14|max:14|unique:candidacies',
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'father' => 'max:255',
            'mother' => 'max:255',
            'birth' => 'required|date|before_or_equal:2004-08-24',
            'residence' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'required|string|min:9|max:14',
            'qualifications' => 'required|string|max:255',
            'ocupation' => 'required|string|max:255',
            'eleitorycard' => 'max:255',
            'group' => 'max:255',
            'province_id' => 'required|string|max:255',
            'county' => 'required|string|max:255',
            'placeregion' => 'required|string|max:255',

          /*   'g-recaptcha-response' => 'required|recaptchav3:register,0.5', */
            'doc_bi' => 'required|mimes:jpg,png,jpeg,pdf|file|max:5048',
            'doc_covid' => 'required|mimes:jpg,png,jpeg,pdf|file|max:5048',
            'doc_qualifications' =>
                'required|mimes:jpg,png,jpeg,pdf|file|max:5048'
        ];
    }
    public function messages()
    {
        return [
            'bi.required' => 'O nº de bilhete de identidade é obrigatório.',
            'bi.string' => 'O nº de bilhete de identidade deve ser uma string.',
            'bi.max' => 'O nº de bilhete de identidade não pode ser superior a :max caracteres.',
            'bi.unique' => 'Já temos uma candidatura com o nº de bilhete de identidade inserido',

            'name.required' => 'O nome é obrigatório.',
            'name.string' => 'O nome deve ser uma string.',
            'name.max' => 'O nome não pode ser superior a :max caracteres.',

            'surname.required' => 'O apelido é obrigatório.',
            'surname.string' => 'O apelido deve ser uma string.',
            'surname.max' => 'O apelido não pode ser superior a :max caracteres.',


            'father.max' => 'O nome do Pai não pode ser superior a :max caracteres.',
            'mother.max' => 'O nome da Mãe não pode ser superior a :max caracteres.',

            'residence.required' => 'A endereço da residência é obrigatório.',
            'residence.string' => 'A endereço da residência deve ser uma string.',
            'residence.max' => 'A endereço da residência não pode ser superior a :max caracteres.',

            'ocupation.required' => 'A ocupação é obrigatório.',
            'ocupation.string' => 'A ocupação deve ser uma string.',
            'ocupation.max' => 'A ocupação não pode ser superior a :max caracteres.',

            'qualifications.required' => 'As habilitações literárias é obrigatório.',
            'qualifications.string' => 'As habilitações literárias deve ser uma string.',
            'qualifications.max' => 'As habilitações literárias não pode ser superior a :max caracteres.',

            'placeregion.required' => 'A opção de candidatura é obrigatório.',
            'placeregion.string' => 'A opção de candidatura deve ser uma string.',
            'placeregion.max' => 'A opção de candidatura não pode ser superior a :max caracteres.',

            'province_id.required' => 'A Província é obrigatório.',
            'province_id.string' => 'A Província deve ser uma string.',
            'province_id.max' => 'A Província não pode ser superior a :max caracteres.',

            'county.required' => 'O Município é obrigatório.',
            'county.string' => 'O Município deve ser uma string.',
            'county.max' => 'O Município não pode ser superior a :max caracteres.',

            'eleitorycard.max' => 'O nº do cartão de eleitor não pode ser superior a :max caracteres.',
            'group.max' => 'O grupo não pode ser superior a :max caracteres.',

            'tel.required' => 'O Telefone é obrigatório.',
            'tel.string' => 'O Telefone deve ser uma string.',
            'tel.min' => 'O Telefone deve ser pelo menos :min dígitos.',
            'tel.max' => 'O Telefone não pode ser superior a :max dígitos.',

            'email.required' => 'O Telefone é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de e-mail válido.',

            'birth.required' => 'A data de nascimento é obrigatório.',
            'birth.date' => 'A data de nascimento não é uma data válida.',
            'birth.before_or_equal' => 'A data de nascimento deve ser uma data anterior ou igual a :date.',

            'doc_bi.required' => 'O documento do BI é obrigatório.',
            'doc_bi.mimes' => 'O documento do BI deve ser um arquivo do tipo: :values.',
            'doc_bi.max' => 'O documento do BI não pode ser superior a :max kilobytes.',
            'doc_bi.file' => 'O documento do BI deve ser um arquivo.',

            'doc_covid.required' => 'O certificado da covid-19 é obrigatório.',
            'doc_covid.mimes' => 'O certificado da covid-19 deve ser um arquivo do tipo: :values.',
            'doc_covid.max' => 'O certificado da covid-19 não pode ser superior a :max kilobytes.',
            'doc_covid.file' => 'O certificado da covid-19 deve ser um arquivo.',

            'doc_qualifications.required' => 'A declaração ou certificado de habilitações literárias é obrigatório.',
            'doc_qualifications.mimes' => 'A declaração ou certificado de habilitações literárias deve ser um arquivo do tipo: :values.',
            'doc_qualifications.max' => 'A declaração ou certificado de habilitações literárias não pode ser superior a :max kilobytes.',
            'doc_qualifications.file' => 'A declaração ou certificado de habilitações literárias deve ser um arquivo.',

        ];
    }
}
