<?php

namespace App\Http\Controllers;
use App\Models\purcheas_order_view;
use App\Models\receiveorder;
use App\Models\purcheaorder;
use App\Models\receiveorderline;
use App\Models\stockkeeping;
use App\Models\purchealine;
use App\Models\stocktransaction;
use App\Models\product_vavaincode_view;
use App\Models\payment_amount;
use App\Models\exchangerate;
use Illuminate\Http\Request;


class ReceiveOrderContraller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receiveorder = receiveorder::create([
            'document_no'       => $request['document_no'],
            'document_type'     => $request['document_type'],
            'description'       => $request['description'],
            'suppliyer_code'    => $request['suppliyer_code'],
            'curency_code'      => $request['curency_code'],                                                                              
            'inactived'         => $request['inactived'],
            'total_amount'      => $request['total_amount'],
            'statue'            => 'Saved',
            'created_by'        => $request['created_by'],
        ]);
        if($receiveorder){
            $totall = 0;
            $exchangerate = exchangerate::where('curency_no', '=',$receiveorder->curency_code)->first();
            $exmant = $exchangerate->main_curency_no;
            $exrate = $exchangerate->exchange_rate;
            if($exmant == $receiveorder->curency_code){
                $totall = $receiveorder->total_amount;
            }else{
                $totall = $receiveorder->total_amount;
                $totall = doubleval($totall) * doubleval($exrate);
            }
             $payment_amount = payment_amount::create([
                    'document_no'       => $receiveorder['document_no'],
                    'document'          => 'Purchese Order Recept',
                    'decription'        => $receiveorder['decription'],
                    'totale_balanec'    => $totall,
                    'exchane_rate'      => $exrate,
                    'sub_code'          => $receiveorder['suppliyer_code'],
                    'currency_code'     => $receiveorder['curency_code'],
                    'paymant_amount'     => '0',
                    'inactived'         => $receiveorder['inactived'],
                    'statue'            => 'open',
                    'created_by'        => $request['created_by'],
                ]);
                if($payment_amount){
                    return ['statue' => "successful"];
             }else{
                   return ['statue '=>"faile"];
             }
        }else{
            return ['statue '=>"faile"];
        }
    }
    public function receptlink(Request $request)
    {
        $totall = 0;
        $check = true;
        $statue ="open";
        $receiveorder = receiveorderline::create([
        'document_no'           => $request['document_no'],
        'document_type'         => $request['document_type'],
        'product_no'            => $request['product_no'],
        'description'           => $request['description'],
        'issu_date'             => $request['issu_date'],
        'exprit_date'           => $request['exprit_date'],
        'line_no'               => $request['line_no'],
        'unit_of_measure_code'  => $request['unit_of_measure_code'],
        'unit_price'            => $request['unit_price'],
        'inventory'             => $request['inventory'],
        'inventory_order'       => $request['inventory_order'],
        'inventory_recetive'    => $request['inventory_recetive'],
        'qty_balance'           => $request['qty_balance'],
        'amount_balance'        => $request['amount_balance'],
        'total_amount'          => $request['total_amount'],
        'curency_code'          => $request['curency_code'],
        'remark'                => $request['remark'],
        'created_by'            => $request['created_by'],
        ]);
        if ($receiveorder) {
            if(1){
                $purchealine = purchealine::where('document_no', '=',$request->document_no)->where('product_no','=',$request->product_no)->first();
                $inventorynew =  floatval($purchealine->inventory)-floatval($request->inventory_recetive);
                $inventoryres =  $request->inventory_recetive;
                $purOrder = purcheaorder::where('document_no', '=',$request->document_no)->first(); $purOrder->statue = 'close'; $purOrder->save();   
                $productvariantcode = product_vavaincode_view::addSelect ('product_no','stock_unit_of_measure_code','purche_unit_of_measure_code','variant_unit_of_measure_code','quantity_per_unit','unit_price','curency_code')
                ->where('product_no','=',$request->product_no)->where('variant_unit_of_measure_code','=',$request->unit_of_measure_code)->first();
                $PrinceLink  = product_vavaincode_view::addSelect ('unit_price')->where('product_no','=',$request->product_no)->where('status','=','stock')->first();
                if($productvariantcode){}
                        $inventory_order = 0;
                        $inventory =  $inventory_order + doubleval($request['inventory_recetive']);
                        $inventory = (doubleval($inventory))* (doubleval($productvariantcode['quantity_per_unit']));
                        $receiveorder = stockkeeping::create([
                            'document_no'           => $request['document_no'],
                            'document_type'         => $request['document_type'],
                            'product_no'            => $request['product_no'],
                            'description'           => $request['description'],
                            'issu_date'             => $request['issu_date'],
                            'exprit_date'           => $request['exprit_date'],
                            'line_no'               => $request['line_no'],
                            'unit_of_measure_code'  => $productvariantcode['stock_unit_of_measure_code'],
                            'unit_price'            => $PrinceLink['unit_price'],
                            'inventory'             => $inventory,
                            'inventory_order'       => $inventory_order,
                            'inventory_new'         => $inventorynew,
                            'total_amount'          => $request['total_amount'],
                            'curency_code'          => $request['curency_code'],
                            'remark'                => $request['remark'],
                            'statuse'               => 'open',
                            'created_by'            => $request['created_by'],
                            ]);
                            if($receiveorder){
                                if($purchealine->inventory != $request->inventory_recetive){
                                    $check = false;
                                }
                                  $stocktransaction = stocktransaction::create([
                                    'document_no'          => $receiveorder['document_no'],
                                    'document_type'        => 'Order Recpt Invoince',
                                    'product_no'           => $receiveorder['product_no'],
                                    'description'          => $receiveorder['description'],
                                    'unit_of_measure_code' => $receiveorder['unit_of_measure_code'],
                                    'unit_price'           => $receiveorder['unit_price'],
                                    'inventory'            => $receiveorder['inventory'],
                                    'total_amount'         => $request['total_amount'],
                                    'curency_code'         => $receiveorder['curency_code'],
                                    'remark'               => $receiveorder['remark'],
                                    'created_by'           => $receiveorder['created_by']
                                    ]);
                        }              
                        if(!$check){
                                $statue ="open";
                                $purchealines = purchealine::find($purchealine->id);
                                $purchealines->statue = $statue;
                                $purchealines->save();
                        }else{
                                $statue ="close";
                                $purchealines = purchealine::find($purchealine->id);
                                $purchealines->statue = $statue;
                                $purchealines->inventory = $inventorynew;
                                $purchealines->inventory_recetive = $inventoryres;
                                $purchealines->save();
                        }
                            $purchealine = purchealine::where('document_no', '=',$request->document_no)->get();
                            foreach($purchealine as $purche){
                                if($purche->statue =="open"){
                                    $purOrder = purcheaorder::where('document_no', '=',$request->document_no)->first(); $purOrder->statue = 'open'; $purOrder->save(); 
                                    continue;   
                                }
                            }
                            if ($purOrder) {
                                return ['statue' => "successful"];
                            } else {
                                return ['statue '=>"faile"];
                            }
                        }else{

                        }
                    
        }else{

            return ['statue' => "fail"];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getshowpurchea(Request $request)
    {
       $productvariantcode = purcheaorder::orderBy('id', 'asc')->where('statue', '=',"open")->get();      
        if ($productvariantcode) {
            return $productvariantcode;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function getrecpt()
    {
        $receiveorder = receiveorder::paginate(15);
        return  $receiveorder;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}