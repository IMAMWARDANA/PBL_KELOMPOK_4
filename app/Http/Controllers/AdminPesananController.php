<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class AdminPesananController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Pesanan::where('user_id','LIKE','%' .$request->search.'%')->paginate(100);
        } else {
            $data = Pesanan::all();
        }
        return view('admin/pesanan/index',compact('data'));
    }

    public function deletepesanan($id){
        $data = Pesanan::find($id);
        $data->delete();
        return redirect()->route('pesanan')->with('success', 'Data Berhasil Dihapus!!!');
    }
    public function updatepesanan($id){
        $data = Pesanan::find($id);
       // dd($data);
       return view('admin/pesanan/edit', compact('data'));
    }
    public function updatedatapesan(Request $request, $id){
        $data = Pesanan::find($id);
        $data->update($request->all());
        return redirect()->route('pesanan')->with('success', 'Data Berhasil Diupdate!!!');
    }
}
