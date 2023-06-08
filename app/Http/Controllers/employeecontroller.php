<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\role;
use App\Models\permittion_role;
use App\Models\permittion;
use Illuminate\Http\Request;

class employeecontroller extends Controller
{
   public function create(Request $request ){
       $employee = employee::create([
        'lstname'   =>$request['lstname'],
        'firstname' =>$request['firstname'],
        'birstdate' =>$request['birstdate'],
        'sex'       =>$request['sex'],
        'phone1'    =>$request['phone1'],
        'phone2'    =>$request['phone2'],
        'email'     =>$request['email'],
        'hiredate'  =>$request['hiredate'],
        'address'   =>$request['address'],
        'address2'  =>$request['address2'],
        'village'   =>$request['village'],
        'commune'   =>$request['commune'],
        'district'  =>$request['district'],
        'pro_city'  =>$request['pro_city'],
        'region'    =>$request['region'],
        'remark'    =>$request['remark'],
        'status'    =>$request['status'],
        'created_by' =>'1',
        ]);
        if($employee){
            return employee::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
    }

    public function index(){
       $employee = employee::orderBy('id', 'DESC')->get();
       return $employee;
    }

    public function delete($id){
      $employee = employee::find($id);
        $employee->delete();
        if($employee){
            return employee::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
    }


    public function update($id,Request $request){
        $employee = employee::find($id);
        $employee->lstname = $request->lstname;
        $employee->firstname = $request->firstname;
        $employee->birstdate = $request->birstdate;
        $employee->sex = $request->sex;
        $employee->phone1 = $request->phone1;
        $employee->phone2 = $request->phone2;
        $employee->email = $request->email; 
        $employee->hiredate = $request->hiredate;
        $employee->address = $request->address;
        $employee->address2 = $request->address2;
        $employee->village = $request->village; 
        $employee->commune = $request->commune;
        $employee->district = $request->district;
        $employee->pro_city = $request->pro_city;
        $employee->region = $request->region;
        $employee->remark = $request->remark;
        $employee->status = $request->status;
        $employee->updated_by = $request->updated_by;
        $employee->save();
        if($employee){
            return employee::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
    }
     public function rolecreate(Request $request){
          if($request['created_by']!="" && $request['role'] !=""){   
            $category = role::create([
                'role' => $request->role,
                'description' => $request->description,
                'created_by' => $request->created_by,
            ]);
            if($category){
                   return role::get();
            }else{
                 return ['statue' => "Reqest date fail."];
            }
          }else{
             return ['statue' => "Reqest date fail."];
          }
     }

     public function roleupdate(Request $request){
          if($request['updated_by']!="" && $request['role'] !=""){    
              $category = role::find($request->id);             
              $category ->update([
                'role' => $request->role,
                'description' => $request->description,
                'created_by' => $request->created_by,
            ]);
            if($category){
                 return $category;
            }else{
                 return ['statue' => "Reqest date fail."];
            }
          }else{
              return ['statue' => "Reqest date fail."];
          }
     }

    public function roledatele(Request $request){
          if($request['created_by']!="" && $request['role'] !=""){               
              $beginingstock = role::find($request->id)->first();
              $beginingstock -> delete();
            if($beginingstock ){
                  return role::get();
            }else{
                return ['statue' => "Reqest date fail."];
            }
          }else{
            return ['statue' => "Reqest date fail."];
          }
     }


    public function permicreate(Request $request){
          if($request['created_by']!="" && $request['permission'] !=""){   
            $category = permittion::create([
                'permission' => $request->permission,
                'description' => $request->description,
                'created_by' => $request->created_by,
            ]);
            if($category){
                   return permittion::get();
            }else{
                 return ['statue' => "Reqest date fail."];
            }
          }else{
             return ['statue' => "Reqest date fail."];
          }
     }

    public function permiupdate(Request $request){
          if($request['updated_by']!="" && $request['permission'] !=""){    
              $category = permittion::find($request->id);             
              $category ->update([
                'permission' => $request->permission,
                'description' => $request->description,
                'created_by' => $request->created_by,
            ]);
            if($category){
                 return $category;
            }else{
                 return ['statue' => "Reqest date fail."];
            }
          }else{
              return ['statue' => "Reqest date fail."];
          }
     }

    public function permidatele(Request $request){
          if($request['created_by']!="" && $request['permission'] !=""){               
              $beginingstock = permittion::find($request->id)->first();
              $beginingstock -> delete();
            if($beginingstock ){
                  return permittion::get();
            }else{
                return ['statue' => "Reqest date fail."];
            }
          }else{
            return ['statue' => "Reqest date fail."];
          }
     }

     public function permirolecreate(Request $request){
          if($request['created_by']!="" && $request['role'] !="" && $request['permission']){   
            $category = role::create([
                'role' => $request->cat_code,
                'permission' => $request->permission,
                'description' => $request->cat_name,
                'created_by' => $request->created_by,
            ]);
            if($category){
                   return role::get();
            }else{
                 return ['statue' => "Reqest date fail."];
            }
          }else{
             return ['statue' => "Reqest date fail."];
          }
     }

    public function permiroleupdate(Request $request){
          if($request['updated_by']!="" && $request['role'] !="" && $request['permission']){    
              $category = role::find($request->id);             
              $category ->update([
                'role' => $request->cat_code,
                'permission' => $request->permission,
                'description' => $request->cat_name,
                'created_by' => $request->created_by,
            ]);
            if($category){
                 return $category;
            }else{
                 return ['statue' => "Reqest date fail."];
            }
          }else{
              return ['statue' => "Reqest date fail."];
          }
     }

    public function permiroledatele(Request $request){
          if($request['created_by']!="" ){               
              $beginingstock = role::find($request->id)->first();
              $beginingstock -> delete();
            if($beginingstock ){
                  return role::get();
            }else{
                return ['statue' => "Reqest date fail."];
            }
          }else{
            return ['statue' => "Reqest date fail."];
          }
     }
}