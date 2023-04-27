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
            <h1>Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
      <!-- Filtro búsqueda -->
      <div class="container-fluid">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Filtrar usuarios</h3>
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
                  <label>Compradores</label>
                    <a href="#" class="nav-link"> <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success"></a>
                </div>
                <div class="col-6 col-md-2">
                  <label>Sólo en mi ciudad</label>
                  <a href="#" class="nav-link"><input type="checkbox" name="my-checkbox" data-bootstrap-switch data-off-color="primary" data-on-color="success"></a>
                </div>
                <div class="col-12 col-md-4">
                  <label>Intereses</label>
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
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Resultados de búsqueda</h3>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        @foreach($users as $user)
                            @if ($user->type_id === 1 )
                                <div class="col-md-3">
                                    <div class="card card-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        @if ($user->image == '' )
                                        <div class="widget-user-header bg-dark" style="
                                            background-image: url('/images/perfil/no-image.png');
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            background-size: cover;
                                        ">
                                        @else
                                        <div class="widget-user-header bg-dark" style="
                                            background-image: url('/images/perfil/{{$user->image}}');
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            background-size: cover;
                                        ">
                                        @endif   
                                        </div>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-success">
                                              Comprador
                                            </div>
                                          </div>
                                      
                                      <div class="card-footer" style="padding-top: 20px;">
                                          <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <h3 class="widget-user-username">{{$user->alias}}</h3>
                                                  <p class="widget-user-desc">{!! Str::limit($user->sobre_mi, 45) !!}</p>
                                            </a>
                                        <div class="row">
                                            
                                          <div class="col-sm-4 border-right">
                                              <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <div class="description-block">
                                                    <h5 class="description-header">74</h5>
                                                    <span class="description-text">KARMA</span>
                                                  </div>
                                              </a>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-4 border-right">
                                              <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <div class="description-block">
                                                    <h5 class="description-header">17</h5>
                                                    <span class="description-text">SIGUIENDO</span>
                                                  </div>
                                              </a>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-4">
                                              <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <div class="description-block">
                                                    <h5 class="description-header">35</h5>
                                                    <span class="description-text">SEGUIDORES</span>
                                                  </div>
                                              </a>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                      </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                            @endif
                            
                            @if ($user->type_id === 2)
                                <div class="col-md-3">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="card card-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-dark" style="
                                            background-image: url('/images/perfil/{{$user->image}}');
                                            background-position: center;
                                            background-repeat: no-repeat;
                                            background-size: cover;
                                        ">
                                            
                                        </div>
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-primary">
                                              Vendedor
                                            </div>
                                          </div>
                                      
                                      <div class="card-footer" style="padding-top: 20px;">
                                          <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <h3 class="widget-user-username">{{$user->alias}}</h3>
                                                  <p class="widget-user-desc">{!! Str::limit($user->sobre_mi, 45) !!}</p>
                                            </a>
                                        <div class="row">
                                            
                                          <div class="col-sm-4 border-right">
                                              <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <div class="description-block">
                                                    <h5 class="description-header">74</h5>
                                                    <span class="description-text">KARMA</span>
                                                  </div>
                                              </a>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-4 border-right">
                                              <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <div class="description-block">
                                                    <h5 class="description-header">17</h5>
                                                    <span class="description-text">SIGUIENDO</span>
                                                  </div>
                                              </a>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                          <div class="col-sm-4">
                                              <a href="/perfil/{{ $user->id }}" style="color:grey;">
                                                  <div class="description-block">
                                                    <h5 class="description-header">35</h5>
                                                    <span class="description-text">SEGUIDORES</span>
                                                  </div>
                                              </a>
                                            <!-- /.description-block -->
                                          </div>
                                          <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                      </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                            @endif
                        @endforeach
                        

                        

                        

                    </div><!-- /.card row -->
                </div><!-- /.card body -->
            </div><!-- /.card dark -->
        </div><!-- /.container-fluid --> 
    </section>
</div>
@endsection