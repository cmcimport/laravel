@extends('layouts.app')
  
  
@section('content')

<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Configuración</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Configuración</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                        <div class="text-center">
                            @if(Auth::user()->image == '')
                                <img class="profile-user-img img-fluid img-circle" src="{{asset('images/perfil/no-image.png')}}" alt="{{Auth::user()->alias}}">
                            @else
                                <img class="profile-user-img img-fluid img-thumbnail" src="images/perfil/{{Auth::user()->image}}" alt="{{Auth::user()->alias}}">
                            @endif
                        </div>

                        <h3 class="profile-username text-center">{{Auth::user()->alias}}</h3>

                        <p class="text-muted text-center">{{Auth::user()->sobre_mi}}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Seguidores</b> <a class="float-right">8</a>
                            </li>
                            <li class="list-group-item">
                              <b>Siguiendo</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                              <b>Favoritos</b> <a class="float-right">7</a>
                            </li>
                            <li class="list-group-item">
                              <b>Reputación</b> <a class="float-right">0</a>
                            </li>
                        </ul>


                        <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#modal-xl">
                          Mi muro
                        </button>
                        <div class="modal fade" id="modal-xl">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Publica en tu muro</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Envía publicaciones a tu muro, todos tus seguidores podrán leerlas.</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar sin guardar</button>
                                  <button type="button" class="btn btn-primary">Publicar</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Información personal</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>
                            <p class="text-muted">{{Auth::user()->ciudad}}, {{Auth::user()->pais}}</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Intereses</strong>
                            <p class="text-muted">
                              <span class="tag tag-danger">Alimentación</span>
                              <span class="tag tag-success">Electrónica</span>
                              <span class="tag tag-info">Mobiliario</span>
                              <span class="tag tag-warning">Teléfonos móviles</span>
                              <span class="tag tag-primary">Impresoras</span>
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                
                <!-- AJUSTES -->
                <div class="col-md-9">
                    <!-- CONFIGURACION USUARIO -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Configuración de usuario</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="POST" action="{{route('perfil.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="alias" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alias" name="alias" placeholder="{{Auth::user()->alias}}" value="{{Auth::user()->alias}}">
                                        <p>Este es el alias único con el que el resto de usuarios te verán en nuestra red.</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sobre_mi" class="col-sm-2 col-form-label">Sobre ti</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="sobre_mi" name="sobre_mi" placeholder="{{Auth::user()->sobre_mi}}" value="{{Auth::user()->sobre_mi}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pais" class="col-sm-2 col-form-label">País</label>
                                    <div class="col-sm-10">
                                        <select class="select2" data-placeholder="Elige tu país" name="pais" style="width: 100%;">
                                            <option>Sin definir</option>
                                            <option>España</option>
                                            <option>Portugal</option>
                                        </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
                                    <div class="col-sm-10">
                                        <select class="select2" data-placeholder="Elige tu ciudad" name="ciudad" style="width: 100%;">
                                            <option value="Sin definir">Sin definir</option>
                                            <option value="Alicante">Alicante</option>
                                            <option value="Ciudad Real">Ciudad Real</option>
                                            <option value="Madrid">Madrid</option>
                                        </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputAvatar" class="col-sm-2 col-form-label">Imagen de perfil</label>
                                  <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" name="image" placeholder="Subir imagen de perfil">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputEmail" placeholder="{{Auth::user()->email}}" disabled="">
                                    <p>¡Atención el email no está verificado!</p>
                                  </div>
                                </div>
                                 <div class="form-group row">
                                  <label for="inputSkills" class="col-sm-2 col-form-label">Intereses</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="Intereses">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Guardar cambios</button>
                                  </div>

                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /CONFIGURACION USUARIO -->
                    
                    
                    <!-- CONFIGURAR TIENDA -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Configurar tienda</h3>
                        </div>
                       <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group row">
                                <a href="../../seguidores.blade.php"></a>
                                <label for="mayorista" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-3">
                                    @if (isset($tienda->first()->id))
                                        @if ($tienda->first()->aprobado == 0)
                                            <div class="btn btn-sm btn-block bg-gradient-secondary">En revision</div>
                                        @endif
                                        
                                        @if ($tienda->first()->aprobado == 1)
                                            <div class="btn btn-block bg-gradient-success">Aprobado</div>
                                        @endif
                                        
                                        @if ($tienda->first()->aprobado == 2)
                                            <div class="btn btn-block bg-gradient-danger">Denegado</div>
                                        @endif
                                    @else
                                        <div class="btn btn-block bg-gradient-secondary">Sin solicitar</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mayorista" class="col-sm-2 col-form-label">Solicitar alta</label>
                                <div class="col-sm-10">
                                    <input class="checkbox" type="checkbox" onchange="toggleDisable(this);" id="check" data-bootstrap-switch data-off-color="danger" data-on-color="success"> 
                                    @if (isset($tienda->first()->id))
                                        Modificar información, se volverá a revisar su cuenta de forma manual.
                                    @else
                                        Quiero dar de alta mi negocio
                                    @endif
                                </div>
                            </div>
                            <script>
                                function toggleDisable(checkbox) {
                                    var toggle = document.getElementById("field_set");
                                    checkbox.checked ? toggle.disabled = false : toggle.disabled = true;
                                }
                            </script>
                            <fieldset id="field_set">
                                <form role="form" method="POST" action="{{route('tienda.update')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                        <label for="razon_social" class="col-sm-2 col-form-label">Razón social</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="{{$tienda->first()->razon_social??''}}" value="{{$tienda->first()->razon_social??''}}">
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="nombre_comercial" class="col-sm-2 col-form-label">Nombre comercial</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre_comercial" name="nombre_comercial" placeholder="{{$tienda->first()->nombre_comercial??''}}" value="{{$tienda->first()->nombre_comercial??''}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="direccion" class="col-sm-2 col-form-label">Dirección y número</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="{{$tienda->first()->direccion??''}}" value="{{$tienda->first()->direccion??''}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="codigo_postal" class="col-sm-2 col-form-label">Código postal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="{{$tienda->first()->codigo_postal??''}}" value="{{$tienda->first()->codigo_postal??''}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="localidad" class="col-sm-2 col-form-label">Localidad</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="localidad" name="localidad" placeholder="{{$tienda->first()->localidad??''}}" value="{{$tienda->first()->localidad??''}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="{{$tienda->first()->ciudad??''}}" value="{{$tienda->first()->ciudad??''}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="inputSkills" class="col-sm-2 col-form-label">Producto o servicios</label>
                                      <div class="col-sm-10">
                                            <select class="select2" data-placeholder="Categorias" name="categorias" style="width: 100%;" >
                                                <option value="Sin definir">Sin definir</option>
                                                <option value="Alicante">Alicante</option>
                                                <option value="Ciudad Real">Ciudad Real</option>
                                                <option value="Madrid">Madrid</option>
                                            </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mayorista" class="col-sm-2 col-form-label">Mayorista</label>
                                        <div class="col-sm-10">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="mayorista" value="1">
                                               <label for="customCheckbox1" class="custom-control-label">Marque esta opción si desea que su negocio aparezca listado para la compra de grandes lotes al por mayor o por menor</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAvatar" class="col-sm-2 col-form-label">Modelo 031</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="image" name="image" placeholder="Subir documento">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-2 col-form-label">Teléfono de at al cliente</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="{{$tienda->first()->telefono??''}}" value="{{$tienda->first()->telefono??''}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-dark">Enviar solicitud</button>
                                        </div>
                                    </div>
                                </form>
                            </fieldset>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.CONFIGURAR TIENDA -->
                </div>
                <!-- /.col MD 9 -->
                
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
</div>

<!-- /.content-wrapper -->
@endsection
