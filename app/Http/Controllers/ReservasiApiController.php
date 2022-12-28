<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiApiController extends Controller
{
    public function index(){
        $reservasis = Reservasi::all();
        return response()->json(['message'=> 'success', 'data' => $reservasis]);
    }
    public function show($id){
        $reservasis = Reservasi::find($id);
        return response()->json(['message'=> 'success', 'data' => $reservasis]);
    }
    public function insertreservasi(Request $request){
        $reservasis = Reservasi::create($request->all());
        return response()->json(['message'=> 'success', 'data' => $reservasis]);
    }
    public function update(Request $request,$id){
        $reservasis = Reservasi::find($id);
        $reservasis->update($request->all());
        return response()->json(['message'=> 'success', 'data' => $reservasis]);
    }
    public function delete($id){
        $reservasis = Reservasi::find($id);
        $reservasis->delete();
        return response()->json(['message'=> 'success DELETE', 'data' => []]);
   }
}
