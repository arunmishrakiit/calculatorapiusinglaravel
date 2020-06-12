<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ValidateInput extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules($flag)
    {
        if($flag==1){
            return [
                'num1' => 'required|numeric|gt:0'
            ];
        }
        else if($flag==2){
            return [
                'value' => 'required|numeric|gt:0'
            ];
        } else{
            return [
                'num1' => 'required|numeric|gte:0',
                'num2' => 'required|numeric|gte:0',
            ];
        }
    }

    /**
     * Validate request.
     *
     * @return bool
     */

    public function validateReqs($request, $flag=0)
    {
        if(count($request->all())!=2 && $flag==0){
            return false;
        }
        if(count($request->all())!=1 && $flag>0){
            return false;
        }
        $validator = FacadesValidator::make($request->all(), $this->rules($flag));
        if(!$validator->fails()) {
            return true; 
        }
        return false;
    }
}
