<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Serail;

class SerailController extends Controller
{
    public function index()
    {
        $serails = Serail::orderBy('id')->paginate(10);
        return $serails;
    }
    public function store(Request $request)
    {
        return Serail::create([
            'id' => $request->serail_code,
            'serail_code' => $request->serail_code,
            'prefix_code' => $request->prefix_code,
            'qty_code' => $request->qty_code,
            'start_code' => $request->start_code,
            'end_code' => $request->end_code,
            'created_by' => $request->created_by,
        ]);
    }
    public function update($id, Request $request)
    {
        $serails = Serail::find($id);
        $serails -> serail_code = $request -> serail_code;
        $serails -> prefix_code = $request -> prefix_code;
        $serails -> qty_code = $request -> qty_code;
        $serails -> start_code = $request -> start_code;
        $serails -> end_code = $request -> end_code;
        $serails -> updated_by = $request->updated_by;
        $serails->save();
        if($serails){
            return ['statue :'=>"SUCCESSE"];
       }else{
                  return ['statue :'=>"Note Date"];
       }
    }
    public function destroy($id, Request $request)
    {
        $serails = Serail::find($id);
        $serails->delete();
        return response()->json(['message' => 'serail deleted successfully']);
    }
}
