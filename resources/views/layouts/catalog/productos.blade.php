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
                    <h1>Productos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <!-- Filtro búsqueda -->
        <div class="container-fluid">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Filtrar productos</h3>
                </div>
                <div class="card-body">
                  <div class="row text-center">
                    <div class="col-6 col-md-2">
                      <label>Minoristas</label>
                      <a href="#" class="nav-link"><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success"></a>
                    </div>
                    <div class="col-6 col-md-2">
                      <label>Mayoristas</label>
                        <a href="#" class="nav-link"><input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success"></a>
                    </div>
                    <div class="col-6 col-md-2">
                      <label>Sólo en mi ciudad</label>
                      <a href="#" class="nav-link"><input type="checkbox" name="my-checkbox" data-bootstrap-switch data-off-color="primary" data-on-color="success"></a>
                    </div>
                    <div class="col-12 col-md-6">
                      <label>Categorías</label>
                        <select class="select2" multiple="multiple" data-placeholder="Todas las categorías" style="width: 100%;">
                          <option>Todas</option>
                          <option>Electrónica</option>
                          <option>Moda</option>
                          <option>Alimentación</option>
                          <option>Teléfonos móviles</option>
                          <option>Impresoras</option>
                          <option>Informática</option>
                        </select>
                    </div>
                  </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- /. Filtro búsqueda -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Resultados de búsqueda</h3>
                </div>     
                <!-- Main content -->
                <section class="content">
                  <!-- Default box -->
                    <div class="card-body">
                        <div class="row d-flex align-items-stretch">
                            @foreach($products as $product)
                            <a href="/producto/{{$product->id}}" style="display:block;">
                                <div class="col-lg-3 col-sm-4 col-md-4">
                                    <div class="card bg-light">
                                        <div class="ribbon-wrapper ribbon-xl">
                                            <div class="ribbon bg-dark">
                                              {{$product->tienda->nombre_comercial}}
                                            </div>
                                          </div>
                                        @php($existe=false)
                                        <div style="max-height: 400px; overflow: hidden;">
                                        @foreach($imagenes as $imagen)
                                            @if($imagen->producto_id == $product->id AND !$existe)
                                                @php($existe=true)
                                                <img src="{{$imagen->image_url}}" width="100%">
                                            
                                            @endif
                                        @endforeach
                                        @if(!$existe)
                                            <img src="/images/perfil/no-image.png" width="100%">
                                        @endif
                                        </div>
                                        <div class="card-body col-12">
                                          <div class="row">
                                           
                                            <div class="col-12">
                                              <h2 class="lead"><a href="/producto/{{$product->id}}">{{$product->titulo}}</a></h2>
                                              <p class="text-muted ">{!! Str::limit($product->descripcion, 160) !!}</p>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-footer">
                                          <div class="text-right">
                                            <a href="/producto/{{$product->id}}" class="btn btn-sm bg-danger mr-2">
                                                <i class="fas fa-heartbeat mr-1"></i> Karma: {{$product->precio}}
                                            </a>
                                            <a href="/producto/{{$product->id}}" class="btn btn-sm bg-primary">
                                              <i class="fas fa-eye"></i>
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                               </div>
                               </a>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- /.content -->

                <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                    {{ $products->links() }}
                    </nav>
                </div>
                <!-- /.card-footer -->
                
            </div><!-- /.card dark -->
            
        </div><!-- /.container-fluid --> 
        
    </section>
</div>
@endsection