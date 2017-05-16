<?php

namespace App\Core\Http\Controllers;

use App\Domains\Usuario\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home');
        $request->session()->put('teste', '1234');

        echo $request->session()->get('teste');

    }
}
