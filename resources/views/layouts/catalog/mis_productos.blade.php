@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mis productos</li>
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
                <h3 class="card-title">Mis productos</h3>

                <div class="card-tools">
                   <a href="/crear_producto" type="button" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Añadir producto
                  </a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
                
                    
                <div style="padding-top: 15px;">
                    @foreach($products as $product)
                        
                        <!-- producto box inicio -->
                        <div class="col-md-6  col-lg-4 float-left">
                            <div class="info-box">
                                <span class="info-box-icon ">
                                    @php($existe=false)
                                    @foreach($fotos as $foto)
                                        @if($foto->producto_id == $product->id AND !$existe)
                                            @php($existe=true)
                                            <img src="{{$foto->image_url}}" height="100%">
                                        @endif
                                    @endforeach
                                    @if(!$existe)
                                        <img src="https://harinas.monisa.com/wp-content/uploads/2018/10/Pan-Simple.jpg" height="100%">
                                    @endif
                                </span>
                                <div class="info-box-content" style="line-height: 16px;">
                                    <h5><b>{{$product->titulo}}</b></h5>
                                    <h6>{{$product->precio}}€</h6>
                                </div>
                                <a href="{{route('remove.product', $product->id)}}" title="Borrar producto" class="info-box-icon">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                <a href="/editar_producto/{{$product->id}}" title="Editar producto" class="info-box-icon">
                                    <i class="far fa-edit"></i>
                                </a>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.producto box fin -->
                        
                    @endforeach

                </div><!-- /.card-body -->
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