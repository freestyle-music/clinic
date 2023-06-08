<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testtingitem;
use App\Models\productbom;
use App\Models\prescriptions;
use App\Models\product;
use App\Models\prescription_view;
use App\Models\Serail;
use App\Models\pateint;
use App\Models\prescription_detail;
use App\Models\payment_voucher_list;
use App\Models\payment_voucher;
use App\Models\stock_store;
use App\Models\stockkeeping;
use App\Models\stocktransaction;
use App\Models\Sale;
use App\Models\Saleline;

class PrescriptionsController extends Controller
{
   public function index()
    {
       $prescriptions = prescription_view::get();
       return $prescriptions;  
    }
    
   public function indexConvert()
    {
       $prescriptions = prescription_view::where('status','=','Invoice')->get();
       return $prescriptions;  
    }

   public function indexPayment()
    {
       $prescriptions = prescription_view::where('status','=','close')->get();
       return $prescriptions;  
    }

 public function preselectData($id)
    {
       $prescriptions = prescription_view::where('id','=',$id)->first();
       return $prescriptions;  
    }
    public function checkstock(Request $request){
           $stock_store = stock_store::where('product_no','=',$request->product_no)->first();
           $Amount = $stock_store->inventorys;
           $productvariantcode = productvariantcode::where('product_no','=',$request->product_no)
           ->where('variant_unit_of_measure_code','=',$request->unit_code)->first();
           $unit = $productvariantcode->quantity_per_unit;
           $instock = (int)$Amount/(int)$unit;
           return ['instock'=>$instock];
    }
    
    public function prescriptionEdit($id,Request $request)
    {
        $prescriptions = prescriptions::find($id);
        $prescriptions ->Age = $request -> Age;
        $prescriptions ->visit_date = $request -> visit_date;
        $prescriptions ->BP = $request -> BP;
        $prescriptions ->Pr = $request -> Pr;
        $prescriptions ->rr = $request -> rr;
        $prescriptions ->Spo2 = $request -> Spo2;
        $prescriptions ->T = $request -> T;
        $prescriptions ->status = $request -> status;
        $prescriptions ->appointment_date = $request -> appointment_date;
        $prescriptions ->remark = $request -> remark;
        $prescriptions ->description = $request -> description;
        $prescriptions ->save();
        return ['statue :'=>"SUCCESSE"];
        if($prescriptions){

        }else{

        }
        
    }

   public function testservice($id,Request $request)
    {
        $prescriptions = prescriptions::find($id);
        $prescriptions ->Age = $request -> Age;
        $prescriptions ->visit_date = $request -> visit_date;
        $prescriptions ->BP = $request -> BP;
        $prescriptions ->Pr = $request -> Pr;
        $prescriptions ->rr = $request -> rr;
        $prescriptions ->Spo2 = $request -> Spo2;
        $prescriptions ->T = $request -> T;
        $prescriptions ->height = $request -> height;
        $prescriptions ->weight = $request -> weight;
        $prescriptions ->status = $request -> status;
        $prescriptions ->appointment_date = $request -> appointment_date;
        $prescriptions ->remark = $request -> remark;
        $prescriptions ->description = $request -> description;
        $prescriptions ->updated_by = $request -> updated_by;
        $prescriptions ->save();
       
        if($prescriptions){
               return $prescriptions; 
        }else{
             return 'not sussuccesful';
        }
        
    }

