<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\setup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
  public function create(Request $request)
  {
      $requestData = $request->all();
      $validator = Validator::make($requestData,[
          'user_name' => 'required|max:55',
          'password' => 'required|max:55'
      ]);

      if ($validator->fails()) {
          return response()->json([
              'errors' => $validator->errors()
          ], 422);
      }

      $requestData['password'] = Hash::make($requestData['password']);

      $user = User::create($requestData);

      return response([ 'status' => true, 'message' => 'User successfully register.' ], 200);
  }

  public function createsetup(Request $request)
  {
    $pateint = setup::create([
      'company_name'       => $request['company_name'],
      'company_Address'    => $request['company_Address'],
      'company_Phone'      => $request['company_Phone'],
      'company_Email'      => $request['company_Email'],
      'main_Currency'      => $request['main_Currency'],
      'product_check'      => $request['product_check'],
      'created_by'         => $request['created_by'],
    ]);
    if ($pateint) {
      return $pateint;
    } else {
      return ['statue :' => "Note Date"];
    }
  }

  public function selectsetup()
  {
    $pateint = setup::orderBy('id', 'desc')->first();
    return $pateint;
  }


  public function login(Request $request)
  {
      $requestData = $request->all();
      $validator = Validator::make($requestData,[
          'user_name' => 'required',
          'password' => 'required'
      ]);

      if ($validator->fails()) {
          return response()->json([
              'errors' => $validator->errors()
          ], 422);
      }

      if(!auth()->attempt($requestData)){
          return response()->json(['error' => 'UnAuthorised Access'], 401);
      }

      $accessToken = auth()->user()->createToken('authToken')->accessToken;

      return response(['user' => auth()->user(), 'token' => $accessToken], 200);
  }

  public function me(Request $request)
  {
      $user = $request->user();

      return response()->json(['user' => $user], 200);
  }

  public function logout (Request $request)
  {
      $token = $request->user()->token();
      $token->revoke();
      $response = ['message' => 'You have been successfully logged out!'];
      return response($response, 200);
  }

  public function updatesetup($id, Request $request)
  {
    $unitcode = setup::find($id);
    $unitcode->company_name = $request->company_name;
    $unitcode->company_Address = $request->company_Address;
    $unitcode->company_Phone = $request->company_Phone;
    $unitcode->company_Email = $request->company_Email;
    $unitcode->main_Currency = $request->main_Currency;
    $unitcode->product_check = $request->product_check;
    $unitcode->created_by = $request->created_by;
    $unitcode->save();
    if ($unitcode) {
      return ['statue :' => "SUCCESSE"];
    } else {
      return ['statue :' => "Note Date"];
    }
  }


  public function index()
  {
    $pateint = User::get();
    return $pateint;
  }

  public function update($id, Request $request)
  {
    $user = User::find($id);
    $user -> user_name = $request->user_name;
    $user -> email = $request->email;
    $user -> password = Hash::make($request->password);
    $user -> role = $request->role;
    $user -> statue = $request -> statue;
    $user -> save();
    if($user){
      return ["message" => "Update Successfully"];
    }
    else {
      return ["message"=> "Error Update"];
    }

  }
  
}