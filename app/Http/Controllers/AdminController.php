<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function gestion_usuario()
    {
        //
	return view("layouts.admin.gestion_usuarios");
    }
    
    public function gestion_categoria()
    {
        //
	return view("layouts.admin.gestion_categorias");
    }
    
    

}
