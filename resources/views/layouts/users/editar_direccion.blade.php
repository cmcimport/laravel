@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar direccion</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar direccion</li>
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
                    <h3 class="card-title">Editar direccion</h3>
                    
                </div>    
                
                <form role="form" method="POST" action="{{route('edit.direccion', $direccion->id)}}" enctype="multipart/form-data">
                @csrf
                
                </h4>
                                 
                    <!-- Main content -->
                    <section class="content">
                      <!-- Default box -->
                        <div class="card-body pb-0">
                            <div class="row">
                                <!-- .BLOQUE 1 -->
                                <div class="col-12 col-md-6">
                                    <div class="card-body">
                                        <div class="form-group">
                                          <label for="nombre">Identifica esta dirección</label>
                                          <input type="text" class="form-control" id="amigable" name="amigable" value="{{$direccion->amigable}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Nombre</label>
                                          <input type="text" class="form-control" id="nombre_recibe" name="nombre_recibe" value="{{$direccion->nombre_recibe}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Apellidos</label>
                                          <input type="text" class="form-control" id="apellido_recibe" name="apellido_recibe" value="{{$direccion->apellido_recibe}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Dirección</label>
                                          <input type="text" class="form-control" id="calle_avenida" name="calle_avenida" value="{{$direccion->calle_avenida}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Número</label>
                                          <input type="text" class="form-control" id="numero" name="numero" value="{{$direccion->numero}}">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- .FIN BLOQUE 1 -->
                                
                                <!-- .BLOQUE 1 -->
                                <div class="col-12 col-md-6">
                                    <div class="card-body">
                                        <div class="form-group">
                                          <label for="nombre">Teléfono</label>
                                          <input type="text" class="form-control" id="telefono" name="telefono" value="{{$direccion->telefono}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Localidad</label>
                                          <input type="text" class="form-control" id="localidad" name="localidad" value="{{$direccion->localidad}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Código postal</label>
                                          <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="{{$direccion->codigo_postal}}">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">DNI o CIF</label>
                                          <input type="text" class="form-control" id="dni_cif" name="dni_cif" value="{{$direccion->dni_cif}}">
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
                            <button type="submit" class="btn btn-primary right rightButton float-right">Actualizar</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div><!-- /.card dark -->
            
        </div><!-- /.container-fluid --> 
        
    </section>
</div>
@endsection