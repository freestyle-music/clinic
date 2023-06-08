<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\productgroup;

class ProductgroupController extends Controller
{
    public function index()
    {
        $productgroup = productgroup::orderBy('group_code')->paginate(10);
        return $productgroup;
    }

    public function getdatagroup()
    {
        $productgroup = productgroup::get();
        return $productgroup;
    }
    public function create(Request $request)
    {
        $productgroup = productgroup::create([
            'group_code' => $request['group_name'],
            'group_name' => $request['group_name'],
            'image_url' => $request['image_url'],
            'group_name_2' => $request['group_name_2'],
            'brand_code' => $request['brand_code'],
            'cat_code' => $request['cat_code'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
        if($productgroup){
          return ['statue :'=>"succese"];
        }else{
          return ['statue :'=>"faile"];
        }
    }

    public function update($id,Request $request)
    {
        $productgroup = productgroup::find($id);;
        $productgroup->group_code = $request->group_name;
        $productgroup->group_name = $request->group_name;
        $productgroup->image_url = $request->image_url;
        $productgroup->group_name_2 = $request->group_name_2;
        $productgroup->brand_code = $request->brand_code;
        $productgroup->inactived = $request->inactived;
        $productgroup->cat_code = $request->cat_code;
        $productgroup->updated_by = $request->updated_by;
        $productgroup->save();
        if($productgroup){
            return ['statue :'=> "Succesfull"];
        }else{
           return ['statue :'=>"faile "];
        }
    }

    public function destroy($id)
    {
        $productgroup = productgroup::find($id);
        $productgroup ->delete();
        if($productgroup){
            return ['statue :'=> "Succesfull"];
        }else{
           return ['statue :'=>"faile "];
        }
    }
}