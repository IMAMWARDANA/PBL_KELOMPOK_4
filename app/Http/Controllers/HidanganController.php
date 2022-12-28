<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HidanganController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $menus = Menu::where('nama_menu','LIKE','%' .$request->search.'%')->paginate(100);
        } else {
            $menus = Menu::all();
        }
        return view('admin/hidangan/index',compact('menus'));
    }
    public function tambahhidangan(){
        return view('admin/hidangan/create');
    }
    public function inserthidangan(Request $request){
       // dd($request->all());
       $menus = Menu::create($request->all());
       if($request->hasFile('gambar')){
        $request->file('gambar')->move('fotohidangan/', $request->file('gambar')->getClientOriginalName());
        $menus->gambar = $request->file('gambar')->getClientOriginalName();
        $menus->save();
       }
        return redirect()->route('hidangan')->with('success', 'Data Berhasil Ditambahkan!!!');
    }
    public function updatehidangan($id){
        $menus = Menu::find($id);
       // dd($data);
       return view('admin/hidangan/edit', compact('menus'));
    }
    public function updatedata(Request $request, $id){
        $menus = Menu::find($id);
        $menus->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('fotohidangan/', $request->file('gambar')->getClientOriginalName());
            $menus->gambar = $request->file('gambar')->getClientOriginalName();
            $menus->save();
           }
        return redirect()->route('hidangan')->with('success', 'Data Berhasil Diupdate!!!');
    }
     public function delete($id){
         $menus = Menu::find($id);
         $menus->delete();
         return redirect()->route('hidangan')->with('success', 'Data Berhasil Dihapus!!!');
    }
}
