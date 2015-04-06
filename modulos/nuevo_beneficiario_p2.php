<?php

$_SESSION['nombre'] = $_POST['Nombre'];
$_SESSION['ap_paterno'] = $_POST['FirstA'];
$_SESSION['ap_materno'] = $_POST['SecondA'];


?>
<div class="content-wrapper">
<section class="content-header">
<h3><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Registrar Nuevo Beneficiario</h3>
<ol class="breadcrumb">
<li><a href="main.php?token=<?php echo md5(0); ?>"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active"> Nuevo Beneficiario Individual</li>
</ol>
</section>
<section class="content">
<div class='row'>
<div class='col-xs-12'>
<div class="nav-tabs-custom">
<ul class="nav nav-tabs">
<li ><a href="#" data-toggle="tab">Informaci&oacute;n Personal</a></li>
<li class="active"><a href="#glyphicons" data-toggle="tab">Direcci&oacute;n</a></li>
<li><a href="#glyphicons" data-toggle="tab">Estudio Socioeconómico</a></li>
<li><a href="#glyphicons" data-toggle="tab">Apoyos</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="fa-icons" >
<section id="info_personal">
<form class="form-horizontal" action="?token=<?php print(md5(6)); ?>" method="post">

<div class="form-group">
<label for="inputcurp" class="control-label col-xs-2">Código Postal</label>
<div class="col-xs-6">
<input type="" class="form-control" placeholder="C.P." name="cp"  id= "cp" maxlength="5">
</div>
</div>

<div class="form-group">
<label for="inputFirst" class="control-label col-xs-2">Estado</label>
<div class="col-xs-6">
<input type="text" class="form-control" disabled="disabled" value="Zacatecas">
<input type="hidden" value="32" id="estado">
                </div>
            </div>


            <div class="form-group">
              <label for="inputFirst" class="control-label col-xs-2">Municipio</label>
              <div class="col-xs-6">
                <input type="text" class="form-control">

              </div>
            </div>

            <div class="form-group">
              <label for="inputFirst" class="control-label col-xs-2">Localidad</label>
              <div class="col-xs-6">
                <input type="text" class="form-control">

              </div>
            </div>

       <div class="form-group">

                <div class="col-xs-6">
                   <input type="submit" value="continuar">
                </div>
            </div>


    </form>
</section>
    </div></div></div></div></div></section></div>

