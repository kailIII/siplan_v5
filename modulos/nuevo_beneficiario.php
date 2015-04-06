<?php
$_SESSION['curp'] = $_GET['curp'];
$_SESISON['reg_ben'] = true;
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Nuevo Beneficiario<br>
        <small>Agregar un nuevo beneficiario con CURP</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Icons</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
<form class="form-horizontal">
<div class='row'>
  <div class='col-xs-12'>
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
         <li class="active"><a href="#datos" data-toggle="tab">Informaci&oacute;n Personal</a></li>
         <li><a href="#direccion" data-toggle="tab">Direcci&oacute;n</a></li>
         <li><a href="#estudio" data-toggle="tab">Estudio Socioecon&oacute;mico</a></li>
         <li><a href="#apoyos" data-toggle="tab">Apoyos</a></li>
       </ul>
       <div class="tab-content">
       <!-- datos info_personal -->
       <div class="tab-pane active" id="datos" >

<div class="form-group">
<label for="inputcurp" class="control-label col-xs-2">CURP:</label>
<div class="col-xs-6">
<input type="text" class="form-control"  name="inputcurp" value = "<?php  print(strtoupper($_SESSION['curp'])); ?>" disabled="disabled">
<input type="hidden" name="curp" id= "curp" value="<?php echo $_SESSION['curp']; ?>">
</div>
</div>

<div class="form-group">
<label for="inputFirst" class="control-label col-xs-2">Primer apellido:</label>
<div class="col-xs-6">
<input type="text" class="form-control" placeholder="Primer apellido" name="FirstA" id= "FirstA" required>
</div>
</div>

<div class="form-group">
<label for="inputSecond" class="control-label col-xs-2">Segundo Apellido:</label>
<div class="col-xs-6">
<input type="text" class="form-control" placeholder="Segundo apellido" name="SecondA" id= "SecondA">
</div>
</div>

<div class="form-group">
<label for="inputNombre" class="control-label col-xs-2">Nombre(s):</label>
<div class="col-xs-6">
<input type="name" class="form-control" placeholder="Nombre(s)" name="Nombre" id= "Nombre" required>
</div>
</div>
</div>


<!-- Dirección -->
<div class="tab-pane" id="direccion">

<div class="form-group">
<label for="inputFirst" class="control-label col-xs-2">C.P.</label>
<div class="col-xs-6">
<div class="input-group">
<input type="text" class="form-control" placeholder="cp" name="cp" id="cp" aria-describedby="basic-addon1" maxlength="5">
<span class="input-group-addon" id="basic-addon1">
    <a href="javascript:validar_cp();" class="text-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>  </span>
</div>
    </div>
</div>

<div class="form-group">
<label for="inputFirst" class="control-label col-xs-2">Estado</label>
<div class="col-xs-6">
<input type="text" class="form-control" disabled="disabled" value="Zacatecas">
<input type="hidden" value="32" id="estado">
</div>
</div>

<div id="info_direccion" class="form-group">

</div>
</div>

<!-- Estudio Socioeconomico --------------------------------->
<div class="tab-pane" id="estudio">

                  glaphicosn 2
                  </div>
                     <div class="tab-pane" id="apoyos">

                  Apoyos
                  </div>


                  <!-- /#ion-icons -->

                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
                </div></form><!-- /.row -->
        </section><!-- /.content -->
      <!-- /.content-wrapper -->

    </div><!-- ./wrapper -->

<script src="js/codigos_postales.js"></script>
