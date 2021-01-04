<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('globales.php');
include('header.php');
include('sidebar.php');

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil de NombreUsuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?=$proyecto;?></a></li>
              <li class="breadcrumb-item active">Perfil</li>
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
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user4-128x128.jpg"
                       alt="Nombre usuario">
                </div>

                <h3 class="profile-username text-center">Nombre Usuario</h3>

                <p class="text-muted text-center">Nombre real</p>

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

                <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- Valora -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Valora a este usuario</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body text-center">
                <strong><i class="fas fa-heartbeat"></i> De ti depende su reputación</strong>
                <hr>
                <p class="text-muted">Las votaciones tienen un gran peso para calcular la reputación tanto de compradores como de vendedores entre otros factores 
                como el número de compras o ventas realizadas. Puedes revisar la reputación de cualquier usuario y producto y votarlo una sola vez.</p>
                <a class="btn btn-app">
                  <i class="far fa-thumbs-up"></i> Bueno
                </a>
                <a class="btn btn-app">
                  <i class="far fa-meh"></i> Normal
                </a>
                <a class="btn btn-app">
                  <i class="far fa-thumbs-down"></i> Malo
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- About Me Box -->
            <div class="card card-dark">
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
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/user1-128x128.jpg" alt="user image">
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
                        <img class="img-circle img-bordered-sm" src="dist/img/user7-128x128.jpg" alt="User Image">
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
                        <img class="img-circle img-bordered-sm" src="dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Nombre de empresa</a>
                        </span>
                        <span class="description">Ha publicado un nuevo producto</span>
                      </div>
                      <!-- /.product-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="dist/img/photo1.png" alt="Photo">
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
<?php

include('footer.php');