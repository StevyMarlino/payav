<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PaymentRequest extends FormRequest
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
            'type' => ['required','in:mobile_money_franco,mobile_money_ghana,mpesa,mobile_money_rwanda,mobile_money_uganda,mobile_money_zambia,ach_payment,debit_ng_account,paypal,debit_uk_account,ussd,card,bank_transfer'],
            'amount' => ['required','int'],
            'phone' => ['nullable','string'],
            'order_id' => ['required','string'],
            'cardInfo' => ['nullable','array'],
            'currency' => ['required','string'],
            'user' => ['required','array'],
        ];
    }

    /**
     * @param Validator $validator
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'   => false,
            'message'   => 'Validation errors',
            'errors'      => $validator->errors()
        ],422));
    }
}
