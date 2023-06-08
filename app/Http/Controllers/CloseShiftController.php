<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\close_shift;

class CloseShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employee = close_shift::get();
        return $employee;
        
    }
public function getcheck()
    {
        //
        $employee = close_shift::orderBy('id', 'DESC')
        ->where('created_by', '=',1)
        ->where('statue', '=','open')
        ->first();
        return $employee;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $employee= close_shift::create([
            'description'=> $request['EmpDescription'],
            'deposit'=> $request['EmpUs'],
            'deposit2'=> $request['EmpKh'],
            'curency_code'=>'USD',
            'curency_code2'=> 'Riel',
            'statue'=> 'open',
            'created_by' => '1',
        ]);
        if($employee){
            return  close_shift::get();
        }
        else{
            return ['statue :'=> "faile"];
        }
        
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
        //
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
    public function update($id,Request $request)
    {
        
        $employee = close_shift::find($id);
        $employee->statue = 'close';
        $employee->deposit = $request->deposit;
        $employee->deposit2 = $request->deposit2;
        $employee->created_by = '1';
        $employee->save();
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