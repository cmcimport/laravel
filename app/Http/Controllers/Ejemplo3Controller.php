<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejemplo3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //
		return view("login");
    }
    
    public function register()
    {
        //
		return view("register");
    }
    
    public function my_account()
    {
        //
		return view("my_account");
    }
    
    public function orders()
    {
        //
		return view("pedidos");
    }
    
    public function order()
    {
        //
		return view("pedido");
    }
    
}
