<?php

namespace App\Http\Controllers;

use App\Models\pateint;
use Illuminate\Http\Request;

class pateintcontroller extends Controller
{
    public function create(Request $request ){
       $pateint = pateint::create([
        'pateinid'       =>$request['pateinid'],
        'lstname'       =>$request['lstname'],
        'firstname'     =>$request['firstname'],
        'birstdate'     =>$request['birstdate'],
        'sex'           =>$request['sex'],
        'age'           =>$request['age'],
        'allergies'     =>$request['allergies'],
        'history_disease'=>$request['history_disease'],
        'phone1'        =>$request['phone1'],
        'phone2'        =>$request['phone2'],
        'email'         =>$request['email'],
        'address'       =>$request['address'],
        'address2'      =>$request['address2'],
        'village'       =>$request['village'],
        'commune'       =>$request['commune'],
        'district'      =>$request['district'],
        'pro_city'      =>$request['pro_city'],
        'region'        =>$request['region'],
        'remark'        =>$request['remark'],
        'status'        =>$request['status'],
        'created_by'    =>$request['created_by']
       ]);
       if($pateint){
            return pateint::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
    }
    
    public function index(){
       $pateint = pateint::orderBy('id', 'DESC')->get();
       return $pateint;
    }
    
    public function delete($id){
      $employee = pateint::find($id);
        $employee->delete();
        if($employee){
            return pateint::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
    }

    public function update($id,Request $request)
    {      
        $employee = pateint::findOrFail($id);
        $employee->pateinid = $request->pateinid;
        $employee->lstname = $request->lstname;
        $employee->firstname = $request->firstname;
        $employee->birstdate = $request->birstdate;
        $employee->sex = $request->sex;
        $employee->age = $request->age;
        $employee->phone1 = $request->phone1;
        $employee->phone2 = $request->phone2;
        $employee->allergies = $request->allergies;
        $employee->history_disease = $request->history_disease;
        $employee->email = $request->email; 
        $employee->address = $request->address;
        $employee->address2 = $request->address2;
        $employee->village = $request->village; 
        $employee->commune = $request->commune;
        $employee->district = $request->district;
        $employee->pro_city = $request->pro_city;
        $employee->region = $request->region;
        $employee->remark = $request->remark;
        $employee->status = $request->status;
        $employee->save();
        if($employee){
            return pateint::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
    }
    public function test(Request $request){
        $employee = pateint::find($request->id);
        $employee->pateinid = $request->pateinid;
        $employee->lstname = $request->lstname;
         $employee->firstname = $request->firstname;
        $employee->birstdate = $request->birstdate;
        $employee->sex = $request->sex;
        $employee->age = $request->age;
        $employee->phone1 = $request->phone1;
        $employee->phone2 = $request->phone2;
        $employee->allergies = $request->allergies;
        $employee->history_disease = $request->history_disease;
        $employee->email = $request->email; 
        $employee->address = $request->address;
        $employee->address2 = $request->address2;
        $employee->village = $request->village; 
        $employee->commune = $request->commune;
        $employee->district = $request->district;
        $employee->pro_city = $request->pro_city;
        $employee->region = $request->region;
        $employee->remark = $request->remark;
        $employee->status = $request->status;
        $employee->save();
          if($employee){
            return pateint::orderBy('id', 'DESC')->get();
        }else{
            return ['statue :'=>"faile"];
        }
//    $pre = pateint::findOrFail($vcs);
//         $pre->update([
//             'pateinid' => $request->pateinid,
//             'lstname' => $request->lstname,
            // 'visit_date' => $request->visit_date,
            // 'BP' => $request->BP,
            // 'Pr' => $request->Pr,
            // 'rr' => $request->rr,
            // 'Spo2' => $request->Spo2,
            // 'T' => $request->T,
            // 'status' => $request->status,
            // 'appointment_date' => $request->appointment_date,
            // 'remark' => $request->remark,
            // 'updated_at' => $request->updated_at,
        // ]);
        // return $pre;
    }
}