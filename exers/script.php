<?php

if (
    isset($_POST["Nome"]) &&
    isset($_POST["DataNasc"]) &&
    isset($_POST["peso"]) &&
    isset($_POST["altura"]) &&
    isset($_POST["sexo"])) {

    $nome = ucfirst($_POST["Nome"]);
    $DataNasc = $_POST["DataNasc"];
    $ano = date("Y", strtotime($DataNasc));
    $peso = (float)$_POST["peso"];
    $altura = (float)$_POST["altura"];
    $sexo = $_POST["sexo"];
    $idade = 2024 - $ano;

    $imc = $peso / pow($altura, 2);
    if ($sexo == "masculino") {
        echo "$nome, sua data de nascimento é " . $DataNasc . " seu peso é " . $peso . " sua altura é " . $altura . " e seu sexo é " . $sexo . " e seu IMC é " . $imc ;
    } else {
        echo "$nome, sua data de nascimento é " . $DataNasc . " seu peso é " . $peso . " sua altura é " . $altura . " e seu sexo é " . $sexo . " e seu IMC é " . $imc ;
    }
}
