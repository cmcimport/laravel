@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/min/dropzone.min.css')}}">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Añadir direccion</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Añadir direccion</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Nueva direccion</h3>
                    
                </div>    
                
                <form role="form" method="POST" action="{{route('user.store.direccion')}}" enctype="multipart/form-data">
                @csrf
                    <!-- Main content -->
                    <section class="content">
                      <!-- Default box -->
                        <div class="card-body pb-0">
                            <div class="row">
                                <!-- .BLOQUE 1 -->
                                <div class="col-12 col-md-4">
                                    <div class="card-body">
                                        <div class="form-group">
                                          <label for="nombre">Identifica esta dirección</label>
                                          <input type="text" class="form-control" id="amigable" name="amigable" placeholder="Nombre amigable, ej. casa, trabajo...">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input type="text" class="form-control" id="nombre_recibe" name="nombre_recibe" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Apellidos</label>
                                          <input type="text" class="form-control" id="apellido_recibe" name="apellido_recibe" placeholder="Apellidos">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- .FIN BLOQUE 1 -->
                                
                                <!-- .BLOQUE 1 -->
                                <div class="col-12 col-md-4">
                                    <div class="card-body">
                                        <div class="form-group">
                                          <label for="nombre">Dirección</label>
                                          <input type="text" class="form-control" id="calle_avenida" name="calle_avenida" placeholder="Dirección de la calle o avenida">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Número</label>
                                          <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero, bloque, planta...">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Teléfono</label>
                                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono de contacto">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- .FIN BLOQUE 1 -->
                                
                                <!-- .BLOQUE 1 -->
                                <div class="col-12 col-md-4">
                                    <div class="card-body">
                                        <div class="form-group">
                                          <label for="nombre">Localidad</label>
                                          <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Localidad">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Código postal</label>
                                          <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">DNI o CIF</label>
                                          <input type="text" class="form-control" id="dni_cif" name="dni_cif" placeholder="DNI o CIF para tus facturas">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- .FIN BLOQUE 1 -->
                            </div>
                        </div>

                    </section>
                    <!-- /.content -->

                    <div class="card-footer">
                            <button type="submit" class="btn btn-primary right rightButton float-right">Añadir</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div><!-- /.card dark -->
            
        </div><!-- /.container-fluid --> 
        
    </section>
</div>
@endsection