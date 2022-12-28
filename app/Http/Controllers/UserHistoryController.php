<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Http\Request;

class UserHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('user.userhistory.index', compact('pesanans'));
    }

    public function userdetail($id)
    {
    	$pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

     	return view('user.userhistory.detail', compact('pesanan','pesanan_details'));
    }
}
