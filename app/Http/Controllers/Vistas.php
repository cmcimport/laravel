<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vistas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	return view("layouts.home.index");
    }

    public function terminos()
    {
        //
	return view("layouts.home.terminos");
    }
    
    public function privacidad()
    {
        //
	return view("layouts.home.privacidad");
    }
    
    public function nuestro_proyecto()
    {
        //
	return view("layouts.home.nuestro_proyecto");
    }
    public function contacto()
    {
        //
	return view("layouts.home.contacto");
    }
    public function preguntas_frecuentes()
    {
        //
	return view("layouts.home.preguntas_frecuentes");
    }
    

}
