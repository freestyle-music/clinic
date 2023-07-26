<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\startstock;
use App\Models\startstock_list;
use App\Models\Serail;
use App\Models\User;


class BeginingStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request['created_by'] != "" ){
        $beginingstock = startstock::orderBy('id', 'desc')->paginate(15);
        return $beginingstock;
         }else{
            return ['statue' => "Reqest date fail."];
         }
    }
    public function getbyId(Request $request)
    {
    if($request['created_by'] != "" && $request['document_no'] != ""){
         $beginingstock = startstock::where('document_no', '=', $request->document_no)->orderBy('id', 'desc')->first();
        return $beginingstock;
    }else {
         return ['statue' => "Reqest date fail."];
    }
       
    }

      public function createtb(Request $request)
    {
        // $photo = $this->uploadPhoto($request);
       if($request['created_by'] != "" ){
         $serail_no = Serail::where('id', '=', 'BegStoct')->first();
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
        $product = startstock::create([
            'document_no'  => $serail_no,
            'created_by'  => $request['created_by'],
            'statue'      => 'open'
        ]);
        if ($product) {
                $serilano = Serail::where('id', '=', 'BegStoct')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                    $product = startstock::where('document_no', '=', $serail_no)->get();
                    return $product;
                } else {
                    return ['statue :' => "faile Create"];
                }
            } else {
                return ['statue :' => "faile Create"];
          }
       }else{
         return ['statue :' => "faile Create"];
       }
     }
    public function create_list(Request $request)
    {
         if($request['created_by'] != "" && $request['document_no'] != ""){
        $product = startstock_list::create([
          'document_no'  =>$request['document_no'],
          'created_by'  => $request['created_by'],
        ]);
        if( $product){
            return startstock_list::where('document_no', '=', $request->document_no)->orderBy('id', 'desc')->get();
         }else{
            return ['statue' => "Reqest  update date fail."];
          }
        }else{
           return ['statue' => "Reqest  update date fail."];
       }
    }
    public function update(Request $request)
    {
    if($request['updated_by'] != "" && $request['document_no'] != ""){
         $beginingstock = startstock::where('document_no', '=', $request->document_no)->where('statue','=', 'open')->first();
           $beginingstock->update([
            'document_type' => $request ->document_type,
            'description'=> $request ->description,
            'total_amount'=> $request ->total_amount,
            'curency_code'=> $request ->curency_code,
            'inactived'=> $request ->inactived,
            'statue'=> $request ->statue,
            'updated_by'=> $request ->updated_by,
        ]);
          if($beginingstock){
             return $beginingstock;
          }else{
               return ['statue' => "Reqest  update date fail."];
          }
    }else {
         return ['statue' => "Reqest update date fail."];
    }
       
    }

        public function update_list(Request $request)
    {
    if($request['updated_by'] != "" && $request['document_no'] != ""){
         $beginingstock = startstock_list::find($request->id)->first();
            $beginingstock->update([
              'document_type' => $request ->document_type,
              'description'=> $request ->description,
              'product_no'=> $request ->document_no,
              'issu_date'=> $request ->issu_date,
              'exprit_date'=> $request ->exprit_date,
              'unit_of_measure_code'=> $request ->unit_of_measure_code,
              'unit_price'=> $request ->unit_price,
              'inventory'=> $request ->inventory,
              'total_amount'=> $request ->total_amount,
              'curency_code'=> $request ->curency_code,
              'remark'=> $request ->remark,
              'updated_by'=> $request ->updated_by,
            ]);
          if($beginingstock){
            return $beginingstock;
          }else{
            return ['statue' => "Reqest update date fail."];
          }
    }else {
      return ['statue' => "Reqest update date fail."];
    }
    }
    public function delete(Request $request)
    {
         if($request['created_by'] != "" && $request['document_no'] != ""){
              $beginingstock = startstock::where('document_no', '=', $request->document_no)->where('statue','=', 'open')->first();
              $beginingstock -> delete();
              if($beginingstock){
               $beginingstock = startstock_list::where('document_no', '=', $request->document_no);
               $beginingstock -> delete();
               if( $beginingstock){
                 return startstock::orderBy('id', 'desc')->paginate(15);
               }
              }else {
                 return ['statue' => "Reqest delete date fail."];
              }
            }
    }
    public function delete_list(Request $request)
    {
         if($request['created_by']!="" && $request['document_no'] != ""){
               $beginingstock = startstock_list::find($request->id)->first();
               $beginingstock -> delete();
               if($beginingstock){
                 return startstock_list::where('document_no', '=', $request->document_no)->get();
               }else {
                return ['statue' => "Reqest delete date fail."];
               }
         }else{
             return ['statue' => "Reqest delete date fail."];
         }
    }
}