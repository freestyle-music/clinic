<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\Serail;
use App\Models\testtingitem;
class TestserviceController extends Controller
{
    public function create(Request $request)
    {
        // $photo = $this->uploadPhoto($request);
        $serail_no = Serail::where('id', '=', 'Products')->first();
        $Prifixcode = $serail_no->prefix_code;
        $Code​​​_qty = $serail_no->qty_code;
        $Sart_at = $serail_no->start_code;
        $End_code = $serail_no->end_code;
        $newCode = (int)$Sart_at + (int)$End_code;
        $serail_no = $Prifixcode;
        for ($i = 0; $i < ((int)$Code​​​_qty - strlen($newCode)); $i++) {
            $serail_no = $serail_no . "0";
        }
        $serail_no = $serail_no . $newCode;
        $product = product::create([
            'id' => $serail_no,
            'product_no'  => $serail_no,
            'reorder_point' => '100',
            'description' => 'Medichince Product',
            'created_by'  => $request['created_by'],
            'type'        => 'ServiceTest',
            'status'      => 'Open',
        ]);
        if ($product) {
            $sex = array("Men", "Women", "Chaildren");
            for ($i = 0; $i < count($sex); $i++) {
                
                    $productvariantcode = testtingitem::create([
                        'product_no' => $serail_no,
                        'description' => 'Medichince Product',
                        'test_type'   => $sex[$i],
                        'created_by' =>  $request->created_by,
                        'status'     => 'Open',
                    ]);          
            }

            if ($productvariantcode) {
                $serilano = Serail::where('id', '=', 'Products')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                    $product = product::where('product_no', '=', $serail_no)->get();
                    return $product;
                } else {
                    return ['statue :' => "faile Create"];
                }
            } else {
                return ['statue :' => "faile Create"];
            }
        } else {
            return ['statue :' => "faile Create"];
        }
    }


    public function update($id,Request $request)
    {
        
        $unitcode = testtingitem::find($id);
        $unitcode -> description = $request->description;
        $unitcode -> normal_value = $request->normal_value;
        $unitcode->save();
        if($unitcode){
            return ['statue :'=>"SUCCESSE"];
       }else{
                  return ['statue :'=>"Note Date"];
       }
    }

    public function destroy($id)
    {
        $unitcode = product::where('product_no', '=', $id);
        $unitcode->delete();
        if($unitcode){
            $testtingitem = testtingitem::where('product_no', '=', $id);
            $testtingitem->delete();
            if($testtingitem){
                return ['statue :'=>"SUCCESSE"];
           }else{
                      return ['statue :'=>"Note Date"];
           }
       }else{
                  return ['statue :'=>"Note Date"];
       }
    }

    public function gettestservice($id)
    {
        $unitcode = testtingitem::where('product_no', '=', $id)->get();
        return $unitcode;
    }
}