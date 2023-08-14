<?php
include "cabecalho.php";
if($_POST["usuario"]=="admin"){
    include "pagina_administrador.php";
} else { 
    include "pagina_geral.php";
}
include "rodape.php";
?>