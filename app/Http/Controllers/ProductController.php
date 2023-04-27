<?php

namespace App\Http\Controllers;

// cargamos el modelo
use App\Product;
use App\ConfigProduct;
use App\Tienda;
use App\User;
use App\Favorito;
use App\ImagenProduct;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() {}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datos['product']= \App\Product::paginate(5);
        try{
            
            $producto = Product::orderBy('id', 'desc')->paginate(8);
            $imagenes = ImagenProduct::all();
            // dd($imagenes);
            return view('layouts.catalog.productos', ['products' => $producto, 'imagenes'=>$imagenes]);
            
        }catch(\Exception $e){
            return view("layouts.catalog.productos");
        } 
        return view("layouts.catalog.productos");
    }
    
    
    
    public function producto($id)
    {
	// return view("layouts.catalog.producto");
        
        if(!Auth::user()){
            return redirect()->route("home");
        }else{
            $user_id = Auth::user()->id;
            $agregado = Favorito::all()->where('user_id', '=', $user_id)->where('product_id', '=', $id)->count();
            $imagenes = ImagenProduct::all()->where('producto_id', $id);
            $config_product = ConfigProduct::all()->where('producto_id', $id);
            return view('layouts.catalog.producto', [
                'product' => Product::findOrFail($id),
                'agregado' => $agregado,
                'imagenes' => $imagenes,
                'config_product' => $config_product
            ]);
        }
    }
    
    public function mis_productos()
    {
        $user_id = Auth::user()->id;
        $tienda = Tienda::all()->where('usuario_id', $user_id);
        $productos = Product::all()->where('tienda_id', $tienda->first()->id);
        $fotos = ImagenProduct::all();
	return view("layouts.catalog.mis_productos", 
                [
                    'products' => $productos,
                    'fotos' => $fotos
                ]);
        
        
    }
    
    public function crear_producto()
    {
        
	return view("layouts.catalog.crear_producto");
    }
    
    public function store_producto(Request $request)
    {
        $user_id = Auth::user()->id;
        $tienda = Tienda::all()->where('usuario_id', $user_id);
        
        $producto = new Product($request->all());
        
        $producto->aprobado=false;
        $producto->tienda_id=$tienda->first()->id;
   
        $producto->save();
        $file = $request->file('imagen');
        
        for($i=0; $i<count($file); $i++){
            $filename = time().rand(100, 200).'.'.$file[$i]->extension();
            $file[$i]->move(public_path('images/products'), $filename);
            $img_producto = new ImagenProduct();
            $img_producto->image_url= 'images/products/'.$filename;
            $img_producto->producto_id= $producto->id;
            $img_producto->save();
        }
        
        $config_producto = new ConfigProduct($request->all());
        $config_producto->producto_id=$producto->id;
        $config_producto->save();
        
	return redirect()->route("mis.productos");
    }
    
    public function editar_producto($id)
    {
        // REVISAR QUE NO PUEDA HACERLO OTRO ID DE 
        return view('layouts.catalog.editar_producto', [
            'product' => Product::findOrFail($id),
            'config_product' => ConfigProduct::find($id),
        ]);
    }
    
    public function edit_product(Request $request, $id)
    {
        $producto = Product::find($id);
        $producto->fill($request->all());
        $producto->save();
        /*
        $imagen_product = ImagenProduct::find($id);
        $imagen_product->fill($request->all());
        $imagen_product->save();
        */
        $config_product = ConfigProduct::find($id);
        $config_product->fill($request->all());
        $config_product->save();
        
	return redirect()->route("mis.productos");
    }
    
    public function remove_product(Request $request, $id)
    {
        $producto = Product::find($id);
        $producto->fill($request->all());
        $producto->delete();
	return redirect()->route("mis.productos");
    }
    
}
