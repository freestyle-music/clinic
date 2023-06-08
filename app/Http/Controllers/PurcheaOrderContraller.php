<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purcheaorder;
use App\Models\Serail;
use App\Models\purchealine;
use App\Models\product;
use App\Models\productvariantcode;
use App\Models\purchese_sup;
use App\Models\purchese_user;

class PurcheaOrderContraller extends Controller
{
    public function index($document)
    {
        return purcheaorder::where('document_no', '=', $document)->first();
    }

    public function store(Request $request)

    {
        $serail_no = Serail::where('id', '=', 'Purchases')->first();
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

        $purchase = purcheaorder::create([
            'id' => $serail_no,
            'line_no' => '1',
            'total_amount' => '0',
            'document_no'  => $serail_no,
            'document_type'=> $request->document_type, 
            'statue'       => 'open',
            'created_by'   => $request['created_by']
        ]);
        if ($purchase) {
            $purline = purchealine::create([
                'document_no' => $serail_no,
                'description' => $request->description,
                'total_amount' => '0',
                'inventory'  => '0',
                'unit_price' => '0',
                'created_by' => $request['created_by'], 
                'statue'     => 'open',
            ]);
            if ($purline) {
                $serilano = Serail::where('id', '=', 'Purchases')->first();
                $serilano->end_code = $newCode;
                $serilano->save();
                if ($serilano) {
                    $purchase = purcheaorder::where('document_no', '=', $serail_no)->get();
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

    public function savelink($id)
    {
        $purline = purchealine::where('id', '=', $id)->get();
        $purline->save();
        if ($purline) {
            return $purline;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function purchaseorderView(Request $request)
    {
        $purchase_view = purcheaorder::orderBy('id', 'asc')->orderBy('document_no', 'asc')->paginate(10);
        if ($purchase_view) {
            return $purchase_view;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function editPurchaseorder($id)
    {
        $posts = purcheaorder::where('document_no', '=', $id)->first();
        if ($posts) {
            return $posts;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function editPurchaseline($id)
    {
        $purline = purchealine::orderBy('id', 'asc')->where('document_no', '=', $id)->get();
        if ($purline) {
            return $purline;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function updatePurchaseorder($id, Request $request)
    {
        $purOrder = purcheaorder::find($request->id);
        $purOrder->document_no = $request->document_no;
        $purOrder->document_type = $request->document_type;
        $purOrder->description = $request->description;
        $purOrder->suppliyer_code = $request->suppliyer_code;
        $purOrder->curency_code = $request->curency_code;
        $purOrder->inactived = $request->inactived;
        $purOrder->created_by = $request['created_by'];
        $purOrder->save();

        if ($purOrder) {
            return ['statue :' => "success full"];
        } else {
            return ['statue :' => "Note Date"];
        }
    }


    public function updatePurchaseline($id, Request $request)
    {
        $purline = purchealine::find($request->id);
        $x = $purline->document_no;
        $purline->product_no = $request->product_no;
        $purline->description = $request->description;
        $purline->issu_date = $request->issu_date;
        $purline->exprit_date = $request->exprit_date;
        $purline->line_no = $request->line_no;
        $purline->unit_of_measure_code = $request->unit_of_measure_code;
        $purline->unit_price = $request->unit_price;
        $purline->inventory = $request->inventory;
        $purline->inventory_order = $request->inventory;       
        $purline->inventory_recetive = $request->inventory;
        $purline->total_amount = $request->total_amount;
        $purline->curency_code = $request->curency_code;
        $purline->remark = $request->remark;
        $purline->created_by = $request->created_by;
        $purline->save();

        if ($purline) {
            $total = 0;
            $purline = purchealine::orderBy('id', 'asc')->where('document_no', '=', $x)->get();
            foreach($purline as $pur){
                $total =  $total + doubleval($pur->total_amount);
            }
            $purOrder = purcheaorder::where('document_no', '=', $x)->first();
            $purOrder->total_amount = $total;
            $purOrder->save();
            if($purOrder){
                return $purline;
            }
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function Purchaselinealert($id, Request $request)
    {
        $purline = purchealine::create([
            'document_no' => $id,
            'total_amount' => '0',
            'inventory' => '0',
            'unit_price' => '0',
            'created_by' => $request['created_by'],
            'statue'     => 'open',
        ]);
        if ($purline) {
            return purchealine::where('id', '=', $purline->id)->get();
        } else {
            return ['statue :' => "Note Date"];
        }
    }


    public function deletePurchaseline($id)
    {
        $purline = purchealine::find($id);
        $document =  $purline->document_no;
        $purline->delete();
        if ($purline) {
            $purline = purchealine::orderBy('id', 'asc')->where('document_no', '=', $document)->get();
            if ($purline) {
                return $purline;
            } else {
                return ['statue :' => "Note Date"];
            }
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function addrowPurchaseline($id)
    {
        $purline = purchealine::create([
            'document_no' => $id,
            'total_amount' => '0',
            'inventory' => '0',
            'unit_price' => '0',
            'created_by' => $request['created_by'],
            'statue'     => 'open',
        ]);
        if ($purline) {
            $serilano = purchealine::where('document_no', '=', $id)->get();
            return $serilano;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function deletePurchaseorder($id)
    {
        $purchase = purcheaorder::find($id);
        $doc =  $purchase->document_no;
        $purchase->delete();
        if ($purchase) {
            $purchase = purcheaorder::where('document_no', '=', $doc)->get();
            if ($purchase) {
                return $purchase;
            } else {
                return ['statue :' => "Note Date"];
            }
        } else {
            return ['msg :' => 'hmmm'];
        }
    }

    public function PrulinkeSave(Request $request)
    {
        $brand = purchealine::create([
            'document_no' => $request['document_no'],
            'product_no' => $request['product_no'],
            'document_type' => $request['document_type'],
            'description' => $request['description'],
            'unit_of_measure_code' => $request['unit_of_measure_code'],
            'inventory_order' => $request['inventory'],
            'inventory' => $request['inventory'],
            'unit_price' => $request['unit_price'],
            'total_amount' => $request['total_amount'],
            'curency_code' => $request['curency_code'],
            'statue'       => 'open',
            'created_by'   => $request['created_by'],
        ]);
        if($brand){
            $purline = purchealine::find($brand->id);
            $purline->product_no = $request->product_no;
            $purline->save();
            return ['statue :' => "success full"];
        }else{
            return ['statue :'=>"faile"];
        }
    }
    public function getPrulinkUnit($id)
    {
                $productvariantcode = productvariantcode::groupBy('variant_unit_of_measure_code','unit_price','curency_code')
                ->addSelect('variant_unit_of_measure_code','unit_price','curency_code')
                ->where('product_no', '=', $id)
                ->get(); 
                return $productvariantcode;
    }

    
   public function getproductboom($id){
    $proid = productbom::select('boom_product_id')->where('product_no', '=', $id)->get();
    if(count($proid)==1){
        $product = product::get();
        return $product;
    }else{
        $product = product::whereNotIn('product_no',productbom::select('boom_product_id')->where('product_no', '=', $id)->get()) -> get();
        return $product;
    } 
}

public function search($id){
    $search = $id;
    $productbom = product::query()->where('product_no', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")
                ->get();
    return $productbom;
}

public function purchesesup($id){
    $productbom = purchese_sup::where('document_no','=', $id)->get();
    return $productbom;
}
public function purcheseuser($id){
    $productbom = purchese_user::where('document_no','=', $id)->get();
    return $productbom;
}

}