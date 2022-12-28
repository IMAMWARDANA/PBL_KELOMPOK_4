<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Reservasi::where('name','LIKE','%' .$request->search.'%')->paginate(100);
        } else {
            $data = Reservasi::all();
        }
        return view('admin/reservasi/index',compact('data'));
    }
    public function tambahreservasi(){
        return view('admin/reservasi/create');
    }
    public function insertreservasi(Request $request){
       // dd($request->all());
        $data = Reservasi::create($request->all());
        return redirect()->route('reservasi')->with('success', 'Data Berhasil Ditambahkan!!!');
    }
    public function updatereservasi($id){
        $data = Reservasi::find($id);
        //dd($data);
        return view('admin/reservasi/edit', compact('data'));
    }
    public function updatedatareservasi(Request $request, $id){
        $data = Reservasi::find($id);
        $data->update($request->all());
        return redirect()->route('reservasi')->with('success', 'Data Berhasil Diupdate!!!');
    }
    public function deletereservasi($id){
        $data = Reservasi::find($id);
        $data->delete();
        return redirect()->route('reservasi')->with('success', 'Data Berhasil Dihapus!!!');
    }
    public function bayarreservasi($id){
        $data = Reservasi::find($id);
        //dd($data);
        return view('admin/reservasi/bayar', compact('data'));
    }
}
