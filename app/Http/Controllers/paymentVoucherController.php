<?php

namespace App\Http\Controllers;

use App\Models\paymentMethod;
use App\Models\payment_voucher_list;
use App\Models\payment_voucher;
use App\Models\Serail;
use App\Models\payment_amount;
use App\Models\payment_user;
use App\Models\payment_sub;
use Illuminate\Http\Request;

class paymentVoucherController extends Controller
{
  
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
    }

    public function create( Request $request)
    {
        $serail_no = Serail::where('id', '=', 'PayInvioce')->first();
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

        $purchase = payment_voucher::create([
            'totale_balanec' => '0',
            'document' =>"Order-Invioce",
            'document_type' => 'purchase_order',
            'document_no'  => $serail_no,
            'created_by'   => $request['created_by'],
            'dicount'=>'0',
            'tax'=>'0',
        ]);
        if ($purchase) {
            $purline = payment_voucher_list::create([
                'document_no' => $serail_no,
                'created_by' => 'Chhin Pov',
                'payment_amount'=>'0',
                'dicount'=>'0',
                'statue'=>'save',
            ]);
            if ($purline) {
                $serilano = Serail::where('id', '=', 'PayInvioce')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                    $purchase = payment_voucher::where('document_no', '=', $serail_no)->first();
                    return $purchase;
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

   public function getdataPayment($id){
      $payment_voucher = payment_voucher::where('document_no', '=', $id)->first();
      return $payment_voucher;
   }
   public function getdataPaymentlist($id){
    $payment_voucher_list = payment_voucher_list::where('document_no', '=', $id)->get();
    return $payment_voucher_list;
   }

   public function userpaymentr($id){
    $payment_voucher_list = payment_user::where('document_no', '=', $id)->first();
    return $payment_voucher_list;
   }
     public function soppaymentr($id){
    $payment_voucher_list = payment_sub::where('document_no', '=', $id)->first();
    return $payment_voucher_list;
   }
   public function updatPayment($id,Request $request){
    $exchangerate = payment_voucher::find($id);  
    $tax = $exchangerate->tax;
    $discount = $exchangerate->dicount;
    $totale_balanec = $exchangerate->totale_balanec;
    $totale_balanec = doubleval($totale_balanec) - doubleval($discount)*doubleval($totale_balanec)/100;
    $totale_balanec = doubleval($totale_balanec) + doubleval($tax)*doubleval($totale_balanec)/100;
    $exchangerate -> decription = $request -> decription;
    $exchangerate -> totale_balanec = $request->totale_balanec;
    $exchangerate -> exchane_currency = $request -> exchane_currency;
    $exchangerate -> ex_totale_balanec = $request -> ex_totale_balanec;
    $exchangerate -> currency_code = $request ->currency_code;
    $exchangerate -> exchane_rate = $request->exchane_rate;
    $exchangerate -> paymentMethod = $request->paymentMethod;
    $exchangerate -> dicount = $request -> dicount;
    $exchangerate -> tax = $request->tax;
    $exchangerate -> sub_code = $request -> sub_code;
    $exchangerate -> statue = 'save';
    $exchangerate->save();
    if($exchangerate){
        return $exchangerate;
    }else{
       return ['statue :'=>"faile"];
    }
   }

   public function updatPaymentlink($id,Request $request){
    $exchangerate = payment_voucher_list::find($id);  
    $exchangerate -> payment_no = $request->payment_no;
    $exchangerate -> decription = $request->decription;
    $exchangerate -> document = $request->document;
    $exchangerate -> totale_balanec = $request->totale_balanec;
    $exchangerate -> payment_amount = $request->payment_amount;
    $exchangerate -> exchane_rate = $request->exchane_rate;
    $exchangerate -> currency_code = $request->currency_code;
    $exchangerate->save();
    if($exchangerate){
        $totale_balanec = 0;
        $payment_voucher_list = payment_voucher_list::where('document_no', '=', $exchangerate->document_no)->get();  
        foreach($payment_voucher_list as $element){
            $totale_balanec += doubleval($element->payment_amount);
        }
        $payment_voucher = payment_voucher::where('document_no', '=', $exchangerate->document_no)->first(); 
        $tax = $payment_voucher->tax;
        $rate = $payment_voucher->exchane_rate;
        $exchange_rate =  doubleval($rate);
        $discount = $payment_voucher->dicount;
        $totale_balanec = doubleval($totale_balanec) - doubleval($discount)*doubleval($totale_balanec)/100;
        $totale_balanec = doubleval($totale_balanec) + doubleval($tax)*doubleval($totale_balanec)/100;
        $ex_totale_balanec = doubleval($totale_balanec)* $exchange_rate;
        $payment_voucher -> totale_balanec = $totale_balanec;
        $payment_voucher -> exchane_rate = $request->exchane_rate;
        $payment_voucher -> exchane_currency = $request->exchane_currency;
        $payment_voucher -> ex_totale_balanec = $request -> ex_totale_balanec;
        $payment_voucher -> currency_code = $request->currency_code;
        $payment_voucher -> save();
        return $exchangerate;
    }else{
       return ['statue :'=>"faile"];
    }
   }

   public function getPaymenmethod(){
    $payment_voucher = paymentMethod::where('paymentmethod', '!=','Credit')
    ->where('paymentmethod', '!=','Credit')
    ->get();
    return $payment_voucher;
   }

   public function addrowPaymentline($id)
   {
       $purline = payment_voucher_list::create([
        'document_no' => $id,
        'created_by' => 'Chhin Pov',
        'payment_amount'=>'0',
        'dicount'=>'0',
        'statue'=>'save',
       ]);
       if ($purline) {
           $serilano = payment_voucher_list::where('document_no', '=', $id)->get();
           return $serilano;
       } else {
           return ['statue :' => "Note Date"];
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

    public function search($id,Request $request){
       $productbom = payment_amount::orderBy('id', 'asc')
        ->whereIn('document_no',payment_amount::addSelect('document_no')
        ->orWhere('document_no', 'LIKE', "%{$id}%")
        ->orWhere('document_type', 'LIKE', "%{$id}%")
        ->orWhere('document', 'LIKE', "%{$id}%")
        ->get())
        ->where('sub_code','=',$request->sub_code)
        ->get();
        return $productbom;
    }

    public function paymentget(){
        $payment_voucher = payment_voucher::orderBy('id', 'asc')->get();
        return $payment_voucher;
    }

    public function getpaymentvouchor($id,Request $request)
    {
        $exchangerate = payment_voucher::where('document_no', '=', $id)->first();
        $exchangerate -> statue = 'close';
        $exchangerate ->save();
        if($exchangerate){
             $payment_voucher_list = payment_voucher_list::where('document_no', '=', $id)->get();
             foreach($payment_voucher_list as $element){
                    $payment_amount = payment_amount::where('document_no', '=', $element->payment_no)->first();
                    $payment_amount -> paymant_amount = $element->payment_amount;
                    $payment_amount -> statue = "close";
                    $payment_amount -> save();
                    if($payment_amount){
                        return ['statue :'=>"success full"];
                    }else{
                        return  ['statue :'=>"faile"];
                    }
             }
        }else{
           return ['statue :'=>"faile"];
        }
    }

    public function getPaymentlisk($id){
        $payment_voucher = payment_amount::orderBy('id', 'asc')
        ->where('sub_code', '=', $id)
        ->where('statue', '=','open')
        ->get();
        return $payment_voucher;
    }

    public function InsertLink($id, Request $request){
        $purline = payment_voucher_list::create([
            'document_no'   => $id,
            'document'      => $request['document'],
            'payment_no'    => $request['document_no'],
            'decription'    => $request['decription'],
            'exchane_rate'  => $request['exchane_rate'],
            'totale_balanec'=> $request['totale_balanec'],
            'payment_amount'=> $request['payment_amount'],
            'dicount'       => $request['dicount'],
            'currency_code' => $request['currency_code'],
            'statue'        => 'open',
            'dicount'       => '0',
        ]);
        return payment_voucher_list::where('document_no', '=', $id)->get();
    }
}