      public function createvisit( Request $request){
        // $photo = $this->uploadPhoto($request);
        $serail_no = Serail::where('id', '=', 'Prescriptions')->first();
        $Prifixcode = $serail_no->prefix_code;
        $Code_qty = $serail_no->qty_code;
        $Sart_at = $serail_no->start_code;
        $End_code = $serail_no->end_code;
        $newCode = (int)$Sart_at + (int)$End_code;
        $serail_no = $Prifixcode;
        for ($i = 0; $i < ((int)$Code_qty - strlen($newCode)); $i++) {
            $serail_no = $serail_no . "0";
        }
         $serail_no = $serail_no . $newCode;
         
         $product = prescriptions::create([
                'preid'      => $serail_no,
                'pateinid'   => $request['pateinid'],
                'created_by' => $request['created_by'], 
                'status'     => 'open',
        ]);
        if ($product) {
            if ($product) {
                $serilano = Serail::where('id', '=', 'Prescriptions')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                    $product = prescriptions::where('preid', '=', $serail_no)->first();
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
    
      public function prescriptionDelete($id)
    {
      $prescriptions = prescription_detail::where('id', '=', $id);
        $prescriptions -> delete();
        if($prescriptions){
            return ['statue :'=> "Succesfull"];
        }else{
           return ['statue :'=>"faile Delete"];
        } 
    }
      public function prescriptionDetail(Request $request)
    {
       $prescriptions = prescription_detail::get();
       return $prescriptions;  
    }
    
      public function getprecriptoin($id)
    {
        return prescription_view::orderBy('id', 'DESC')->where('preid', '=',$id)->first();
    }
       public function prescriptionDetailcreatet($id)
    {
      
       $prescriptions = prescription_detail::create([
             'prescription_id' => $id,
             'del_flg'         => '0',
            ]);
        if($prescriptions){
            return prescription_detail::orderBy('id', 'DESC')->where('preid', '=',$prescriptions->preid)->get();
        }else{
           return ['statue :'=>"faile Delete"];
        } 
    }
    
      public function prescriptionDetailDelete(Request $request)
    {
        $prescriptions = prescription_detail::where('id','=',$request->id)->first();
        $prescriptions -> delete();
        if($prescriptions){
            return ['statue :'=> "Succes full"];
        }else{
           return ['statue :'=>"faile Delete"];
        } 
    }

      public function prescriptionDetailview()
    {
       $prescriptions = prescription_detailview::get();
       return $prescriptions;  
    }
       public function GetprescriptionDetail($id)
    {
       $prescriptions =  prescription_detailview::orderBy('id', 'DESC')->where('prescription_id', '=',$id)->get();
       return $prescriptions;  
    }

       public function GetJusines()
    {
       //$edid = prescriptions::addSelect('jusin_id')->get();
       $jusins =  jusins::orderBy('id', 'DESC')
      //->whereNotIn('jusins_id',$edid)
       ->get();
       return $jusins;  
    }
    // payment
     public function paymentVocher($id,Request $request)
    {
        $serail_no = Serail::where('id', '=', 'Invoice')->first();
        $Prifixcode = $serail_no->prefix_code;
        $Code_qty = $serail_no->qty_code;
        $Sart_at = $serail_no->start_code;
        $End_code = $serail_no->end_code;
        $newCode = (int)$Sart_at + (int)$End_code;
        $serail_no = $Prifixcode;
        for ($i = 0; $i < ((int)$Code_qty - strlen($newCode)); $i++) {
            $serail_no = $serail_no . "0";
        }
        $serail_no = $serail_no . $newCode;
        $statute = $request->paymentMethod;
        if($statute == 'cash') $statute= 'save'; else $statute= 'close';
        $purchase = payment_voucher::create([
            'document' =>"Sell-Invoice",
            'document_type' => 'Prescritions',
            'totale_balanec'=> $request['totale_balanec'],
            'exchane_rate'=> $request['exchane_rate'],
            'currency_code'=> $request['currency_code'],
            'paymentMethod'=> $request['paymentMethod'],
            'exchane_currency'=> $request['exchane_currency'],
            'tax'=> $request['tax'],
            'dicount'=> $request['dicount'],
            'document_no'=> $serail_no,
            'created_by'=>  $request['created_by'],
        ]);
        if ($purchase) {
            $purline = payment_voucher_list::create([
                'document_no' => $serail_no,
                'exchane_rate'=> $request['exchane_rate'],
                'totale_balanec'=> $request['totale_balanec'],
                'currency_code'=> $request['currency_code'],
                'created_by' => $request['created_by'],
                'payment_amount'=>'0',
                'payment_no'=> $id,
                'dicount'=>'0',
                'statue'=>$statute,
            ]);
            if ($purline) {
                $serilano = Serail::where('id', '=', 'Invoice')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                     $prescriptions = prescriptions::where('id', '=', $id)->first();
                     $prescriptions ->status = 'close';
                     $prescriptions->save();
                     if($prescriptions){
                        return prescriptions::orderBy('id', 'DESC')->get();
                     }
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
    public function reversinvoin($id)
    {
       $prescriptions =  prescription_detailview::orderBy('id', 'DESC')->where('prescription_id', '=',$id)->get();
       return $prescriptions;  
    }
      public function getdatavisit()
    {
       $prescriptions =  prescription_view::orderBy('id', 'DESC')->get();
       return $prescriptions;  
    }
    public function updatPrescription( Request $request ){
    $pre = prescriptions::findOrFail($request->id);
        $pre->update([
            'id' => $request->id,
            'age' => $request->age,
            'visit_date' => $request->visit_date,
            'bp' => $request->bp,
            'pr' => $request->pr,
            'rr' => $request->rr,
            'spo2' => $request->spo2,
            't' => $request->t,
            'width' => $request->width,
            'height' => $request->height,
            'status' => $request->status,
            'appointment_date' => $request->appointment_date,
            'remark' => $request->remark,
            'updated_by' => $request->updated_by,
        ]);
        return $pre;
    }
}