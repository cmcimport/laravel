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
                    <h1>Actualizar producto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Actualizar producto</li>
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
                    <h3 class="card-title">Actualizar producto</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-xl">
                          <i class="fas fa-question"></i>
                        </button>
                        <div class="modal fade" id="modal-xl">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Configuración de producto</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <p>Nuestro exclusivo proceso de compra y la configuración avanzada de producto permite que nuestro sistema
                                  se adapte a las necesidades de negocios físicos tanto para la venta de productos como de servicios, instalación, venta al por mayor, etc.</p>
                                    <ul>
                                        <li><p><b>Puede requerir envío:</b> Marque esta opción en caso de que el producto o servicio pueda ser enviado con un sobrecoste adicional que podrá definir con el cliente en cada pedido.</p></li>
                                        <li><p><b>Recogida en tienda:</b> Marque esta opción si su producto o servicio puede ser ofrecido, recogido y/o servido en su establecimiento.</p></li>
                                        <li><p><b>Precio negociable:</b> Marque esta opción para productos de precio cuyo valor cambia frecuentemente o dependen de la cantidad.</p></li>
                                        <li><p><b>No mostrar precio:</b> Marcando esta opción el precio del producto quedará oculto para sus clientes y este será definido durante el proceso de compra.</p></li>
                                        <li><p><b>Disponible al por mayor:</b> Marque esta opción para indicar que el producto puede ser vendido en grandes lotes a particulares o profesionales.</p></li>
                                        <li><p><b>Se puede instalar:</b> Marque esta opción para productos que puedan incluir servicios de instalación asociados.</p></li>
                                        <li><p><b>Requiere cita previa:</b> Marque esta opción para indicar que este producto o servicio puede requerir cita previa.</p></li>
                                    </ul>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">¡Entendido!</button>
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
                
                <form role="form" method="POST" action="{{route('products.edit', $product->id)}}" enctype="multipart/form-data">
                    <!-- Main content -->
                    <section class="content">
                      <!-- Default box -->
                        <div class="card-body pb-0">
                            <div class="row">
                                <!-- .BLOQUE 1 -->
                                <div class="col-12 col-md-4">

                                        @csrf
                                        <div class="card-body">
                                          <div class="form-group">
                                            <label for="nombre">Titulo</label>
                                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="{{$product->titulo}}" value="{{$product->titulo}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Categorías</label>
                                            <select class="select2" multiple="multiple" data-placeholder="Elige las categorias" style="width: 100%;">
                                              <option>Alimentacion</option>
                                              <option>Electrónica</option>
                                              <option>Otra</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="imagen">Imágenes</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" multiple="multiple" class="custom-file-input" id="imagen" name='imagen[]'>
                                                <label class="custom-file-label" for="imagen">Añadir imagen</label>
                                              </div>
                                              <div class="input-group-append">
                                                <span class="input-group-text">Subir</span>
                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                        <!-- /.card-body -->

                                </div>
                                <!-- .FIN BLOQUE 1 -->

                                <!-- .BLOQUE 2 -->
                                <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
                                <div class="col-12 col-md-5">   
                                    <div class="card-body">
                                        <label for="descripcion">Descripción</label>
                                        <textarea id="summernote" name="descripcion">
                                          {{$product->descripcion}}
                                        </textarea>
                                        <div class="card-footer">
                                            Texto de ayuda
                                        </div>
                                    </div>
                                </div>
                                <!-- .FIN BLOQUE 2 -->

                                <!-- .BLOQUE 3 -->
                                <div class="col-12 col-md-3">
                                    <div class="card-body">
                                        <label>Configuración especial</label>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input custom-control-input" name="requiere_envio" value="0">
                                            <input type="checkbox" class="form-check-input" id="requiere_envio" name="requiere_envio" value="1" {{ $config_product->requiere_envio == "0" ? "" : "checked" }}>
                                            <label class="form-check-label" for="requiere_envio">Puede enviarse</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input" name="recogida" value="0">
                                            <input type="checkbox" class="form-check-input" id="recogida" name="recogida" value="1" {{ $config_product->recogida == "0" ? "" : "checked" }} >
                                            <label class="form-check-label" for="recogida">Se puede recoger en tienda</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input" name="precio_negociable" value="0">
                                            <input type="checkbox" class="form-check-input" id="precio_negociable" name="precio_negociable" value="1" {{ $config_product->precio_negociable == "0" ? "" : "checked" }} >
                                            <label class="form-check-label" for="precio_negociable">Precio negociable</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input" name="mostrar_precio" value="0">
                                            <input type="checkbox" class="form-check-input" id="mostrar_precio" name="mostrar_precio" value="1" {{ $config_product->mostrar_precio == "0" ? "" : "checked" }} >
                                            <label class="form-check-label" for="mostrar_precio">No mostrar precio</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input" name="venta_al_por_mayor" value="0">
                                            <input type="checkbox" class="form-check-input" id="venta_al_por_mayor" name="venta_al_por_mayor" value="1" {{ $config_product->venta_al_por_mayor == "0" ? "" : "checked" }} >
                                            <label class="form-check-label" for="venta_al_por_mayor">Disponible al por mayor o lotes</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input" name="requiere_instalacion" value="0">
                                            <input type="checkbox" class="form-check-input" id="requiere_instalacion" name="requiere_instalacion" value="1" {{ $config_product->requiere_instalacion == "0" ? "" : "checked" }} >
                                          <label class="form-check-label" for="requiere_instalacion">Se puede instalar</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input type="hidden" class="form-check-input" name="requiere_cita_previa" value="0">
                                          <input type="checkbox" class="form-check-input" id="requiere_cita_previa" name="requiere_cita_previa" value="1" {{ $config_product->requiere_cita_previa == "0" ? "" : "checked" }} >
                                          <label class="form-check-label" for="requiere_cita_previa">Requiere cita previa</label>
                                        </div>
                                        
                                        <label>Precio</label>
                                        <input type="text" class="form-control" id="precio" name="precio" placeholder="{{$config_product->precio}}" value="{{$config_product->precio}}">

                                    </div>
                                </div>
                                <!-- .FIN BLOQUE 3 -->

                                <!-- .BLOQUE 4 -->
                                <div class="col-12 col-md-4">

                                </div>
                                <!-- .FIN BLOQUE 4 -->
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