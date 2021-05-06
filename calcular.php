<?php
    include("classCalculadora.php");
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultadoCalc.css">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <div class="containerCalc">
        <div class="resultadoCalc">
            <?php

                if (isset($_REQUEST['calcular'])) {

                    $numero1 = $_REQUEST['numero1'];
                    $numero2 = $_REQUEST['numero2'];
                    $opcions = $_REQUEST['opcions'];

                    switch($opcions){
                        case 0:
                            echo "$numero1 + $numero2 = ".ClassMatematica::somar($numero1,$numero2);
                            break;
                        case 1:
                            echo "$numero1 / $numero2 = ".ClassMatematica::dividir($numero1,$numero2);
                            break;
                        case 2: 
                            echo "$numero1 * $numero2 = ".ClassMatematica::multiplicar($numero1,$numero2);
                            break;
                        case 3: 
                            echo "$numero1 - $numero2 = ".ClassMatematica::subitrair($numero1,$numero2);
                            break;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>