<?php
    
    $num1 = $_GET['num1']; 
    $num2 = $_GET['num2']; 
    $op = $_GET['op'];
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Resultado</h1>
    <?php
        echo "O resulado da operação de";
        switch ($op) {
            case "som":
                $operacao="soma";
                $resultado = $num1 + $num2;
                break;
            case "sub":
                $operacao="subtração";
                $resultado=$num1-$num2;
                break;
            case "mul":
                $operacao="multiplicação";
                $resultado=$num1*$num2;
                break;
            case "div":
                $operacao="divisão";
                $resultado=$num1/$num2;
                break;
        }
        echo " $operacao com os números ";
        echo $num1;
        echo " e ";
        echo $num2;
        echo " é : $resultado";
        
        
    ?>
</body>
</html>