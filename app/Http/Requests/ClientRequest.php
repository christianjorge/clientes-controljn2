<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * O método rules faz a validação dos campos do formulário, o messages configura a mensagem que será exibida,
     * caso nenhuma mensagem seja configurada será exibida a padrão do Laravel (Em inglês, precisar traduzir a linguagem)
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=>'required',
            'telefone'=>'required',
            'cpf'=>'required',
            'placa'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Defina o nome do seu cliente!',
            'telefone.required'  => 'É Necessário informar um telefone!',
            'cpf.required'  => 'É Necessário informar um CPF!',
            'placa.required'  => 'É Necessário informar uma placa!',
        ];
    }
}
