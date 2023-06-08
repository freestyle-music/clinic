<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_product_boom;
use App\Models\productbom;
use App\Models\product;

class ProductBomContraller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getproductboom1111($id)
    {
        $view_product_boom = view_product_boom::where('product_no', '!=',$id)->get();
        return $view_product_boom;
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function boomcreate($id){
        if($id != ""){
            $product = product::where('product_no', '=',$id)->first();
            $description = $product->description;
            $productbom = productbom::create([
                'product_no' => $id,
                'boom_product_id' =>$id,
                'description' =>  $description,
                'created_by' => 'Chhin Pov'
             ]);
             if($productbom){
                $productbom = productbom::where('product_no', '=',$id)->get();
                 return $productbom;
            }else{
                return ['statue :'=>"faile Create"];
            }

        }else{
             return ['statue :'=>"No Data For create boom Product!!!"];
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productbom = productbom::where('product_no', '=',$id)->get();
        return $productbom;
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
   public function getboom($id){
        $productbom = productbom::where('product_no', '=',$id)->get();
        return $productbom;
   }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
            $productbom = productbom::find($id);
            $productbom->product_no = $request->product_no;
            $productbom->boom_product_id = $request->boom_product_id;
            $productbom->description = $request->description;
            $productbom->bom_unit_of_measure_code = $request->bom_unit_of_measure_code;
            $productbom->quantity_per_unit = $request->quantity_per_unit;
            $productbom->quantity = $request->quantity;
            $productbom->inactived = $request->inactived;
            $productbom->save();
          if($productbom){
            
                    return ['statue :'=>"success full"];
          }else{
                    return ['statue :'=> "Note Date"];
         }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productbom = productbom::find($id); 
        $product_no =  $productbom ->product_no;
        $productbom -> delete();
        if($productbom){
            $productbom = productbom::where('product_no', '=',$product_no)->get();
            return $productbom;
         }else{
           return ['statue :'=> "Note Date"];
        }
    }
    public function search($id){
        $search = $id;
        $productbom = view_product_boom::query()
            ->where('product_no', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
        return $productbom;
    }

   public function getproductboom($id){
            $proid = productbom::select('boom_product_id')->where('product_no', '=', $id)->get();
            if(count($proid)>1){
                $product = product::get();
                return $product;
            }else{
                $product = product::whereNotIn('product_no',productbom::select('boom_product_id')->where('product_no', '=', $id)->get()) -> get();
                return $product;
            } 
    }
    
}