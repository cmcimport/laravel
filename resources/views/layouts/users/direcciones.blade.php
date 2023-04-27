@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis direcciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mis direcciones</li>
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
                <h3 class="card-title">Mis direcciones</h3>

                <div class="card-tools">
                   <a href="/crear_direccion" type="button" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Añadir direccion
                  </a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
                
                    
                <div style="padding-top: 15px;">
                    @foreach($direcciones as $direccion)
                        <!-- producto box inicio -->
                        <div class="col-md-6  col-lg-4 float-left">
                            <div class="info-box">
                                <div class="info-box-content">
                                  <h4>{{$direccion->amigable}}</h4>
                                  {{$direccion->apellido_recibe}}, {{$direccion->nombre_recibe}}<br>
                                  {{$direccion->calle_avenida}}, {{$direccion->numero}}<br>
                                  {{$direccion->codigo_postal}}, {{$direccion->localidad}}<br>
                                  Teléfono: {{$direccion->telefono}}
                                </div>
                                <a href="{{route('remove.direccion', $direccion->id)}}" title="Borrar direccion" class="info-box-icon">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                <a href="{{route('editar.direccion', $direccion->id)}}" title="Editar direccion" class="info-box-icon">
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