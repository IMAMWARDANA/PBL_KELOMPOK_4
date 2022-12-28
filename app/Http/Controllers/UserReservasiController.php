<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReservasiController extends Controller
{
    public function index(Request $request)
    {
        //$data = UserReservasiController::getUser(Auth::user('id'));
        //$data = User::where(Auth::user($id));
      
        if($request->has('search')){
            $data = Reservasi::where('name','LIKE','%' .$request->search.'%')->paginate(100);
        } else {

        $data = Reservasi::where('name', Auth::user()->name)->where('status',[])->get();
        }
        $data->name = Auth::user()->name;
        return view('user/userreservasi/index',compact('data'));
        //dd($data);
    }
    public function usertambahreservasi(){
        return view('user/userreservasi/create');
    }
    public function userinsertreservasi(Request $request){
       // dd($request->all());
        $data = Reservasi::create($request->all());
        return redirect()->route('userreservasi')->with('success', 'Data Berhasil Ditambahkan!!!');
    }
    public function userdeletereservasi($id){
        $data = Reservasi::find($id);
        $data->delete();
        return redirect()->route('userreservasi')->with('success', 'Data Berhasil Dihapus!!!');
    }
    public function userbayarreservasi($id){
        $data = Reservasi::find($id);
        //dd($data);
        return view('user/userreservasi/bayar', compact('data'));
    }
      //  public static function getUser(){
       // if (!isset($_SESSION['id'])) {
         //   return false;
        //} else {
          //  $row = User::where('id', $_SESSION['id'])->first();
            //$data = [
              //  'id' => $row['id'],
                //'name' => $row['name'],
                //'email' => $row['email'],
                //'alamat' => $row['alamat'],
                //'nohp' => $row['nohp'],
                //'role' => $row['role'],
            //];
           // return $data;
        //}
//}
}
