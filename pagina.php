<?php

$pagina= array();
$pagina['cabecalho'] = "cabecalho.php";
$pagina['menu'] = "menu.php";
$pagina['conteudo'] = "formulario.php";
$pagina['rodape'] = "rodape.php";

$cabecalho = "cabecalho.php";
if($_GET['usuario']=="admin"){
    $pagina['menu'] = "menu_admin.php";  
} else { 
    $pagina['menu'] = "menu.php";
}


include $pagina['cabecalho'];
include $pagina['menu'];
include $pagina['conteudo'];
include $pagina['rodape'];