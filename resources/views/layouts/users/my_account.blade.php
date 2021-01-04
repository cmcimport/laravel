<link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.min.css')}}">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mi cuenta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">XXX</a></li>
              <li class="breadcrumb-item active">Mi cuenta</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-check"></i> ¡Gracias por registrarte!</h5>
          Hemos enviado un email a tu bandeja de entrada, <b>por favor confirma tu correo electrónico</b> para poder activar tu perfil.
        </div>
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
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('assets/dist/img/user4-128x128.jpg')}}"
                       alt="Nombre usuario">
                </div>

                <h3 class="profile-username text-center">Nombre Usuario</h3>

                <p class="text-muted text-center">Sobre ti</p>

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
                      <!-- 
                      Se debe idear un modo de calcular una reputación en base a:
                      compras realizadas
                      comentarios
                      likes/dislikes recibidos
                      seguidores
                      -->
                    <b>Reputación</b> <a class="float-right">0</a>
                  </li>
                </ul>

                
                <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#modal-xl">
                  Publicar
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

                <p class="text-muted">Ciudad, País</p>

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
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Muro</a></li>
                  <li class="nav-item"><a class="nav-link" href="#following" data-toggle="tab">Siguiendo</a></li>
                  <li class="nav-item"><a class="nav-link" href="#followers" data-toggle="tab">Seguidores</a></li>
                  <li class="nav-item"><a class="nav-link" href="#wish" data-toggle="tab">Favoritos</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configuración</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user1-128x128.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Nombre de usuario</a>
                        </span>
                        <span class="description">Ha comentado el producto: nombre producto</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                          <a href="producto.php" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Ir al producto</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comentarios (5)
                          </a>
                        </span>
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="¡Deja una respuesta rápida!">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Responder</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user7-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Nombre de empresa</a>
                        </span>
                        <span class="description">Ha comentado tu pedido</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>
                      <p>
                         <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Ir al pedido</a>
                      </p>
                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Responder ahora">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Responder</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('assets/dist/img/user6-128x128.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Nombre de empresa</a>
                        </span>
                        <span class="description">Ha publicado un nuevo producto</span>
                      </div>
                      <!-- /.product-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('assets/dist/img/photo1.png')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <a href="#" style="font-size:24px;">Nombre del producto de varias líneas</a>
                            <a href="#" class="float-right" style="padding-top:5px;"><i class="fas fa-tags"></i> <b>288€</b></a>
                            <p>Texto descripción nuevo producto lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans. </p>
                            <a href="producto.php" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Ver producto</a>
                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Me gusta</a>
                            <span class="float-right">
                              <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comentarios (5)
                              </a>
                            </span>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="¡Comenta este producto!">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Comentar</button>
                          </div>
                        </div>
                      </form>
                      
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nombre de usuario</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Alias">
                          <p>Este es el alias único con el que el resto de usuarios te verán en nuestra red.</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputAvatar" class="col-sm-2 col-form-label">Sobre ti</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Escribe unas palabras sobre tus gustos, aficiones...">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputAvatar" class="col-sm-2 col-form-label">Imagen de perfil</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Subir imagen de perfil">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="emailde@registro.es">
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
                      <div class="form-group row">

                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-secondary">Configurar mi cuenta de vendedor</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- tab followers -->
                  <div class="tab-pane" id="followers">
                      <p>¡Estos son tus seguidores!. Deja comentarios útiles y de calidad para ganar reputación.</p>
                  </div>
                  <!-- /.tab followers -->
                  <!-- tab following -->
                  <div class="tab-pane" id="following">
                      <p>Verás en tu muro nuevas publicaciones y comentarios de los usuarios y empresas que estás siguiendo.</p>
                  </div>
                  <!-- /.tab following -->
                  <!-- tab wish -->
                  <div class="tab-pane" id="wish">
                      <p>Verás en tu muro los nuevos comentarios en productos favoritos</p>
                  </div>
                  <!-- /.tab following -->
                </div>
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
