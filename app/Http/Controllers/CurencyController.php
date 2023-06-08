<?php

namespace App\Http\Controllers;

use App\Models\curency;
use Illuminate\Http\Request;

class CurencyController extends Controller
{

    public function index()
    {
        $curency = curency::get();
        return $curency;
    }

    public function create( Request $request)
    {
        $brand = curency::create([
            'curency_no' => $request['curency'],
            'curency' => $request['curency'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
        if($brand){
            return curency::get();
        }else{
            return ['statue :'=>"faile"];
        }
    }
    
    
    public function update($id,    Request $request)
    {
        $curency = curency::where('curency_no','=',$id)->first();
        $curency->curency_no = $request->curency;
        $curency->curency = $request->curency;
        $curency->inactived = $request->inactived;
        $curency->updated_by = $request->updated_by;
        $curency->save();
        if($curency){
            return ['statue :'=> "Succesfull"];
        }else{
           return ['statue :'=>"faile "];
        }
    }
 
    public function destroy($id)
    {
        $curency = curency::find($id);
        $curency -> delete();
        if($curency){
            return ['statue :'=> "Succes full"];
        }else{
           return ['statue :'=>"faile Delete"];
        }
    }
}