<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json(['message'=> 'success', 'data' => $users]);
    }
    public function show($id){
        $users = User::find($id);
        return response()->json(['message'=> 'success', 'data' => $users]);
    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return response()->json(['message'=> 'success DELETE', 'data' => []]);
   }
   public function insertuser(Request $request){
    $users = User::create($request->all());
    return response()->json(['message'=> 'success', 'data' => $users]);
}
public function update(Request $request,$id){
    $users = User::find($id);
    $users->update($request->all());
    return response()->json(['message'=> 'success', 'data' => $users]);
    }
}
