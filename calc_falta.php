<?php 
include "cabecalho.php";
?>
Calculando....
<?php
$total_aula = $_POST['total_aula'];
$total_falta = $_POST['total_falta'];
$resultado = $total_aula - $total_falta;
?>
<button class="btn btn-success"><?php echo $resultado;?></button>
<?php 
include "rodape.php";
?>