<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use App\Product;
use App\Tienda;
use App\Seguido;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $tienda = Tienda::all()->where('usuario_id', $user_id);
        return view('layouts.users.configuracion', ['tienda' => $tienda]);
    }
}
