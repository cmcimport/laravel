@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mi cesta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mi cesta</li>
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
                <h3 class="card-title">Cesta de la compra</h3>
              </div>
              <!-- /.card-header -->
                <form role="form" method="POST" action="{{route('crear.pedido')}}" enctype="multipart/form-data">
                @csrf    
                
                    <div class="card-body" class="pt-4">
                        @foreach($cestas as $cesta)
                            @foreach($productos as $producto)
                                @if($producto->id == $cesta->producto_id)
                                <!-- producto box inicio -->
                                <div class="col-md-6 col-lg-4 float-left">
                                    <div class="info-box">
                                        <div class="form-group mr-2">
                                            <label for="titulo">Producto</label>
                                            <input type="text" disabled="" class="form-control" id="titulo" name="titulo[]" value="{{$producto->titulo}}">
                                            <input type="hidden" class="form-control" id="id" name="id[]" value="{{$producto->id}}">
                                            <input type="hidden" class="form-control" id="precio" name="precio[]" value="{{$producto->precio}}">
                                            <input type="hidden" class="form-control" id="tienda" name="tienda[]" value="{{$producto->tienda_id}}">
                                        </div>    
                                        <div class="form-group">
                                            <label>Tienda</label>
                                            <input type="text" disabled="" class="form-control" id="tienda" name="" value="{{$producto->tienda->nombre_comercial}}">
                                        </div>
                                        <a href="#" title="Borrar direccion" class="info-box-icon">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <input type="hidden" class="form-control" id="cesta_id" name="cesta_id" value="{{$cesta->id}}">
                                <!-- /.producto box fin -->
                                @endif
                            @endforeach
                        @endforeach
                    </div><!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <input type="submit" class="btn btn-primary" value="Continuar">
                        </ul>
                    </div>
                </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection