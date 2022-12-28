<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuApiController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return response()->json(['message'=> 'success', 'data' => $menus]);
    }
    public function show($id){
        $menus = Menu::find($id);
        return response()->json(['message'=> 'success', 'data' => $menus]);
    }
    public function inserthidangan(Request $request){
        $menus = Menu::create($request->all());
        return response()->json(['message'=> 'success', 'data' => $menus]);
    }
    public function update(Request $request,$id){
        $menus = Menu::find($id);
        $menus->update($request->all());
        return response()->json(['message'=> 'success', 'data' => $menus]);
    }
    public function delete($id){
        $menus = Menu::find($id);
        $menus->delete();
        return response()->json(['message'=> 'success DELETE', 'data' => []]);
   }
}
