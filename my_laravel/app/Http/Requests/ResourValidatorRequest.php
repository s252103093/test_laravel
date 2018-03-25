<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourValidatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        #return false;
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
            'ip'=>[
                'required',
                'regex:/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/'
            ],


        'port'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'ip.required'=>'ip 不能为空',
            'ip.regex'=>'ip 规则不正确',
            'port.required'=>'port 不能为空',
        ];
    }

    /**
     * 配置验证器实例。
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->somethingElseIsInvalid()) {

                $validator->errors()->add('field', 'Something is wrong with this field!');
            }
        });
    }

    public function somethingElseIsInvalid()
    {
        return 1;
    }
}
