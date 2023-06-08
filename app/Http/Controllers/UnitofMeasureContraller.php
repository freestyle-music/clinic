<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\unitofmeasure;

class UnitofMeasureContraller extends Controller
{
    public function index()
    {
        $unitofmeasure = unitofmeasure::orderBy('id')->paginate(10);
        return $unitofmeasure;
    }
    public function getunite()
    {
        $unitofmeasure = unitofmeasure::get();
        return $unitofmeasure;
    }
    
    public function store(Request $request)
    {
        return unitofmeasure::create([
            'code' => $request-> unit_code,
            'unit_code' => $request->unit_code,
            'unit_of_measure' => $request->unit_of_measure,
            'type' => $request->type,
            'inactived' => "yes",
            'created_by' => $request->created_by,
        ]);
    }

   
    public function update($id,Request $request)
    {

    $unitcode=unitofmeasure::where('unit_code','=',$id)->first();
    $unitcode->code = $request->unit_code;
    $unitcode->unit_code = $request->unit_code;
    $unitcode->unit_of_measure = $request->unit_of_measure;
    $unitcode->type = $request->type;
    $unitcode->updated_by = $request->updated_by;
    $unitcode->save();
    return $unitcode;

    }
    
    public function destroy($id)
    {
        $unitcode = unitofmeasure::find($id);
        $unitcode->delete();
        return response()->json(['message' => 'Unitcode deleted successfully']);
    }
}