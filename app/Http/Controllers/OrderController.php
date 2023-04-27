<?php

namespace App\Http\Controllers;

// cargamos el modelo
use App\Product;
use App\Tienda;
use App\User;
use App\Cesta;
use App\Reserva;
use App\ProductoReserva;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    
    public function cesta()
    {
    
	$user_id = Auth::user()->id;
        $cesta = Cesta::all()->where('usuario_id', $user_id);
        $producto = Product::all();
	return view("layouts.orders.cesta", ['cestas' => $cesta, 'productos' => $producto]);
    }
    
    public function store_cesta(Request $request, $id)
    {
        //
        $user_id = Auth::user()->id;
        $agrega = new Cesta($request->all());
        $existe = Cesta::where('usuario_id',$user_id)->where('producto_id',$id)->get();
        if($existe->count()==0){
            $agrega->usuario_id=$user_id;
            $agrega->producto_id=$id;
            $agrega->cantidad=1;
            $agrega->save();
        }
        return redirect()->route("order.cesta");
    }
    
    public function delete_cesta()
    {
	return view("layouts.orders.cesta");
    }
    
    public function pedido($id)
    {
        $elemento = ProductoReserva::where('reserva_id', $id)->get();
        $productos = Product::all();
        // dd($productos);
        return view('layouts.orders.pedido', [
            'pedido' => Reserva::findOrFail($id),
            'elementos' => $elemento,
            'productos' => $productos
            ]);
    }
    
    public function pedidos()
    {
        $user_id = Auth::user()->id;
        // $reserva = Reserva::where('usuario_id', $user_id);
        $reserva = Reserva::orderBy('id','desc')->where('usuario_id', $user_id)->paginate(10);
        // $producto = Product::orderBy('id', 'desc')->paginate(8);
        $tienda = Tienda::all();
	// return view("layouts.orders.pedidos", ['reservas' => $reserva, 'tiendas' => $tienda]);
        return view("layouts.orders.pedidos", ['reservas'=>$reserva, 'tiendas' => $tienda]);
    }
    
    public function crear_pedido(Request $request)
    {
        
        //Obteniendo datos del Request
        $user_id = Auth::user()->id;
        $tiendas = $request->tienda;
        $precios = $request->precio;
        $tienda_original = $request->tienda;
        $productos = $request->id;
        $cesta = $request->cesta_id;
        // dd($tiendas);
        // Se ordenan tiendas de forma ascendente
        sort($tiendas);
        $indice = 0;
        
        // contamos las tiendas y separamos por tiendas
        for ($i =0; $i<count($tiendas); $i++ ){
            // se verifica que la tienda no haya sido procesada anteriormente
            if($indice!=$tiendas[$i]){
                // Se crea la reserva
               $reserva = new Reserva();

               $reserva->estado = 'PENDIENTE';
               // $reserva->cesta_id = $cesta;
               $reserva->acepta_user = false;
               $reserva->acepta_seller =false;
               $reserva->fecha_confirmacion = null;
               $reserva->usuario_id = $user_id;
               $reserva->tienda_id = $tiendas[$i];
               $reserva->save();
               
               // Se recorren todos los productos para la tienda asociada (el array $tienda_original son las tiendas sin ordenar)
               for($j=0; $j<count($productos); $j++){
                   // Se verifica que el producto pertenezca a la tienda que se está procesando
                   if($tienda_original[$j]==$tiendas[$i]){
                        // Creamos el producto
                        $producto_reserva = new ProductoReserva(); 
                        // Falta añadir cantidad en la vista
                        $producto_reserva->cantidad=1;
                        $producto_reserva->precio_unidad=$precios[$j];
                        $producto_reserva->reserva_id=$reserva->id;
                        $producto_reserva->producto_id=$productos[$j];
                        $producto_reserva->save();
                   }
               }
               // Seteamos/guardamos en el índice el valor ID de la tienda procesado
               $indice = $tiendas[$i];
            }
        }
        // identificamos el usuario de la cesta
        $cesta_modelo = Cesta::where('usuario_id',$user_id)->get();
        foreach ($cesta_modelo as $modelo){
            $modelo->delete();
            
        }
	return redirect()->route("order.pedidos");
    }
    
    public function ventas()
    {
        
        $user_id = Auth::user()->id;
        $tienda = Tienda::all()->where('usuario_id', $user_id);
        $tienda_id = $tienda->first()->id;
        $reserva = Reserva::all()->where('tienda_id', $tienda_id);
        // dd($reserva);
        $comprador = User::all();
	// return view("layouts.orders.pedidos", ['reservas' => $reserva, 'tiendas' => $tienda]);
        return view("layouts.orders.ventas", ['reservas'=>$reserva, 'compradores' => $comprador]);
        
    }
    public function venta($id)
    {
        $elemento = ProductoReserva::where('reserva_id', $id)->get();
        $productos = Product::all();
        // dd($productos);
        return view('layouts.orders.pedido', [
            'pedido' => Reserva::findOrFail($id),
            'elementos' => $elemento,
            'productos' => $productos
            ]);
    }
    
}
