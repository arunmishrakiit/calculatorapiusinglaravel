<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use App\Calculator;
use Illuminate\Support\Facades\DB;

class CalculatorController extends Controller
{
    public function add(Request $request){
        $validationRules = array( 
            'num1' => 'required|numeric|gt:0',
            'num2' => 'required|numeric|gt:0',
        );
        $validator = FacadesValidator::make($request->all(), $validationRules);
        if(!$validator->fails()) {
            return response()->json(['answer' => $request->input('num1') + $request->input('num2')]);  
        } else {
            return response()->json(['error' => 'num1 and num2 must be a valid numbers.']);
        }
    }

    public function subtract(Request $request){
        return response()->json(['answer' => $request->input('num1') - $request->input('num2')]);
    }

    public function multiplication(Request $request){
        return response()->json(['answer' => $request->input('num1') * $request->input('num2')]);
    }

    public function division(Request $request){
        return response()->json(['answer' => $request->input('num1') / $request->input('num2')]);
    }

    public function square(Request $request){
        return response()->json(['answer' => $request->input('num1') * $request->input('num1')]);
    }

    public function save(Request $request){
        DB::table('calculators')->where('value','>=',0)->delete();
        DB::table('calculators')->insert($request->all());
        return response()->json(['save' => true]);
    }

    public function savedValue(){
        $savedVal = DB::table('calculators')->select('value')->get()->first();
        return response()->json($savedVal);
    }

    public function clear(Request $request){
        DB::table('calculators')->where('value','>=',0)->delete();
        return response()->json(['value' => null]);
    }
}
