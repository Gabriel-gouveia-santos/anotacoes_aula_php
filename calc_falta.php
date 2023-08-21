<?php 
include "cabecalho.php";
?>
Calculando....
<?php
    $total_aula = $_POST['total_aula'];
    $total_falta = $_POST['total_falta'];
    $resultado = $total_aula - $total_falta;
    if($total_falta>$total_aula){
        echo "nao é possivel calcular."; 
?>
<a href="">Voltar</a>

<?php 
    } else { 
?>

<button class="btn btn-success"><?php echo $resultado;?></button>
<?php 
}
include "rodape.php";
?>