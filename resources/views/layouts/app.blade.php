
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csfr-token" content="{{csrf_token()}}">
  <title>Multivendor Marketplace</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  
    <script>
          window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
          ]) !!};
    </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="padding-top:57px;">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar productos" aria-label="Buscar">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @if (Auth::user())
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="/alertas">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Alertas</span>
                <div class="dropdown-divider"></div>
                <a href="/alertas" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 0 mensajes de pedido
                  <span class="float-right text-muted text-sm">...</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/alertas" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 0 respuestas
                  <span class="float-right text-muted text-sm">...</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/alertas" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 1 mensajes de sistema
                  <span class="float-right text-muted text-sm">Ahora</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/alertas" class="dropdown-item dropdown-footer">Ver todas las alertas</a>
              </div>
            </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/cesta" role="button">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  
  
  <!-- CODIGO TEMPORAL SIDEBAR -->
    
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tendeo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        @if (Auth::user())
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Auth::user()->image == '')
                    <img class="profile-user-img img-fluid img-circle" src="/images/perfil/no-image.png" alt="{{Auth::user()->alias}}">
                @else
                    <img class="img-circle elevation-2" src="/images/perfil/{{Auth::user()->image}}">
                @endif
            </div>
            <div class="info">
                <a href="/perfil/{{ Auth::user()->id }}" class="d-block">{{ Auth::user()->alias }}</a>
            </div>
        </div>
        @else
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat">
            <li class="nav-item">
                <a href="/login" class="nav-link">
                    <i class="fas fa-sign-in-alt nav-icon"></i>
                    <p>Iniciar sesión</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link">
                    <i class="fas fa-universal-access nav-icon"></i>
                    <p>Crear cuenta</p>
                </a>
            </li>
        </ul>
        @endif

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if (Auth::user() and Auth::user()->type_id != 3)
          <li class="nav-item {{ (request()->is('home', 'mi_muro', 'configuracion', 'ventas', 'venta/*', 'mis_productos', 'crear_producto', 'editar_producto/*', 'pedidos', 'pedido/*', 'pedido', 'seguidores', 'favoritos', 'envios_pagos', 'direcciones', 'crear_direccion', 'editar_direccion/*', 'pagos')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('home', 'mi_muro', 'configuracion', 'ventas', 'venta/*', 'mis_productos', 'crear_producto', 'editar_producto/*', 'pedidos', 'pedidos', 'pedido/*', 'pedido', 'seguidores', 'favoritos', 'envios_pagos', 'direcciones', 'crear_direccion', 'editar_direccion/*', 'pagos')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Escritorio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/mi_muro" class="nav-link {{ (request()->is('mi_muro')) ? 'active' : '' }}">
                    <i class="fas fa-book-open nav-icon"></i>
                    <p>Mi muro</p>
                  </a>
                </li>
                
                
                @if (Auth::user()->type_id == 2)
                <li class="nav-item">
                  <a href="/mis_productos" class="nav-link {{ (request()->is('mis_productos', 'crear_producto', 'editar_producto/*')) ? 'active' : '' }}">
                    <i class="fas fa-sitemap nav-icon"></i>
                    <p>Mis productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/ventas" class="nav-link {{ (request()->is('ventas', 'venta/*')) ? 'active' : '' }}">
                    <i class="fas fa-calculator nav-icon"></i>
                    <p>Mis ventas</p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="/pedidos" class="nav-link {{ (request()->is('pedidos', 'pedido/*', 'pedido')) ? 'active' : '' }}">
                    <i class="fas fa-file-invoice nav-icon"></i>
                    <p>Mis compras</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/seguidores" class="nav-link {{ (request()->is('seguidores')) ? 'active' : '' }}">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Seguidores</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/favoritos" class="nav-link {{ (request()->is('favoritos')) ? 'active' : '' }}">
                    <i class="far fa-bookmark nav-icon"></i>
                    <p>Favoritos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/configuracion" class="nav-link {{ (request()->is('home','configuracion')) ? 'active' : '' }}">
                    <i class="fas fa-cogs nav-icon"></i>
                    <p>Configuracion</p>
                  </a>
                </li>
                @if (Auth::user()->type_id == 2)
                <li class="nav-item">
                  <a href="/pagos" class="nav-link {{ (request()->is('pagos')) ? 'active' : '' }}">
                    <i class="fas fa-dolly nav-icon"></i>
                    <p>Pagos y entrega</p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="/direcciones" class="nav-link {{ (request()->is('direcciones', 'crear_direccion', 'editar_direccion/*')) ? 'active' : '' }}">
                    <i class="far fa-address-book nav-icon"></i>
                    <p>Mis direcciones</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link {{ (request()->is('logout')) ? 'active' : '' }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>Cerrar sesión</p>
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
            </ul>
          </li>
          @endif
          @if (Auth::user() and Auth::user()->type_id === 3)
          <li class="nav-item menu-open">
            <a href="#" class="nav-link {{ (request()->is('gest_categorias' or 'gest_usuarios' or 'reportes')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestión
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/gestion_categorias" class="nav-link {{ (request()->is('gest_categorias')) ? 'active' : '' }}">
                    <i class="fas fa-folder nav-icon"></i>
                    <p>Categorías</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="/gestion_usuarios" class="nav-link {{ (request()->is('gest_usuarios')) ? 'active' : '' }}">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Gest. usuarios</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="/mi_muro" class="nav-link {{ (request()->is('reportes')) ? 'active' : '' }}">
                    <i class="fas fa-book-open nav-icon"></i>
                    <p>Reportes</p>
                  </a>
                </li> 
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off nav-icon"></i>
                        <p>Cerrar sesión</p>
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
            </ul>
          </li>
          @endif
          
          @if (Auth::user() and Auth::user()->type_id != 3)
          <li class="nav-item">
            <a href="/alertas" class="nav-link {{ (request()->is('alertas')) ? 'active' : '' }}">
              <i class="nav-icon far fa-envelope"></i>
              <span class="badge badge-info right">1</span>
              <p>
                Alertas
              </p>
            </a>
          </li>
          @endif
          
          <li class="nav-item">
            <a href="/usuarios" class="nav-link {{ (request()->is('usuarios')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Usuarios
                <span class="right badge badge-danger">Comunidad</span>
              </p>
            </a>
          </li>
          <li class="nav-header">MARKETPLACE</li>

          <li class="nav-item">
            <a href="/productos" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Alimentación</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/productos" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Electrónica
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategoría 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Subcategoría 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/productos" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Nivel 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/productos" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Nivel 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/productos" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Nivel 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/productos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subcategoria 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/productos" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Moda</p>
            </a>
          </li>
          <li class="nav-header">INFORMACIÓN</li>
          <li class="nav-item">
            <a href="/terminos_y_condiciones" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Términos y condiciones</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/privacidad" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Privacidad y cookies</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/nuestro_proyecto" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Nuestro proyecto</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
      <a href="/contacto" class="btn btn-link"><i class="fas fa-envelope"></i></a>
      <a href="/preguntas_frecuentes" class="btn btn-secondary hide-on-collapse pos-right">FAQ's</a>
    </div>
    <!-- /.sidebar-custom -->
  </aside>
    <!-- /.CODIGO TEMPORAL SIDEBAR -->
  
  
  
            @yield('content')

            
    <!-- FOOTER -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> beta
    </div>
    Copyright &copy; 2020 <a href="/">tendeo.es</a>, <strong>hecho en España</strong> - Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>


<!-- PARA FILTROS; INPUTS, CHECKBOX, SELECTS -->
<!-- Select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false;

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template");
  previewNode.id = "";
  var previewTemplate = previewNode.parentNode.innerHTML;
  previewNode.parentNode.removeChild(previewNode);

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  });

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  });

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
  });

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  });

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
  });

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
  };
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
  };
  // DropzoneJS Demo Code End
</script>

<!-- PARA EL CARRUSEL DE PRODUCTO -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<!-- FORMULARIO CREACION DE PRODUCTO -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
     
</body>
</html>

    <!-- ./ FOOTER -->
            