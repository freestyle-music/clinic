<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\payment_amount;
use App\Models\product;
use App\Models\pos_sale;
use App\Models\close_shift;
class Poscontroller extends Controller
{
    public function InposLine(Request $request){
        $pos_sale = pos_sale::create([
            'product_no'        => $request['product_no'],
            'description'       => $request['description'],
            'unit_code'         => $request['variant_unit_of_measure_code'],
            'unit_price'        => $request['unit_price'],
            'inventory'         => $request['inventory'],
            'total_amount'      => $request['total_amount'],
            'curency_code'      => $request['curency_code'],
            'created_by'        => '1',
        ]);
        return pos_sale::orderBy('id', 'DESC')->where('created_by', '=','1')->get();
    }

    public function getposdata(){
        $pos_sale = pos_sale::orderBy('id', 'DESC')->where('created_by', '=','1')->get();
        return $pos_sale;
    }

    public function deleteDatepos($id){
            $pos_sale = pos_sale::find($id); 
            $pos_sale-> delete();
            return pos_sale::where('created_by', '=','1')->get();
    }
    public function cleardata(){
            $productbom = pos_sale::where('created_by', '=','1')->get();
            foreach ($productbom as $element) {
                $element-> delete();
            }
            return pos_sale::orderBy('id', 'DESC')->where('created_by', '=','1')->get();
    }
    public function update($id,Request $request)
    {
            $pos_sale = pos_sale::find($id); 
            $pos_sale->inventory = $request->inventory;
            $pos_sale->total_amount = $request->total_amount;
            $pos_sale->save();
            if($pos_sale){
                return pos_sale::orderBy('id', 'DESC')->where('created_by', '=','1')->get();
            }else{
                return ['statue :'=> "Note Date"];
            }
    }

     public function proserach(Request $request)
    {
        
        if($chheck != ""){ 
                $product= product::addSelect('id', 'product_no', 'product_barcode', 'description', 'description_2', 'image_url', 'stock_unit_of_measure_code', 'purche_unit_of_measure_code', 'bom_no', 'reorder_point', 'sup_code', 'brand_code', 'group_code', 'cat_code', 'variant_code', 'unit_price', 'inactived', 'is_deleted', 'created_by', 'updete_by', 'delete_by', 'created_at', 'updated_at')
                ->where('cat_code', '=',$request->cat_code)
                ->orwhere('description', 'LIKE', "%{$request->textsearch}%")
                ->orwhere('description_2', 'LIKE', "%{$request->textsearch}%")
                ->orwhere('product_barcode', 'LIKE', "%{$request->textsearch}%")
                ->orwhere('product_no', 'LIKE', "%{$request->textsearch}%")
                ->get();
                return $product; 
        }else{
            $product= product::addSelect('id', 'product_no', 'product_barcode', 'description', 'description_2', 'image_url', 'stock_unit_of_measure_code', 'purche_unit_of_measure_code', 'bom_no', 'reorder_point', 'sup_code', 'brand_code', 'group_code', 'cat_code', 'variant_code', 'unit_price', 'inactived', 'is_deleted', 'created_by', 'updete_by', 'delete_by', 'created_at', 'updated_at')
                ->orwhere('description', 'LIKE', "%{$request->textsearch}%")
                ->orwhere('description_2', 'LIKE', "%{$request->textsearch}%")
                ->orwhere('product_barcode', 'LIKE', "%{$request->textsearch}%")
                ->orwhere('product_no', 'LIKE', "%{$request->textsearch}%")
                ->get();
                return $product; 
        }
    }

      public function createnewsale(Request $request){
           $pos_sale = pos_sale::create([
            'description'    => $request['description'],
            'deposit'        => $request['deposit'],
            'deposit2'       => $request['deposit2'],
            'curency_code'   => $request['curency_code'],
            'curency_code2'  => $request['curency_code2'],
            'statue'         => $request['statue'],
            'created_by'     => $request['created_by'],
        ]);
         return $pos_sale; 
    }
}