@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis ventas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mis ventas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                                    <th>Cliente</th>
                                    <th style="width: 40px">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservas as $reserva)
                                    @foreach($compradores as $comprador)
                                        @if($comprador->id==$reserva->usuario_id)
                                        <tr>
                                            <td>#0{{$reserva->id}}</td>
                                            <td>{{$comprador->alias}}</td>
                                            <td><a href="/venta/{{$reserva->id}}" class="bg-primary btn col-12">{{$reserva->estado}}</a></td>
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
                      <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                      </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection