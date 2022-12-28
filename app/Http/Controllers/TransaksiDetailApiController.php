<?php

namespace App\Http\Controllers;

use App\Models\PesananDetail;
use Illuminate\Http\Request;

class TransaksiDetailApiController extends Controller
{
    public function index(){
        $data = PesananDetail::all();
        return response()->json(['message'=> 'success', 'data' => $data]);
    }
    public function show($id){
        $data = PesananDetail::find($id);
        return response()->json(['message'=> 'success', 'data' => $data]);
    }
    public function insertdetil(Request $request){
        $data = PesananDetail::create($request->all());
        return response()->json(['message'=> 'success', 'data' => $data]);
    }
    public function update(Request $request,$id){
        $data = PesananDetail::find($id);
        $data->update($request->all());
        return response()->json(['message'=> 'success', 'data' => $data]);
    }
    public function delete($id){
        $data = PesananDetail::find($id);
        $data->delete();
        return response()->json(['message'=> 'success DELETE', 'data' => []]);
   }
}
