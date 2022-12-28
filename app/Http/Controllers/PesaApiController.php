<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesaApiController extends Controller
{
    public function index(){
        $pesanans = Pesanan::all();
        return response()->json(['message'=> 'success', 'data' => $pesanans]);
    }
    public function show($id){
        $pesanans = Pesanan::find($id);
        return response()->json(['message'=> 'success', 'data' => $pesanans]);
    }
    public function inserttransaksi(Request $request){
        $pesanans = Pesanan::create($request->all());
        return response()->json(['message'=> 'success', 'data' => $pesanans]);
    }
    public function update(Request $request,$id){
        $pesanans = Pesanan::find($id);
        $pesanans->update($request->all());
        return response()->json(['message'=> 'success', 'data' => $pesanans]);
    }
    public function delete($id){
        $pesanans = Pesanan::find($id);
        $pesanans->delete();
        return response()->json(['message'=> 'success DELETE', 'data' => []]);
   }  
}
