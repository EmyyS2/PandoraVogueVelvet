<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class AgendaFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'profissional_Id' => 'required|integer|exists:profissional_models,id',
            'cliente_Id' => 'integer',
            'servico_Id'  => 'integer',
            'data_Hora' => 'required|date|unique:agendas,data_Hora',
            'pagamento' => '|max:20|min:3',
            'valor' => '|decimal:2,4'
        ];
    } public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return[
        'profissional_Id.required' => 'Campo profissional é obrigatório',
        'profissional_Id.exists' => 'profissional não existe',
        'data_Hora.required' => 'Campo data é obrigatório',
        'data_Hora.date' => 'Formato Inválido',
        'data_Hora.unique' => 'esse horario já foi reservado',
        'pagamento.max' => 'Campo pagamento deve conter no maximo 20 caracteres',
        'pagamento.min' => 'Campo pagamento deve conter no minimo 3 caracteres',
        'valor.decimal' => 'Este campo so aceita numero decimal'
        ];
}
}