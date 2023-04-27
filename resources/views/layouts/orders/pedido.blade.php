@extends('layouts.app')
  
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pedido</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pedido</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info mr-2"></i> Recuerda que:</h5>
              Tendeo.es no es mediador entre las transacciones realizadas ni cobra ninguna comisión por prestar el servicio. Perseguimos y penalizamos todo aquel intento de actividad fraudulenta. <br>
              A continuación puedes ver los detalles de ambas partes, negociar el precio de tu pedido, envío, forma de pago y confirmar la operación cuando estés conforme. 
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe mr-2"></i> {{$pedido->tienda->nombre_comercial}}
                    <small class="float-right">#{{$pedido->id}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Datos del vendedor
                  <address>
                    <strong>{{$pedido->tienda->razon_social}}</strong><br>
                    {{$pedido->tienda->direccion}}<br>
                    {{$pedido->tienda->localidad}}, {{$pedido->tienda->ciudad}}, {{$pedido->tienda->codigo_postal}}<br>
                    Teléfono de contacto: {{$pedido->tienda->telefono}}<br>
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Comprador
                  <address>
                    <strong>{{$pedido->usuario->alias}}</strong><br>
                    Elige tu dirección de cliente
                    
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <!-- Valora -->
                    <strong><i class="fas fa-heartbeat mr-2"></i> Valora esta operación</strong>
                         
                        <p class="text-muted">Las votaciones son anónimas y tienen un gran peso para calcular tu karma tanto de productos como de usuarios en nuestra red.
                         El voto es único aunque puedes cambiar tu decisión en el futuro.</p>
                        <a class="btn btn-app">
                          <i class="far fa-thumbs-up"></i> Bueno
                        </a>
                        <a class="btn btn-app bg-primary">
                          <i class="far fa-meh"></i> Normal
                        </a>
                        <a class="btn btn-app">
                          <i class="far fa-thumbs-down"></i> Malo
                        </a>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      
                      <th>Producto</th>
                      <th>Uds</th>
                      <th>Precio</th>
                      <th>Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $numero = 0; $total = 0; ?>
                    @foreach($elementos as $elemento)
                        @php 
                            $cantidad=$elemento->precio_unidad;
                            $total+=$cantidad;
                        @endphp
                        @foreach($productos as $producto)
                            @if($producto->id == $elemento->producto_id)
                                <tr>
                                    <td>{{$producto->titulo}}</td>
                                    <td>{{$elemento->cantidad}}</td>
                                    <td>{{$elemento->precio_unidad}}€</td>
                                    <td>
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-warning btn-flat">
                                          <i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-flat">
                                          <i class="fas fa-check"></i>
                                        </button>
                                      </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                    
                    <tr>
                      <td></td>
                      <td><b>Total: </b></td>
                      <td><b>{{$total}}€</b></td>
                      <td></td>
                    </tr>
                    
                    </tbody>
                  </table>
                   
                  <table class="table table-striped">
                    <thead>
                    <tr>
                        <th colspan="4">¿Necesitas añadir otros gastos a tu pedido?</th>
                    </tr>
                    </thead>
                    <tbody>  
                    <tr>
                      <td>
                        <div class="form-group">
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Gastos de envío</option>
                            <option>Instalación / Preparación</option>
                            <option>Otros conceptos</option>
                          </select>
                        </div>
                      </td>
                      <td><input class="form-control" type="text" placeholder="Cantidad"></td>
                      <td><input class="form-control" type="text" placeholder="Precio unitario"></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-success btn-flat">
                            <i class="fas fa-check"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <hr>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-12 col-md-6">
                    <h3 class="lead">Como pagar</h3>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Si estás conforme con el importe total de tu pedido, envío, fecha de recogida y/o cualquier otro
                        detalle del mismo haz clic en Aceptar pedido.</p>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Si no estás conforme puedes modificar los detalles de tu pedido para enviar una nueva propuesta
                    </p>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        <b>Cuando ambas partes hayan confirmado y aceptado los detalles 
                        podrás proceder a las distintas formas de pago</b> disponibles.
                    </p>
                    
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Haz clic en Cancelar pedido si no deseas seguir negociando.
                    </p>
                    
                    <div class="row">
                      <div class="col-6">
                        <button type="button" class="btn btn-danger float-right"><i class="far fa-window-close"></i> Cancelar pedido</button>
                      </div>
                      <div class="col-6">
                        <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Estoy conforme</button>
                      </div>
                    </div>
                </div>
                <!-- /.col -->
                
                <!-- empezamos el sistema de mensajería -->
                <div class="col-12 col-md-6">
                  <div class="col-md-12">
                    <!-- COLOR ROJO -->
                    <div class="card card-danger direct-chat direct-chat-danger">
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
                            <img class="direct-chat-img" src="/assets/dist/img/user1-128x128.jpg" alt="Message User Image">
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
                            <img class="direct-chat-img" src="/assets/dist/img/user3-128x128.jpg" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Perfecto allí estaré!
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                        <div class="direct-chat-contacts">
                          <ul class="contacts-list">
                            <li>
                              <a href="#">
                                <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                                <div class="contacts-list-info">
                                  <span class="contacts-list-name">
                                    Reportar
                                    <small class="contacts-list-date float-right">2/28/2015</small>
                                  </span>
                                  <span class="contacts-list-msg">Formulario para reportar estafa</span>
                                </div>
                                <!-- /.contacts-list-info -->
                              </a>
                            </li>
                            <!-- End Contact Item -->
                          </ul>
                          <!-- /.contatcts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
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
                    <!--/.direct-chat -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.fin chat -->
              </div>
              <!-- /.row -->

              <br>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection