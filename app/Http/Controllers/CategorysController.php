<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\category;

class CategorysController extends Controller
{

    public function index(Request $request)
    {
        $category =  category::where('cat_name', "LIKE", '%' . $request->search . '%')
            ->orwhere('cat_name_2', "LIKE", '%' . $request->search . '%')
            ->orwhere('inactived', "LIKE", '%' . $request->search . '%')
            ->orderBy('id', 'desc')->paginate(15);
        return $category;
    }

    public function store(Request $request)
    {
        return category::create([
            'cat_code' => $request['cat_name'],
            'cat_name' => $request['cat_name'],
            'cat_name_2' => $request['cat_name_2'],
            'inactived' => $request['inactived'],
            'created_by' => $request['created_by'],
        ]);
    }
    public function update($id, Request $request)
    {
        $category =  category::where('cat_code','=',$id)->first();
        $category->cat_code = $request->cat_name;
        $category->cat_name = $request->cat_name;
        $category->cat_name_2 = $request->cat_name_2;
        $category->inactived = $request->inactived;
        $category->updated_by = $request->updated_by;
        $category->save();
        return $category;
    }
    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
        return response()->json(['message' => 'category deleted successfully']);
    }

    public function getCatName()
    {
        $category =  category::orderBy('id','DESC')->get();
        return $category;
    }
    public function storeExcel(Request $request)
    {

        $category = category::create([
            'cat_code' => $request->cat_code,
            'cat_name' => $request->cat_name,
            'cat_name_2' => $request->cat_name_2,
            'inactived' => $request->inactived,
            'is_deleted' => "0",
            'created_by' => "Chhin Pov",
        ]);
        if ($category) {
            return category::get()->all();
        } else {
            return ['statue :' => "faile"];
        }
    }
}