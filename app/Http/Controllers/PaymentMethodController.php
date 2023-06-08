<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\paymentMethod;

class PaymentMethodController extends Controller
{
   
    public function index()
    {
        $curency = paymentMethod::orderBy('id', 'desc')->paginate(15);
        return $curency;
    }

    public function store(Request $request)
    {
        $exchangerate = paymentMethod::create([
            'paymentmethod_code' => $request['paymentmethod'],
            'paymentmethod' => $request['paymentmethod'],
            'description' => $request['description'],
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
        $exchangerate->paymentmethod_code =$request->paymentmethod;
        $exchangerate->paymentmethod =$request->paymentmethod;
        $exchangerate->description =$request->description;
        $exchangerate->inactived =$request->inactived;
        $exchangerate->updated_by =$request->updated_by;
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