<?php
// criando variaveis locais para receber valores via formulario
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $resultado;

    $resultado = ($valor1 + $valor2 + $valor3)/3;
    echo 'O resultado da méida é: '. $resultado;

?>