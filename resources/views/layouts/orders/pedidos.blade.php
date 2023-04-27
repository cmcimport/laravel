@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pedidos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pedidos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Mis pedidos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#ID</th>
                      <th>Vendedor</th>
                      <th style="width: 40px">Estado</th>
                    </tr>
                  </thead>
                  
                    <tbody>

                        @foreach($reservas as $reserva)
                            @foreach($tiendas as $tienda)
                                @if($tienda->id==$reserva->tienda_id)
                                <tr>
                                    <td>#0{{$reserva->id}}</td>
                                    <td>{{$tienda->nombre_comercial}}</td>
                                    <td><a href="/pedido/{{$reserva->id}}" class="bg-primary btn col-12">{{$reserva->estado}}</a></td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                      <!-- tr>
                        <td>Z999</td>
                        <td>Panadería Julia</td>
                        <td><a href="/pedido" class="bg-danger btn col-12">CANCELADO</a></td>
                      </tr>
                      <tr>
                        <td>AA000</td>
                        <td>Electrónica millar</td>
                        <td><a href="/pedido" class="bg-warning btn col-12">PENDIENTE</a></td>
                      </tr>
                      <tr>
                        <td>AA001</td>
                        <td>Moda Valentina</td>
                        <td><a href="/pedido" class="bg-primary btn col-12">EN PROCESO</a></td>
                      </tr>
                      <tr>
                        <td>AA002</td>
                        <td>Peluquería Canina</td>
                        <td><a href="/pedido" class="bg-success btn col-12">ENVIADO</span></td>
                      </tr>
                      <tr>
                        <td>AA003</td>
                        <td>Reformas paco</td>
                        <td><a href="/pedido" class="bg-gradient-info btn col-12">COMPLETADO</span></td>
                      </tr -->

                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                    <nav aria-label="Contacts Page Navigation">
                        {{ $reservas->links() }}
                    </nav>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

</div>

@endsection