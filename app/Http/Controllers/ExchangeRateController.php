<?php

namespace App\Http\Controllers;

use App\Models\exchangerate;
use App\Models\setup;
use App\Models\curency;
use Illuminate\Http\Request;

class ExchangeRateController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curency = exchangerate::get();
        return $curency;
    }
    public function getSetup()
    {
        $setup = setup::first();
        return $setup;
    }

    public function getcurency()
    {
        $setup = setup::first();
        $exchane = exchangerate::addSelect('curency_no')->get();
        $curency = curency::where('curency_no', '!=', $setup->main_Currency)
        ->whereNotIn('curency_no',$exchane)
        ->get();
        return $curency;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        $setup = setup::first();
        $main_curency_no = $setup->main_Currency;
        $exchangerate = exchangerate::create([
            'main_curency_no' => $main_curency_no,
            'curency_no' => $request['curency_no'],
            'exchange_rate' => $request['exchange_rate'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
        if($exchangerate){
            return exchangerate::get();
        }else{
            return ['statue :'=>"faile"];
        }
    }

    public function update($id,Request $request)
    {
        $exchangerate = exchangerate::find($id);  
        $exchangerate -> curency_no = $request ->curency_no;
        $exchangerate -> exchange_rate = $request ->exchange_rate;
        $exchangerate -> inactived = $request ->inactived;
        $exchangerate -> updated_by = $request ->updated_by;
        $exchangerate ->updated_by = $request->updated_by;
        $exchangerate->save();
        if($exchangerate){
            return $exchangerate;
        }else{
           return ['statue :'=>"faile"];
        }
    }

    public function destroy($id)
    {
        $curency = exchangerate::find($id);
        $curency->delete();
        return exchangerate::get();
    }
    public function search($id)
    {
        $exchane = exchangerate::where('curency_no','=', $id) ->get();
        if(count($exchane) == 0){
            return ["status" => 0,
            "message" => "don't exist"
        ];
          
        }
        else{
            return ["status" => 1,
            "message" => "already exist",
           "lists" =>  $exchane
        ];
        }
    }
}