<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Calculator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateInput;

/**
 * CalculatorController Class 
 *
 * CalculatorController contains calculator operation
 *
 * @version    Release: 1.0
 * @author Arun Kumar <arunmishrakiit@gmail.com>
 */

class CalculatorController extends Controller
{
    public $v;
    public function __construct()
    {
        $this->v = new ValidateInput();
    }

    /**
     *
     * Add two number
     *
     * @param    object  $request The Request
     * @author Arun Kumar <arunmishrakiit@gmail.com>
     * @return      json
     *
     */

    public function add(Request $request){
        if($this->v->validateReqs($request)) {
            return response()->json(['answer' => $request->input('num1') + $request->input('num2')]);  
        } else {
            return response()->json(['error' => 'only num1 and num2 are required and must be a valid numbers.'],422);
        }
    }

    /**
     *
     * Substract number
     *
     * @param    object  $request The Request
     * @author Arun Kumar <arunmishrakiit@gmail.com>
     * @return      json
     *
     */

    public function substract(Request $request){
        if($this->v->validateReqs($request)) {
            return response()->json(['answer' => $request->input('num1') - $request->input('num2')]);
        } else {
            return response()->json(['error' => 'only num1 and num2 are required and must be a valid numbers.'],422);
        }
    }

    /**
     *
     * Multiply
     *
     * @param    object  $request The Request
     * @author Arun Kumar <arunmishrakiit@gmail.com>
     * @return      json
     *
     */

    public function multiply(Request $request){
        if($this->v->validateReqs($request)) {
            return response()->json(['answer' => $request->input('num1') * $request->input('num2')]);
        } else {
            return response()->json(['error' => 'only num1 and num2 are required and must be a valid numbers.'],422);
        }
    }

    /**
     *
     * Division
     *
     * @param    object  $request The Request
     * @author Arun Kumar <arunmishrakiit@gmail.com>
     * @return      json
     *
     */

    public function divide(Request $request){
        if($this->v->validateReqs($request)) {
            if($request->input('num2') == 0){
                return response()->json(['answer' => 'Infinite']);
            }
            return response()->json(['answer' => $request->input('num1') / $request->input('num2')]);
            
        } else {
            return response()->json(['error' => 'only num1 and num2 are required and must be a valid numbers.'],422);
        }
    }

    /**
     *
     * Square
     *
     * @param    object  $request The Request
     * @author Arun Kumar <arunmishrakiit@gmail.com>
     * @return      json
     *
     */

    public function squareRoot(Request $request){
        if($this->v->validateReqs($request,1)) {
            return response()->json(['answer' => $request->input('num1') * $request->input('num1')]);
        } else {
            return response()->json(['error' => 'only num1 is required and must be a valid number.'],422);
        }
    }

    /**
     *
     * Save
     *
     * @param    object  $request The Request
     * @return      json
     *
     */

    public function save(Request $request){
        if($this->v->validateReqs($request,2)) {
            DB::table('calculators')->where('value','>=',0)->delete();
            DB::table('calculators')->insert($request->all());
            return response()->json(['save' => true],201);
        } else {
            return response()->json(['error' => 'only value is required and must be a valid number.'],422);
        }
    }

    /**
     *
     * Retrieve
     *
     * @param       void
     * @return      json
     *
     */

    public function savedValue(){
        $savedVal = DB::table('calculators')->select('value')->get()->first();
        return response()->json($savedVal);
    }

    /**
     *
     * Clear
     *
     * @param    void
     * @return      json
     *
     */

    public function clear(){
        DB::table('calculators')->where('value','>=',0)->delete();
        return response()->json(['value' => null],205);
    }
}
