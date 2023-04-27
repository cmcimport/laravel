@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Bienvenido a Tendeo</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                      <div align="center" class="embed-responsive col-md-12 col-lg-6 embed-responsive-16by9 float-left rounded-lg">
                          <video controls="" class="embed-responsive-item">
                              <source src="{{asset('videos/tendeo.mp4')}}" type="video/mp4">
                          </video>
                      </div>
                      <div class="col-md-12 col-lg-6 float-left pl-4 pr-4 pt-0">
                          <h1 class="mb-4 mt-2">¡Lo veo en Tendeo!</h1>
                          <p>Tendeo es una plataforma en la que podrás realizar tus <b>compras directamente al vendedor</b> tanto de productos como de servicios <b>sin comisiones añadidas ni intermediarios</b>.</p>
                          <p>Nuestra Red Social te permite valorar e interactuar de forma directa con vendedores y otros compradores <b>obteniendo Karma con cada valoración</b>.</p>
                          <p>Puedes valorar productos y servicios, pedidos realizados o perfiles tanto de compradores como de vendedores para mejorar tu reputación incrementando tu Karma en nuestra comunidad.</p>
                          <p>En Tendeo puedes gestionar tus productos favoritos, añadir nuevos seguidores y compartir en tu muro con todos los usuarios.</p>
                          <p>Descubre nuestro <b>novedoso proceso de compra</b> y negocia las condiciones de entrega, precio, cita previa y otros detalles de tu pedido.</p>
                      </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="btn btn-dark" href="#">¡Descubre nuestro proyecto!</a></li>
                  </ul>
                </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
        <div class="row justify-content-md-center">
            <div class="col-md-12 mb-5 mt-2">
                <div class="text-center">
                    <h1 class="justify-content-md-center">Nuestro <strong>ADN</strong></h1>
                    <h4 class="">Red social de compras <strong>gratis y sin comisiones</strong></h4>
                </div>
            </div>

            
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-dollar-sign fa-3x mb-2"></i>
                <h5><strong>100% gratis</strong></h5>
                <p>Comprar, vender y usar nuestra plataforma en su totalidad no tiene ningún coste mensual ni comisión por venta añadida; hoy, mañana y siempre.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-tachometer-alt fa-3x mb-2"></i>
                <h5><strong>Novedoso</strong></h5>
                <p>Descubre una nueva forma de hacer tus pedidos online, contrata servicios, negocia presupuestos personalizados o realiza la venta al por mayor.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-shield-alt fa-3x mb-2"></i>
                <h5><strong>Seguro</strong></h5>
                <p>Todos los vendedores y negocios registrados son revisados de forma manual y tus transacciones se llevan a cabo garantizando tu seguridad.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-user-secret fa-3x mb-2"></i>
                <h5><strong>Privado</strong></h5>
                <p>La privacidad de los usuarios es fundamental, no rastreamos tus ventas, clientes, comentarios ni otros movimientos en nuestra red.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-infinity fa-3x mb-2"></i>
                <h5><strong>Sin límites</strong></h5>
                <p>Publica en tu muro; interactúa y conecta con compradores, vendedores y productos. Gestiona tus alertas, seguidores y productos favoritos.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-user fa-3x mb-2"></i>
                <h5><strong>Registro fácil</strong></h5>
                <p>Regístrate de forma sencilla sin necesidad de introducir datos privados y descubre todo el potencial que puede ofrecerte nuestra red.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-cog fa-3x mb-2"></i>
                <h5><strong>Configuración avanzada</strong></h5>
                <p>Empieza a configurar tu perfil de usuario o vendedor, intereses y otras opciones avanzadas para obtener el máximo rendimiento.</p>
            </div>
            <div class="col-md-3 text-center mb-5">
                <i class="fas fa-code fa-3x mb-2"></i>
                <h5><strong>Versión BETA</strong></h5>
                <p>Tendeo es un proyecto en versión BETA <b>disponible para su uso restringido</b> en modo demostración. ¿Quiéres participar?, conoce más sobre nuestro proyecto.</p>
            </div>
        </div>

      
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
@endsection