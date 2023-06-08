<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\product;
use App\Models\productvariantcode;
use App\Models\prescription_list;
use App\Models\productbom;
use App\Models\Serail;
use App\Models\product_view;
use App\Models\unitofmeasure;
use App\Models\setup;

use App\Models\cat_produc;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProductContraller extends Controller
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
            'created_by'  => 'Chhin Pov',
            'type'        => 'Products',
            'image_url' => $request->image_url
        ]);
        if ($product) {
            for ($i = 0; $i < 2; $i++) {
                if ($i == 0) {
                    $productvariantcode = productvariantcode::create([
                        'product_no' => $serail_no,
                        'description' => 'Medichince Product',
                        'created_by' => 'Chhin Pov',
                        'status'     => 'stock',
                        'image_url' => $request->image_url
                    ]);
                } else {
                    $productvariantcode = productvariantcode::create([
                        'product_no' => $serail_no,
                        'description' => 'Medichince Product',
                        'created_by' => 'Chhin Pov',
                        'status'     => 'unit',
                        'image_url' => $request->image_url
                    ]);
                }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crateUnite($id)
    {
        $serail_no = product::where('product_no', '=', $id)->first();
        $decrip =  $serail_no->description;
        $company = setup::first();

        $checkVarcode = productvariantcode::where('product_no', '=', $id)->get();
        if (count($checkVarcode) > 0) {
            $productvariantcode = productvariantcode::create([
                'product_no' => $id,
                'description' => $decrip,
                'created_by' => 'Chhin Pov',
                'status'     => 'unit',
                'curency_code' => $company['main_Currency']
            ]);
        } else {
            $productvariantcode = productvariantcode::create([
                'product_no' => $id,
                'description' => $decrip,
                'created_by' => 'Chhin Pov',
                'status'     => 'stock'
            ]);
        }
        if ($productvariantcode) {
            $serail_no = productvariantcode::where('product_no', '=', $id)->get();
            return $serail_no;
        } else {
            return ['statue :' => "faile Create"];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getUnit($id)
    {
        $productvariantcode = productvariantcode::where('product_no', '=', $id)->get();
        if ($productvariantcode) {
            return $productvariantcode;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function savelink($id)
    {
        $productvariantcode = productvariantcode::where('id', '=', $id)->get();
        $productvariantcode->save();
        if ($productvariantcode) {
            return $productvariantcode;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function viewpro(Request $request)
    {
        $product_view = product::orderBy('id', 'desc')->where('type', '!=', 'ServiceTest')->paginate(10);
        return $product_view;
    }

    public function edit($id)
    {
        $posts = product::where('product_no', '=', $id)->first();
        if ($posts) {
            return $posts;
        } else {
            return ['statue :' => "Note Date"];
        }
    }

    public function editlink($id)
    {
        $productvariantcode = productvariantcode::where('product_no', '=', $id)->get();

        if ($productvariantcode) {
            return $productvariantcode;
        } else {
            return ['statue :' => "Note Date"];
        }
    }


    public function update($id, Request $request)
    {

        $product = product::find($id);
        $dir = $this->directory();
        if ($request->image_url != $product['image_url']) {
            File::delete($dir . $product['image_url']);
            $photo = $this->uploadPhoto($request);
        } else {
            $photo = $request->image_url;
        }
        $product->update([
            'product_barcode' => $request->product_barcode,
            'description' => $request->description,
            'description_2' => $request->description_2,
            'image_url' =>  $photo,
            'stock_unit_of_measure_code' => $request->stock_unit_of_measure_code,
            'purche_unit_of_measure_code' => $request->purche_unit_of_measure_code,
            'sup_code' => $request->sup_code,
            'brand_code' => $request->brand_code,
            'group_code' => $request->group_code,
            'cat_code' => $request->cat_code,
            'unit_price' => $request->unit_price,
            'variant_code' => $request->variant_code,
            'inactived' => $request->inactived,
            'updeted_by' => $request->updeted_by,
        ]);
        $product->update([$request->all()]);
        if($product){
            if($product->type =='ServiceTest'){
                $productvariantcode = prescription_list::where('product_no', '=', $id)->get();
                $productvariantcode->update([
                        'description' => $request->description,
                ]);
                $productvariantcode->update([$request->all()]);
            }
        }
        return response()->json(["$product"]);
    }


    public function updateProductLinke($id, Request $request)
    {
        $productvariantcode = productvariantcode::find($id);
        $dir = $this->directory();
        if ($request->image_url != $productvariantcode['image_url']) {
            File::delete($dir . $productvariantcode['image_url']);
            $photo = $this->uploadPhoto($request);
        } else {
            $photo = $request->image_url;
        }
        $productvariantcode->update([
            'id' => $request->id,
            'product_no' => $request->product_no,
            'description' => $request->description,
            'description_2' => $request->description_2,
            'image_url' => $photo,
            'variant_unit_of_measure_code' => $request->variant_unit_of_measure_code,
            'stock_unit_of_measure_code' => $request->stock_unit_of_measure_code,
            'quantity_per_unit' => $request->quantity_per_unit,
            'unit_price' => $request->unit_price,
            'curency_code' => $request->curency_code,
            'inactived' => $request->inactived,
            'updeted_by' => $request->updeted_by,
        ]);
        return response()->json(["$productvariantcode"]);
    }


    public function destLink($id)
    {
        $productvariantcode = productvariantcode::where('id', '=', $id)->where('status', '=', 'unit')->first();
        $product_no =  $productvariantcode->product_no;
        $productvariantcode->delete();
        if ($productvariantcode) {
            $productvariantcode = productvariantcode::where('product_no', '=', $product_no)->get();
            if ($productvariantcode) {
                return $productvariantcode;
            } else {
                return ['statue :' => "Note Date"];
            }
        } else {
            return ['statue :' => "Note Date"];
        }
    }
    public function saveDataFformexcel(Request $request)
    {
        $product = product::create([
            'id' => $request['product_no'],
            'product_no'  => $request['product_no'],
            'description' => $request['description'],
            'product_barcode'  => $request['product_barcode'],
            'description_2'  => $request['description_2'],
            'stock_unit_of_measure_code'  => $request['stock_unit_of_measure_code'],
            'purche_unit_of_measure_code'  => $request['purche_unit_of_measure_code'],
            'bom_no'  => $request['bom_no'],
            'reorder_point'  => $request['reorder_point'],
            'sup_code'  => $request['sup_code'],
            'brand_code'  => $request['brand_code'],
            'group_code'  => $request['group_code'],
            'cat_code'  => $request['cat_code'],
            'unit_price'  => $request['unit_price'],
            'type'        => 'Products',
            'inactived'  => $request['inactived'],
            'created_by'  => $request['created_by'],
        ]);
        if ($product) {
            return ['statue :' => "success"];
        } else {
            return ['statue :' => "notsuccess"];
        }
    }
    public function SaveDataLinkexcel(Request $request)
    {
        $productvariantcode = productvariantcode::create([
            'product_no' => $request['product_no'],
            'description' => $request['description'],
            'description_2' => $request['description_2'],
            'variant_unit_of_measure_code' => $request['variant_unit_of_measure_code'],
            'stock_unit_of_measure_code' => $request['stock_unit_of_measure_code'],
            'quantity_per_unit' => $request['quantity_per_unit'],
            'unit_price' => $request['unit_price'],
            'curency_code' => $request['curency_code'],
            'status' => $request['status'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
        if ($productvariantcode) {
            return ['statue :' => "success"];
        } else {
            return ['statue :' => "notsuccess"];
        }
    }
    public function makeDirectory($directory)
    {
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
    }
    public function directory()
    {
        return $dir = 'img' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR;
    }
    public function uploadPhoto(Request $request)
    {
        $dir = $this->directory();
        $file = $request->image_url;
        $this->makeDirectory($dir);
        $photo = now()->format('dmYHis') . '-' . time() . '.' . explode('/', explode(':', substr($request->image_url, 0, strpos($request->image_url, ';')))[1])[1];
        Image::make($file)->save(public_path($dir) . $photo);
        return $photo;
    }
    public function getboomline($id)
    {
        $productvariantcode = productvariantcode::groupBy('variant_unit_of_measure_code')
            ->addSelect('variant_unit_of_measure_code')
            ->whereNotIn('variant_unit_of_measure_code', productbom::select('bom_unit_of_measure_code')->where('product_no', '=', $id)->where('bom_unit_of_measure_code', '=', "")->get())
            ->where('product_no', '=', $id)
            ->get();
        return $productvariantcode;
    }

    public function getlinkunit($id)
    {
        $productvariantcode = unitofmeasure::whereNotIn('unit_code', productvariantcode::select('variant_unit_of_measure_code')
            ->where('product_no', '=', $id)->get())
            ->get();
        if (count($productvariantcode) < 1) {
            $productvariantcode = unitofmeasure::get();
            return $productvariantcode;
        }
        return $productvariantcode;
    }

    public function productsearch(Request $request)
    {
        $product_view = product::orderBy('product_no', 'asc')
            ->addSelect('id', 'product_no', 'product_barcode', 'description', 'description_2', 'image_url', 'stock_unit_of_measure_code', 'purche_unit_of_measure_code', 'bom_no', 'reorder_point', 'sup_code', 'brand_code', 'group_code', 'cat_code', 'variant_code', 'unit_price', 'inactived', 'is_deleted', 'created_by', 'updete_by', 'delete_by', 'created_at', 'updated_at')
            ->whereIn('product_no', product::select('product_no')
                ->where('description', 'LIKE', "%{$request->description}%")
                ->where('description_2', 'LIKE', "%{$request->description_2}%")
                ->where('stock_unit_of_measure_code', 'LIKE', "%{$request->stock_unit_of_measure_code}%")
                ->where('purche_unit_of_measure_code', 'LIKE', "%{$request->purche_unit_of_measure_code}%")
                ->where('group_code', 'LIKE', "%{$request->group_code}%")
                ->where('cat_code', 'LIKE', "%{$request->cat_code}%")
                ->where('inactived', 'LIKE', "%{$request->inactived}%")
                ->get())->paginate(9);
        return $product_view;
    }

    public function getProductCAt($id)
    {
        $productvariantcode = cat_produc::where('product_no', '=', $id)->first();
        if ($productvariantcode) {
            return $productvariantcode;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
      public function Productprescriton()
    {
        $productvariantcode = product::get();
        if ($productvariantcode) {
            return $productvariantcode;
        } else {
            return ['statue :' => "Note Date"];
        }
    }
}