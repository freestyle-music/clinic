<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\brand;

class BrandsController extends Controller
{
    public function index(Request $request)
    {

        $brand =  brand::where('brand_name', "LIKE", '%' . $request->search . '%')
            ->orwhere('brand_name_2', "LIKE", '%' . $request->search . '%')
            ->orwhere('inactived', "LIKE", '%' . $request->search . '%')
            ->orderBy('id', 'desc')->paginate(15);
        return $brand;
    }
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
        ]);
        $brand = brand::create([
            'brand_code' => $request['brand_name'],
            'brand_name' => $request['brand_name'],
            'brand_name_2' => $request['brand_name_2'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
        if ($brand) {
            return $brand;
        } else {
            return ['statue :' => "faile"];
        }
    }
    public function update($id, Request $request)
    {
        $brand = brand::find($id);
        $brand->brand_code = $request->brand_name;
        $brand->brand_name = $request->brand_name;
        $brand->brand_name_2 = $request->brand_name_2;
        $brand->inactived = $request->inactived;
        $brand->updated_by = $request->updated_by;
        $brand->save();
        if ($brand) {
            return ['statue :' => "Succesfull"];
        } else {
            return ['statue :' => "faile "];
        }
    }

    public function destroy($id) 
    {
        $brand = brand::find($id);
        $brand->delete();
        if ($brand) {
            return ['statue :' => "Succes full"];
        } else {
            return ['statue :' => "faile Delete"];
        }
    }
    public function getdata()
    {
        $brand = brand::get();
        return $brand;
    }
}