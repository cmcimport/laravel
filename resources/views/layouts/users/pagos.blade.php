@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pagos y entrega</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pagos y entrega</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- BLOQUES DE PAGO -->
            <div class="col-md-12">
                <form role="form" method="POST" action="{{route('user.store.pagos.transferencia')}}" enctype="multipart/form-data">
                @csrf
                    <!-- BLOQUE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Transferencia bancaria</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="titular">Titular</label>
                                        <input type="text" class="form-control" id="titular" name="titular" placeholder="Titular">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 float-left">
                                    <div class="form-group">
                                        <label for="n_cuenta">Número de cuenta</label>
                                        <input type="text" class="form-control" id="n_cuenta" name="n_cuenta" placeholder="Número de cuenta">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="instrucciones">Instrucciones</label>
                                        <textarea class="form-control" rows="3" placeholder="Escribe instrucciones para la transferencia bancaria..."></textarea>
                                        <i>Enviar justificante a..., etc</i>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <div class="col-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="estado">
                                            <label for="estado">
                                                Deseo que esta forma de pago se encuentre disponible para mis clientes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary right rightButton float-right">Guardar</button>
                        </div>

                    <!-- /.card-footer -->
                    </div>
                 </form>
                <!-- /.BLOQUE TRANSFERENCIA BANCARIA -->

                <!-- BLOQUE RECOGIDA EN TIENDA -->
                <div class="card collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Recogida en tienda / Pago en efectivo</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{route('user.store.pagos.contrareembolso')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-12 col-md-12 float-left">
                                    <div class="form-group">
                                        <label for="instrucciones">Instrucciones</label>
                                        <textarea class="form-control" rows="3" placeholder="Escribe instrucciones para la recogida en tienda..."></textarea>
                                        <i>Horario, concertar cita previa, etc...</i>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <div class="col-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="estado_recogida">
                                            <label for="estado_recogida">
                                                Deseo que esta forma de pago se encuentre disponible para mis clientes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary right rightButton float-right">Guardar</button>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.BLOQUE RECOGIDA EN TIENDA -->

                <!-- BLOQUE CONTRAREEMBOLSO -->
                <div class="card collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Pago contrareembolso</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{route('user.store.pagos.recogida')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-12 col-md-12 float-left">
                                    <div class="form-group">
                                        <label for="instrucciones">Instrucciones</label>
                                        <textarea class="form-control" rows="3" placeholder="Escribe instrucciones para el pago contrareembolso..."></textarea>
                                        <i>Podrá modificar y personalizar el coste/gasto de envío una vez haya recibido el pedido</i>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12">
                                    <div class="col-12">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="estado">
                                            <label for="estado_">
                                                Deseo que esta forma de pago se encuentre disponible para mis clientes
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary right rightButton float-right">Guardar</button>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.BLOQUE CONTRAREEMBOLSO -->
            
                <!-- BLOQUE TPV -->
                <div class="card collapsed-card disabled">
                    <div class="card-header">
                        <h3 class="card-title">Pago con tarjeta TPV Virtual (próximamente)</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool disabled">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.BLOQUE TPV -->
            
                <!-- BLOQUE PAYPAL -->
                <div class="card collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title disabled">Pago PayPal (próximamente)</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool disabled">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        Titular, nº de cuenta, instrucciones, estado, id_config_pago
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.BLOQUE PAYPAL -->
            </div>
            <!-- /.BLOQUES DE PAGO -->

        </div>
        <!-- /.row -->
      
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
@endsection