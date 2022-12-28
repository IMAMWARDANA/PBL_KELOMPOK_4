<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\Reservasi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = User::where('name','LIKE','%' .$request->search.'%')->paginate(100);
        } else {
            $data = User::all();
        }
        $users = User::where('role','user')->count();
        $admins = User::where('role','admin')->count();
        $menus = Menu::count();
        $reservasis = Reservasi::count();
        $countPerHari = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 days'))])->count();
        $countPerMinggu = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-7 days'))])->count();
        $countPerBulan = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 month'))])->count();
        $countPerTahun = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 year'))])->count();
;
        return view('admin/dashboard/index',compact('data','users','admins','menus','reservasis','countPerHari','countPerMinggu','countPerBulan','countPerTahun'));
    }
    
    public function deleteuser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Dihapus!!!');
    }
    public function countPerHari(Request $request){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 days'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 days'))])
        ->orderBy('tanggal','desc')
        ->get();
        //dd($data);
        return view('/admin/dashboard/date', compact('data'));
    }
    public function countPerMinggu(Request $request){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-7 days'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-7 days'))])
        ->orderBy('tanggal','desc')
        ->get();
        //dd($data);
        return view('/admin/dashboard/mingguan', compact('data'));
    }
    public function countPerBulan(Request $request){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 month'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 month'))])
        ->orderBy('tanggal','desc')
        ->get();
        //dd($data);
        return view('/admin/dashboard/bulanan', compact('data'));
    }
    public function countPerTahun(Request $request){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 year'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 year'))])
        ->orderBy('tanggal','desc')
        ->get();
        //dd($data);
        return view('/admin/dashboard/tahunan', compact('data'));
    }
    public function dlh(){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 days'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 days'))])
        ->orderBy('tanggal','desc')
        ->get();
        view()->share('data', $data);
        $pdf = pdf::loadview('admin.dashboard.counth-pdf');
        return $pdf->download('data.pdf');
    }
    public function dlm(){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-7 days'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-7 days'))])
        ->orderBy('tanggal','desc')
        ->get();
        view()->share('data', $data);
        $pdf = pdf::loadview('admin.dashboard.countm-pdf');
        return $pdf->download('data.pdf');
    }
    public function dlb(){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 month'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 month'))])
        ->orderBy('tanggal','desc')
        ->get();
        view()->share('data', $data);
        $pdf = pdf::loadview('admin.dashboard.countb-pdf');
        return $pdf->download('data.pdf');
    }
    public function dlt(){
        $data = DB::table('pesanan_details');
        $data = PesananDetail::whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 year'))])
        ->select([
            DB::raw('id as id'),
            DB::raw('menu_id as menu_id'),
            DB::raw('pesanan_id as pesanan_id'),
            DB::raw('jumlah as jumlah'),
            DB::raw('jumlah_harga as jumlah_harga'),
            DB::raw('updated_at as updated_at'),
            DB::raw('count(*) as total'),
            DB::raw('Date(updated_at) as tanggal')
        ])
        ->groupBy('id')
        ->groupBy('menu_id')
        ->groupBy('pesanan_id')
        ->groupBy('jumlah')
        ->groupBy('jumlah_harga')
        ->groupBy('updated_at')
        ->groupBy('tanggal')
        ->whereRaw('Date(updated_at) >= ? ',[date('Y-m-d',strtotime('-1 year'))])
        ->orderBy('tanggal','desc')
        ->get();
        view()->share('data', $data);
        $pdf = pdf::loadview('admin.dashboard.countt-pdf');
        return $pdf->download('data.pdf');
    }
}
