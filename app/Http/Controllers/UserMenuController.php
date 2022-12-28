<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class UserMenuController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $menus = Menu::where('nama_menu','LIKE','%' .$request->search.'%')->paginate(100);
        } else {
            $menus = Menu::all();
        }
        return view('user.usermenu.menu', compact('menus'));
    }
}
