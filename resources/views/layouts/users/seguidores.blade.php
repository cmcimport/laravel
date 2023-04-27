@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seguidores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Seguidores</li>
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
                <div class=" card card-outline card-primary">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#siguiendo" data-toggle="tab">Siguiendo</a></li>
                      <li class="nav-item"><a class="nav-link" href="#seguidores" data-toggle="tab">Seguidores</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div style="padding-top: 15px;">
                    <div class="tab-content">
                        <div class="active tab-pane" id="siguiendo">
                            @foreach($seguidores as $seguidor)
                                @foreach($usuarios as $usuario)
                                    @if($usuario->id == $seguidor->user_seguido)
                                    <!-- usuario box inicio -->
                                    <div class="col-md-4 float-left">
                                      <div class="info-box">
                                        <span class="info-box-icon ">
                                            <img src="/images/perfil/{{$usuario->image}}">
                                        </span>
                                        <div class="info-box-content">
                                          <span class="info-box-text">{!! Str::limit($usuario->sobre_mi, 30) !!}</span>
                                          <span class="info-box-number">{{$usuario->alias}}</span>
                                        </div>
                                        <a href="{{route('user.remove.seguidor', $usuario->id)}}" title="Dejar de seguir" class="info-box-icon">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <a href="/perfil/{{$usuario->id}}" title="Ver Perfil" class="info-box-icon">
                                            <i class="fas fa-link"></i>
                                        </a>
                                        <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </div>
                                    <!-- /.usuario box fin -->
                                    @endif
                              @endforeach
                            @endforeach
                      </div>
                      <!-- /.tab-pane -->


                      <div class="tab-pane" id="seguidores">
                            @if($mesigue == '')
                            No tienes seguidores
                            @endif
                              @foreach($mesigue as $seguidor)
                                @foreach($usuarios as $usuario)
                                    @if($usuario->id == $seguidor->user_sigue)
                                    <!-- usuario box inicio -->
                                    <div class="col-md-4 float-left">
                                      <div class="info-box">
                                        <span class="info-box-icon ">
                                            <img src="/images/perfil/{{$usuario->image}}">
                                        </span>
                                        <div class="info-box-content">
                                          <span class="info-box-text">{!! Str::limit($usuario->sobre_mi, 30) !!}</span>
                                          <span class="info-box-number">{{$usuario->alias}}</span>
                                        </div>
                                        <a href="/perfil/{{$usuario->id}}" title="Ver Perfil" class="info-box-icon">
                                            <i class="fas fa-link"></i>
                                        </a>
                                        <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </div>
                                    <!-- /.usuario box fin -->
                                    @endif
                              @endforeach
                            @endforeach


                      </div>
                      <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
        
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection