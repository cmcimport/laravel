<?php

namespace App\Http\Controllers;
/*
 * El ID debe ir detras
 * 
 */
// cargamos el modelo
use App\User;
use App\UserType;
use App\Product;
use App\Tienda;
use App\Seguido;
use App\Publicacion;
use App\UserDireccion;
use App\ConfigPago;
use App\ConfigPagoTransferencia;
use App\ConfigPagoContrareembolso;
use App\ConfigPagoRecogidaEnTienda;
use App\Favorito;
use App\ImagenProduct;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }
    
    public function mi_muro(Request $request)
    {
        // Revisar tabla ladrillo
        // $user_id = Auth::user()->id;
        // $publicaciones = Publicacion::all()->where('usuario_id', $user_id);
	return view("layouts.users.mi_muro");
    }
    
    public function alertas()
    {
	return view("layouts.users.alertas");
    }
    
    public function usuarios()
    {
        
        try{
            $user = User::inRandomOrder()->paginate(10);
            return view('layouts.users.usuarios', ['users' => $user]);
            
        }catch(\Exception $e){
            return view("layouts.users.usuarios");
        } 
	return view("layouts.users.usuarios");
    }
    
    
    
    public function ver_perfil($id)
    {
        if(!Auth::user()){
            return redirect()->route("home");
        }else{
            $user_sigue = Auth::user()->id;
            // evaluamos si estamos siguiendo a este usuario
            $seguido = Seguido::all()->where('user_sigue', '=', $user_sigue)->where('user_seguido', '=', $id)->count();
            // dd($seguido);

            $siguiendo = Seguido::all()->where('user_sigue', '=', $id);
            $seguidores = Seguido::all()->where('user_seguido', '=', $id);
            $usuarios = User::all();
            // dd($siguiendo);
            return view('layouts.users.perfil', [
                'user' => User::findOrFail($id),
                'seguido' => $seguido,
                'siguiendo' => $siguiendo,
                'seguidores' => $seguidores,
                'usuarios' => $usuarios,
                'id' => $id
            ]);
        }
    }

    public function seguidores()
    {
        $user_sigue = Auth::user()->id;
        $seguido = Seguido::all()->where('user_sigue', '=', $user_sigue);
        $usuarios = User::all();
        $mesigues = Seguido::all()->where('user_seguido', '=', $user_sigue);
        // dd($mesigue);
	return view("layouts.users.seguidores", ['seguidores' => $seguido, 'mesigue' => $mesigues, 'usuarios' => $usuarios]);
    }
    
    public function store_seguidores(Request $request, $user_seguido)
    {
        $seguido = new Seguido($request->all());
        $seguido->user_sigue=Auth::user()->id;
        $seguido->user_seguido=$user_seguido;
        $seguido->save();
        return redirect()->route("user.perfil", $user_seguido);
    }
    
    public function remove_seguidores($user_seguido, Request $request)
    {
        $user_sigue = Auth::user()->id;
        $seguido = Seguido::all()->where('user_sigue', '=', $user_sigue)->where('user_seguido', '=', $user_seguido);

        foreach ($seguido as $borrar) {
            $borrar->delete();
        }
        
        /* $seguido->delete();
        dd($seguido); */
        return redirect()->route("user.perfil", $user_seguido);
    }
    public function remove_seguidor($user_seguido, Request $request)
    {
        $user_sigue = Auth::user()->id;
        $seguido = Seguido::all()->where('user_sigue', '=', $user_sigue)->where('user_seguido', '=', $user_seguido);

        foreach ($seguido as $borrar) {
            $borrar->delete();
        }
        
        /* $seguido->delete();
        dd($seguido); */
        return redirect()->route("user.seguidores");
    }
    
    public function favoritos()
    {
        //
        $user_id = Auth::user()->id;
        $favorito = Favorito::all()->where('user_id', '=', $user_id);
        $fotos = ImagenProduct::all();
        
	return view("layouts.users.favoritos", ['favoritos' => $favorito, 'fotos'=>$fotos]);
        
    }
    
    public function store_favorito(Request $request, $product_id)
    {
        $favorito = new Favorito($request->all());
        $favorito->product_id=$product_id;
        $favorito->user_id=Auth::user()->id;
        $favorito->save();
        //dd($favorito);
        return redirect()->route("user.favoritos");
    }
    public function remove_favorito(Request $request, $product_id)
    {
        $user_id = Auth::user()->id;
        $favorito = Favorito::all()->where('product_id', '=', $product_id)->where('user_id', '=', $user_id);
        foreach ($favorito as $borrar) {
            $borrar->delete();
        }
        
        //dd($favorito);
        return redirect()->route("user.favoritos");
    }
    public function store_product_favorito(Request $request, $product_id)
    {
        $favorito = new Favorito($request->all());
        $favorito->product_id=$product_id;
        $favorito->user_id=Auth::user()->id;
        $favorito->save();
        //dd($favorito);
        return redirect()->route("ver.producto", $product_id);
    }
    public function remove_product_favorito(Request $request, $product_id)
    {
        $user_id = Auth::user()->id;
        $favorito = Favorito::all()->where('product_id', '=', $product_id)->where('user_id', '=', $user_id);
        foreach ($favorito as $borrar) {
            $borrar->delete();
        }
        
        //dd($favorito);
        return redirect()->route("ver.producto", $product_id);
    }
    public function configuracion()
    {
        //
        $user_id = Auth::user()->id;
        $tienda = Tienda::all()->where('usuario_id', $user_id);
        return view("layouts.users.configuracion", ['tienda' => $tienda]);
        
    }
    
    public function update_perfil(Request $request)
    {
        $user_id = User::find(Auth::user()->id);
        $user_id->fill($request->all());
        
       
        if($user_id->image!=null){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
            $imageName = time().rand(100, 200).'.'.$request->image->extension();  
            $request->image->move(public_path('images/perfil'), $imageName);
            
            $user_id->image = $imageName;
        }
     
        $user_id->save();
	return redirect()->route("user.config");
    }
    public function update_tienda(Request $request)
    {
        $user_id = Auth::user()->id;
        $tienda = Tienda::all()->where('usuario_id', $user_id);
        
        if ($tienda->isEmpty()){
            $tienda = new Tienda($request->all());
            $tienda->usuario_id=$user_id;
            $tienda->mayorista=0;
            $tienda->aprobado=0;
            $tienda->save();
            return redirect()->route("user.config");
        }else {
            $id_tienda = $tienda->first()->id;
            $tienda = Tienda::find($id_tienda);
            $tienda->fill($request->all());
            $tienda->save();
            return redirect()->route("user.config");
        }
        
    }
    
    public function direcciones()
    {
        $user_id = Auth::user()->id;
        $direccion = UserDireccion::all()->where('user_id', $user_id);
	return view("layouts.users.direcciones", ['direcciones' => $direccion]);
    }
    public function crear_direccion()
    {
        
	return view("layouts.users.crear_direccion");
    }
    
    public function store_direccion(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $direccion = new UserDireccion($request->all());
        $direccion->user_id=$user_id;
        $direccion->por_defecto=0;
        $direccion->save();
        return redirect()->route("user.direcciones");
    }
    
    public function editar_direccion($id)
    {
        return view('layouts.users.editar_direccion', [
            'direccion' => UserDireccion::findOrFail($id)
        ]);
    }
    
    public function edit_direccion(Request $request, $id)
    {
        $direccion = UserDireccion::find($id);
        $direccion->fill($request->all());
        $direccion->save();
	return redirect()->route("user.direcciones");
    }
    
    public function remove_direccion(Request $request, $id)
    {
        $direccion = UserDireccion::find($id);
        $direccion->fill($request->all());
        $direccion->delete();
	return redirect()->route("user.direcciones");
    }
    
    public function pagos()
    {
        // $user_id = Auth::user()->id;
        // $pagos = UserDireccion::all()->where('user_id', $user_id);
	return view("layouts.users.pagos");
    }
    
    public function store_pagos_transferencia(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $configpagos = new ConfigPago($request->all());
        $configpagos_transferencia = new ConfigPagoTransferencia($request->all());
        $configpagos_transferencia->save();
        
        
        return redirect()->route("user.pagos");
    }
    public function store_pagos_contrareembolso(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $configpagos = new ConfigPago($request->all());
        $configpagos_contrareembolso = new ConfigPagoContrareembolso($request->all());
        return redirect()->route("user.pagos");
    }
    public function store_pagos_recogida_en_tienda(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $configpagos = new ConfigPago($request->all());
        $configpagos_recogida = new ConfigPagoRecogidaEnTienda($request->all());
        
        return redirect()->route("user.pagos");
    }
    
}
