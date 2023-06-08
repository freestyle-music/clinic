<?php

namespace App\Http\Controllers;

use App\Models\paymentMethod;
use App\Models\payment_amount;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $curency = payment_amount::get();
        return $curency;
    }

    public function create( Request $request)
    {
        $exchangerate = paymentMethod::create([
            'paymentmethod_code' => $request['paymentmethod_code'],
            'paymentmethod' => $request['paymentmethod'],
            'description' => $request['description'],
            'statue' => $request['statue'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
        if($exchangerate){
            return paymentMethod::get();
        }else{
            return ['statue :'=>"faile"];
        }
    }

    public function update($id,Request $request)
    {
        $exchangerate = paymentMethod::find($id);  
        $exchangerate -> paymentmethod_code = $request -> paymentmethod_code;
        $exchangerate -> paymentmethod = $request -> paymentmethod;
        $exchangerate -> description = $request->description;
        $exchangerate -> statue = $request -> statue;
        $exchangerate -> inactived = $request -> inactived;
        $exchangerate -> updated_by = $request -> updated_by;
        $exchangerate->save();
        if($exchangerate){
            return $exchangerate;
        }else{
           return ['statue :'=>"faile"];
        }
    }
    public function destroy($id)
    {
        $curency = paymentMethod::find($id);
        $curency->delete();
        return paymentMethod::get();
    }
}