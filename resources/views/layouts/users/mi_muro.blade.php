@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.min.css')}}">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mi muro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mi muro</li>
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
                <h3 class="card-title">Última actividad</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-xl">
                    <i class="fas fa-question"></i>
                  </button>
                  <div class="modal fade" id="modal-xl">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">¿Qué veo en mi muro?</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Lo siento pero ésta opción aun no se encuentra disponible.</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">¡Vale!</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
                
                
                
              <div class="card-body">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Tendeo</a>
                        </span>
                        <span class="description">Mensaje del sistema</span>
                      </div>
                        
                      <!-- /.user-block -->
                      <p><img src="http://laravel.site/images/products/1613691108178.jpg" class="float-left img-thumbnail mr-2" width="150px">
                            Bienvenido a Tendeo.es, en tu muro recibirás todas las notificaciones y comentarios de los usuarios, tiendas y productos favoritos que sigues.<br>
                            Recuerda que nuestra página web se encuentra en pleno desarrollo, participa y conoce más sobre nuestro proyecto. 
                      </p>
                      <div style="clear:both;"></div>
                    </div>
                    <!-- /.post -->
                    
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Tendeo</a>
                        </span>
                        <span class="description">Mensaje del sistema</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                            Bienvenido a Tendeo.es, en tu muro recibirás todas las notificaciones y comentarios de los usuarios, tiendas y productos favoritos que sigues.<br>
                            Recuerda que nuestra página web se encuentra en pleno desarrollo, participa y conoce más sobre nuestro proyecto. 
                      </p>

                    </div>
                    <!-- /.post -->
                   
                  

                  
              <!-- /.tab-content -->
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
  
  <nav class="main-footer navbar fixed fixed-bottom">
    
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @if (Auth::user())
            <li class="nav-item">
                <a href="" class="btn btn-dark" data-toggle="modal" data-target="#modal-xl">Publicar en mi muro</a>
                
            </li>
        @endif
      
    </ul>
  </nav>
  <!-- /.navbar -->
@endsection