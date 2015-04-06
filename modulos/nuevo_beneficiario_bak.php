<?php
$_SESSION['curp'] = $_GET['curp'];
$_SESISON['reg_ben'] = true;
?>
<div class="content-wrapper">
<section class="content-header">
<h3><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Registrar Nuevo Beneficiario</h3>
<ol class="breadcrumb">
<li><a href="main.php?token=<?php echo md5(4); ?>"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active"> Nuevo Beneficiario Individual</li>
</ol>
</section>
<section class="content">
<div class='row'>
<div class='col-xs-12'>
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#fa-icons" data-toggle="tab">Informaci&oacute;n Personal</a></li>
    <li><a href="#">Direcci&oacute;n</a></li>
    <li><a href="#glyphicons" data-toggle="tab">Estudio Socioeconómico</a></li>
    <li><a href="#glyphicons" data-toggle="tab">Apoyos</a></li>
  </ul>
<div class="tab-content">
<div class="tab-pane active" id="info_personal" >
<section id="info_personal">
<form class="form-horizontal" action="?token=<?php print(md5(4)); ?>" method="post" name="form_p1" id="form_p1">

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
<input type="text" class="form-control" placeholder="Primer apellido" name="FirstA" id= "FirstA" required="required">
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
<input type="name" class="form-control" placeholder="Nombre(s)" name="Nombre" id= "Nombre" required="required">
</div>
</div>
<div class="form-group">
<label for="submit_btn" class="control-label col-xs-2">&nbsp;</label>
<div class="col-xs-6">
<input type="button" id="submit_btn" name="submit_btn" value="continuar" class="btn btn-success" onclick="validar()">
</div>
</div>
</form>
</section>
</div>
<div class="tab-pane" id="direccion">
 <p> info2 </p>
</div>


</div></div></div></div></section></div>


<script type="text/javascript">
    function validar(){

        var pri_ap = document.getElementById('FirstA').value;
        var seg_ap = document.getElementById('SecondA').value;
        var nombre = document.getElementById('Nombre').value;

        if(pri_ap == "" || nombre == ""){alert('tienes campos vacios'); return false; }
        if(seg_ap == ""){document.getElementById('SecondA').value=" ";}
        document.form_p1.submit();

    }
</script>
