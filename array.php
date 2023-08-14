<?php
$lista = array(10,20,30);
/*
$lista[0] = 10;
$lista[1] = 20;
$lista[2] = 30;
*/
$alunos = array("Luizinho","Huguinho","Zezinho");
echo $lista[0]."<br>";
echo $lista[1]."<br>";

echo $alunos[0]."<br>";
echo $alunos[1]."<br>";
$itens = array(1=>"leite", 3=>"ovo","farinha","valor"=>100.00);

echo "<pre>";
var_dump($itens);
//echo $itens[0]."<br>";
echo $itens[1]."<br>";
//echo $itens[2]."<br>";
echo $itens[3]."<br>";
echo $itens[4]."<br>";
//remove um item do array.
unset($itens[4]);

$total = count($itens);
echo "<br>total de itens no array:".$total;
?>