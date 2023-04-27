@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Favoritos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Favoritos</li>
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
                <h3 class="card-title">Productos favoritos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="modal">
                    <i class="fas fa-question"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
                
                
                
              <div style="padding-top: 15px;">
                    @foreach($favoritos as $favorito)
                        <!-- usuario box inicio -->
                        <div class="col-md-4 float-left">
                            <div class="info-box">
                                <span class="info-box-icon ">
                                    @php($existe=false)
                                    @foreach($fotos as $foto)
                                        @if($foto->producto_id == $favorito->product->id AND !$existe)
                                            @php($existe=true)
                                            <img src="{{$foto->image_url}}" height="100%">
                                        @endif
                                    @endforeach
                                    @if(!$existe)
                                        <img src="https://harinas.monisa.com/wp-content/uploads/2018/10/Pan-Simple.jpg">
                                    @endif
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">{{$favorito->product->titulo}}</span>
                                    <span class="info-box-number">Precio: {{$favorito->product->precio}}€</span>
                                    {{$favorito->product->tienda->nombre_comercial}}
                                </div>
                                    <a href="#" title="Desactivar notificaciones" class="info-box-icon">
                                    <i class="far fa-bell-slash"></i>
                                </a>
                                <a href="/producto/{{$favorito->product->id}}" title="Ver producto" class="info-box-icon">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="{{route('user.remove.favorito', $favorito->product->id)}}" title="Quitar de favoritos" class="info-box-icon">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.usuario box fin -->
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