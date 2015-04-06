<?php

$q = $_REQUEST["q"];
$hint = "";

if ($q !== "") {
    $conexion = new mysqli('localhost','root','tr15t4n14','padron_beneficiarios');
    $conexion->query("SET NAMES utf8");
    $consulta = "select
cp.codigo_postal as code_postal,
cp.municipio as code_mun,
mp.municipio as mun
from codigos_postales cp
inner join municipios mp on (cp.municipio = mp.id_municipio)
where cp.codigo_postal = '$q'
Group by cp.codigo_postal";
    $ex_consulta = $conexion->query($consulta);
    $res = $ex_consulta->fetch_assoc();
    $contar = count($res);
    $mpio = $res['mun'];
    //$hint= "<input type='text' class='form-control' value='$mpio'   disabled='disabled'><input type='hidden' value='$id_mpio' name='id_mpio'>";


}

if($contar == 0){
  $hint = "
  <div class='form-group' id='mensaje_cp'>
  <div class='col-xs-6 callout callout-warning'>
    <h4>Error en Código Postal</h4>
  <p>El código postal no pertence a Zacatecas, si existe algun problema informarlo al área de informática de la upla</p>
 </div></div>";

}else{

$consulta_asentamientos = "select
cp.id as id_code,
cp.n_asentamiento as asentamiento
From codigos_postales cp
where codigo_postal = '$q'";

$ex_asentamientos = $conexion->query($consulta_asentamientos);

while($r_a = $ex_asentamientos->fetch_assoc()){
 $opciones_a .= "<option value='".$r_a['id_code']."'>".$r_a['asentamiento']."</option>";
}


$hint = "<div class='form-group' id='nombre_mpio'>
<label for='municipio' class='control-label col-xs-2'>Municipio</label>
<div class='col-xs-6'>
<input type='text' class='form-control' disabled='disabled' value='$mpio' name='municipio'>
</div>
</div>

<div class='form-group' id='asentamientos'>
<label for='asentamiento' class='control-label col-xs-2'>Asentamiento</label>
<div class='col-xs-6'>
<select class='form-control' name='asentamiento' onchange='info_asentamiento(this.value);' id='asentamiento'>
<option value='0'>-Seleccione-</option>
$opciones_a
</select>
</div>
</div>
";

}



// Output "no suggestion" if no hint was found or output correct values
echo $hint;

?>
