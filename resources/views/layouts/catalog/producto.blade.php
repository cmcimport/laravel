@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$product->titulo}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{$product->titulo}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                
                <div class="col-12 col-sm-12 col-md-6 mb-4">
                    <div class="col-12">
                      @php($existe=false)
                      @foreach($imagenes as $imagen)
                          @if($imagen->producto_id == $product->id AND !$existe)
                              @php($existe=true)
                              <img src="/{{$imagen->image_url}}" class="product-image">

                          @endif
                      @endforeach
                    </div>
                    <div class="col-12 product-image-thumbs">
                          @foreach($imagenes as $imagen)
                              <div class="product-image-thumb" ><img src="/{{$imagen->image_url}}" alt="Product Image"></div>
                          @endforeach
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <!-- Detalle del producto -->
                    <div class="card card-primary card-outline col-md-12 col-12">
                        <div class="card-header">
                          <h3 class="card-title">{{$product->titulo}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          {!! $product->descripcion !!}                
                        <!-- /.card-body -->
                        </div>
                    </div>
                    @foreach ($config_product as $config)
                        @if($config->mostrar_precio == 1)
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="fa fa-money-bill"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">¡Añade al carrito y empieza a negociar!</span>
                                    <span class="info-box-number">Este producto tiene el precio oculto</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                        @else
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="fa fa-money-bill"></i></span>

                                  <div class="info-box-content">
                                      <h2>Precio: {{$product->precio}}€</h2>
                                    <span class="info-box-text">¡Añade al carrito y descubre Tendeo!</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                        @endif
                    @endforeach
                    <div class="card py-2 px-3">
                        

                        <div class="mt-2">
                            <form role="form" method="POST" action="{{route('order.store.cesta', $product->id)}}" enctype="multipart/form-data">
                            @csrf

                                <button type="submit" class="btn btn-yellow btn btn-warning btn-lg float-left m-2"><i class="fas fa-cart-plus fa-lg mr-2"></i> Añadir al carrito</button>
                            </form>
                            
                            @if($agregado==1)
                                <form role="form" method="POST" action="{{route('user.remove.product.favorito', $product->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-danger right rightButton float-left btn-lg m-2"><i class="far fa-bookmark fa-lg mr-2"></i> Quitar de favoritos</button>
                                </form>
                            @else
                                    <form role="form" method="POST" action="{{route('user.store.product.favorito', $product->id)}}" enctype="multipart/form-data">
                                        @csrf

                                            <button type="submit" class="btn btn-success right rightButton float-left btn-lg m-2"><i class="far fa-bookmark fa-lg mr-2"></i> Añadir a favoritos</button>
                                    </form>
                            @endif

                        </div>
                  </div>
                    
                        <!-- Valora -->
                       <div class="card card-primary">
                         <div class="card-header">
                           <h3 class="card-title">Valora este producto</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body text-center">
                             
                            <div class="col-md-12">
                                <p class="text-muted">Las votaciones tienen un gran peso para calcular la reputación tanto de compradores como de vendedores entre otros factores 
                                como el número de compras o ventas realizadas. Puedes revisar la reputación de cualquier usuario y producto y votarlo una sola vez.</p>
                                <a class="btn btn-app">
                                  <i class="far fa-thumbs-up"></i> Me gusta
                                </a>
                                <a class="btn btn-app bg-primary">
                                  <i class="far fa-meh"></i> Normal
                                </a>
                                <a class="btn btn-app">
                                  <i class="far fa-thumbs-down"></i> No me gusta
                                </a>
                            </div>
                            <div class="card-footer">
                                <a href="/producto/{{$product->id}}" class="btn btn-sm bg-danger mr-2">
                                    <i class="fas fa-heartbeat mr-1"></i> Karma del producto: 1.481
                                </a>
                            </div>
                         </div>
                         <!-- /.card-body -->
                       </div>
                       <!-- /.card -->
                      
                </div>
                
                
                <div class="card card-dark">
                         <div class="card-header">
                           <h3 class="card-title">Información del producto o servicio</h3>
                         </div>
                    <div class='card-body row'>
                    @foreach ($config_product as $config)
                        
                        @if($config->precio_negociable == 0)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="far fa-flag"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Precio</span>
                                    <span class="info-box-number">No negociable</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        @else
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Precio</span>
                                    <span class="info-box-number">Precio negociable o variable</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        @endif
                        @if($config->requiere_envio == 0)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="fas fa-shipping-fast"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Envío</span>
                                    <span class="info-box-number">No puede enviarse</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        @else
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-success"><i class="fas fa-shipping-fast"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Envío</span>
                                    <span class="info-box-number">Puede enviarse</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        @endif
                        @if($config->recogida == 0)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="fas fa-search-location"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Recogida en tienda</span>
                                    <span class="info-box-number">No se puede recoger en tienda</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        @else
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-success"><i class="fas fa-search-location"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Recogida en tienda</span>
                                    <span class="info-box-number">Se puede recoger en tienda</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        @endif
                        @if($config->venta_al_por_mayor == 0)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="fas fa-cash-register"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Venta al por mayor</span>
                                    <span class="info-box-number">Sin descuento en grandes cantidades</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                            
                        @else
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-success"><i class="fas fa-cash-register"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Venta al por mayor</span>
                                    <span class="info-box-number">Descuento para grandes cantidades</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                        @endif
                        @if($config->requiere_instalacion == 0)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="fas fa-tools"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Instalación</span>
                                    <span class="info-box-number">No se puede contratar instalación</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                            
                        @else
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-success"><i class="fas fa-tools"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Instalación</span>
                                    <span class="info-box-number">Se puede contratar instalación</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                        @endif
                        @if($config->requiere_cita_previa == 0)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-secondary"><i class="far fa-clock"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Cita previa</span>
                                    <span class="info-box-number">No requiere cita previa</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                            
                        @else
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-success"><i class="far fa-clock"></i></span>

                                  <div class="info-box-content">
                                    <span class="info-box-text">Cita previa</span>
                                    <span class="info-box-number">Si requiere cita previa</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                        @endif
                    @endforeach
            </div>
          </div>
            
            <!-- info vendedor -->
                <div class="col-md-6 col-6">
                    
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h3 class="card-title"><i class="fas fa-bullhorn"></i> Sobre el vendedor</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p class="text-muted float-left p-1"><b>Nombre:</b> {{$product->tienda->nombre_comercial}}</p>
                            <p class="text-muted float-left p-1"><b>Razón social:</b> {{$product->tienda->razon_social}}</p>
                            <p class="text-muted float-left p-1"><b>Dirección:</b> {{$product->tienda->direccion}}</p>
                            <p class="text-muted float-left p-1"><b>Localidad:</b> {{$product->tienda->localidad}}, ({{$product->tienda->ciudad}})</p>
                            <p class="text-muted float-left p-1"><b>Código postal:</b> {{$product->tienda->codigo_postal}}</p>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/perfil/{{$product->tienda->usuario_id}}" class="btn btn-primary" target="_blank">Ver perfil del vendedor</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- comentarios  -->
                <!-- empezamos el sistema de mensajería -->
                    <div class="card card-primary card-outline col-md-6 col-6">
                      <div class="card-header">
                        <h3 class="card-title">¡Envía un mensaje al vendedor!</h3>

                        <div class="card-tools">
                          <span title="Nuevos mensajes" class="badge">3</span>
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fas fa-comments"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages">
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Nombre vendedor</span>
                              <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              ¿Quiéres pasar a recogerlo el jueves a las 10?
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Nombre comprador</span>
                              <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="{{asset('assets/dist/img/user3-128x128.jpg')}}" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Perfecto allí estaré!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                        </div>
                        <!--/.direct-chat-messages-->

                        
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Escribe tu mensaje ..." class="form-control">
                            <span class="input-group-append">
                              <button type="submit" class="btn btn-danger">Enviar</button>
                            </span>
                          </div>
                        </form>
                      </div>
                      <!-- /.card-footer-->
                    </div>
                <!-- /.fin chat -->
                <!-- fin comentarios e info vendedor -->
            
            
            
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection