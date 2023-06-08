<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock_count_line;
use App\Models\stock_count;
use App\Models\stock_store;
use App\Models\Serail;
use App\Models\stocktransaction;
use App\Models\stockkeeping;
use App\Models\product_vavaincode_view;


class StockCountController extends Controller
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
        $serail_no = Serail::where('id', '=', 'StockCount')->first();
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

        $purchase = stock_count::create([
            'document_no'  => $serail_no,
            'document_type'=> $request->document_type, 
            'statue'       => 'open',
            'created_by'   => 'Chhin Pov'
        ]);
        if ($purchase) {
            $purline = stock_count_line::create([
                'document_no' => $serail_no,
                'description' => $request->description,
                'total_amount' => '1',
                'inventory'  => '1',
                'unit_price' => '1',
                'created_by' => $request->updeted_by ,
                'statue'     => 'open',
            ]);
            if ($purline) {
                $serilano = Serail::where('id', '=', 'StockCount')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                    $purchase = stock_count::where('document_no', '=', $serail_no)->get();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function stockview($id)
    {
        $purchase_view = stock_count::where('document_no', '=', $id)->first();
        if ($purchase_view) {
            return $purchase_view;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function stocklineview($id)
    {
        $posts = stock_count_line::where('document_no', '=', $id)->paginate(10);
        if ($posts) {
            return $posts;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function editStocklineview($id)
    {
        $purline = stock_count_line::where('document_no', '=', $id)->get();
        if ($purline) {
            return $purline;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function updatestock($id, Request $request)
    {
        $purline = stock_count::find($id);
        $purline->document_type = $request->document_type;
        $purline->description = $request->description;
        $purline->total_amount = $request->total_amount;
        $purline->curency_code = $request->curency_code;
        $purline->statue = $request->statue;
        $purline->created_by = 'chhin pov';
        $purline->save();
        if($purline) {
            return $purline;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function updatestockline($id, Request $request)
    {
        $purline = stock_count_line::find($id);
        $purline->document_type = $request->document_type;
        $purline->product_no = $request->product_no;
        $purline->description = $request->description;
        $purline->line_no = $request->line_no;
        $purline->unit_of_measure_code = $request->unit_of_measure_code;
        $purline->unit_price = $request->unit_price;
        $purline->inventory = $request->inventory;
        $purline->inventory_count = $request->inventory_count;
        $purline->inventory_new = $request->inventory_new;
        $purline->credit_balance = $request->credit_balance; 
        $purline->debit_balance = $request->debit_balance;    
        $purline->total_amount = $request->total_amount;
        $purline->curency_code = $request->curency_code;
        $purline->remark = $request->remark;
        $purline->created_by = $request->created_by;
        $purline->save();
        if ($purline) {
            $purline = stock_count_line::orderBy('id', 'asc')->where('document_no', '=', $purline->document_no)->get();
            return $purline;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function bookingcountstock($id){
            $stock_count = stock_count::where('document_no','=',$id)->where('statue','=','open')->first();
            $stock_count->statue = 'close'; 
            $stock_count->save();   
            if($stock_count){
                $stock_count_line = stock_count_line::where('document_no', '=',$id)->get();
                foreach ($stock_count_line as $stockkeeping) {
                    $stockkeep = stockkeeping::orderBy('id', 'asc')->where('product_no', '=',$stockkeeping->product_no)->where('statuse', '=','open')->first();                         
                    $id = $stockkeep ->id;
                    $count = $stockkeeping->inventory_count;
                    $instock = $stockkeep->inventory;
                    if(doubleval($count)<doubleval($instock)){
                        $instock = doubleval($instock) - doubleval($count);
                        $stockkeep = stockkeeping::find($id);
                        $stockkeep->inventory = $count;
                        $stockkeep->save();
                    }else{
                        while (doubleval($count) >= doubleval($instock)) {
                            $instock = doubleval($count) - doubleval($instock);
                            if($instock == 0){
                                $stockkeep->inventory = $instock;
                                $stockkeep->statuse = 'close';
                                $stockkeep->save();
                            }else{
                                $stockkeep->inventory = 0;
                                $stockkeep = stockkeeping::find($id);
                                $stockkeep->statuse = 'close';
                                $stockkeep->save();
                                if($stockkeep){
                                    $count = doubleval($count) - doubleval($instock);
                                    $stockkeep = stockkeeping::orderBy('id', 'asc')->where('product_no', '=',$stockkeeping->product_no)->where('statuse', '=','open')->first();                                             
                                    $id = $stockkeep ->id;
                                    $instock = $stockkeep->inventory;
                                    if(doubleval($count)<doubleval($instock)){
                                        $instock = doubleval($instock) - doubleval($count);
                                        $stockkeep = stockkeeping::find($id);
                                        $stockkeep->inventory = $count;
                                        $stockkeep->save();
                                    }
                            }
                        }
                    }
                }
                $debit = '0';
                if(doubleval($stockkeeping['credit_balance']) == 0){

                     $debit = $stockkeeping->debit_balance;

                }else{

                     $debit = $stockkeeping->credit_balance;
                }
                $stocktransaction = stocktransaction::create([
                    'document_no'          => $stockkeeping['document_no'],
                    'document_type'        => $stockkeeping['document_type'],
                    'product_no'           => $stockkeeping['product_no'],
                    'description'          => $stockkeeping['description'],
                    'unit_of_measure_code' => $stockkeeping['unit_of_measure_code'],
                    'unit_price'           => $stockkeeping['unit_price'],
                    'inventory'            => $debit,
                    'total_amount'         => $stockkeeping['total_amount'],
                    'curency_code'         => $stockkeeping['curency_code'],
                    'remark'               => $stockkeeping['document_type']
                    ]);
                   if($stocktransaction){

                   }else{

                   }
            }
        }
    }
    public function addrowstockline($id)
    {
        $purline = stock_count_line::create([
            'document_no' => $id,
            'total_amount' => '1',
            'inventory' => '1',
            'unit_price' => '1',
        ]);
        if ($purline) {
            $serilano = stock_count_line::where('document_no', '=', $id)->get();
            return $serilano;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getValicode($id)
    {
        $PrinceLink = product_vavaincode_view::where('product_no','=',$id)->where('status','=','stock')->first();
        return  $PrinceLink;
    }
    public function getStock($id)
    {
        $PrinceLink = stock_store::where('product_no','=',$id)->first();
        return  $PrinceLink;
    }


    public function getviewscockcount(){
        $purchase_view = stock_count::orderBy('id', 'asc')->orderBy('document_no', 'asc')->paginate(16);
        return $purchase_view;
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