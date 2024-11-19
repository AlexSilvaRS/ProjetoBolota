<?php

$nome = " Alex ";
$peso = 112 ;
$altura = 1.85;
$imc = $peso / pow($altura,2);
echo "Nome: $nome<br>"."Peso: ".number_format($peso,2)
."<br>Altura: ".number_format($altura,2)."<br>IMC:".number_format ($imc,2);
