<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!empty($_REQUEST["num1"]) && !empty($_REQUEST["num2"])) {
            if(isset($_REQUEST["opcion"])){
                foreach($_REQUEST["opcion"] as $respuesta){
                    switch ($respuesta) {
                        case 'suma':
                            echo $_REQUEST["num1"] . " + " . $_REQUEST["num2"] . "= " . ($_REQUEST["num1"] + $_REQUEST["num2"]) . "<br>";
                            break;
                        case 'resta':
                            echo $_REQUEST["num1"] . " - " . $_REQUEST["num2"] . "= " . ($_REQUEST["num1"] - $_REQUEST["num2"]) . "<br>";
                            break;
                        case 'producto':
                            echo $_REQUEST["num1"] . " x " . $_REQUEST["num2"] . "= " . ($_REQUEST["num1"] * $_REQUEST["num2"]) . "<br>";
                            break;
                        case 'cociente':
                            echo "El resultado de realizar el cociente de los números " . $_REQUEST["num1"] . " y " . $_REQUEST["num2"] . " es " . ($_REQUEST["num1"] / $_REQUEST["num2"]) . "<br>";
                            break;
                        default:
                            break;
                    }
                }
            }
        }else if(empty($_REQUEST["num1"]) && !empty($_REQUEST["num2"])){
            echo "Falta introducir el primer número";
        }else if(!empty($_REQUEST["num1"]) && empty($_REQUEST["num2"])){
            echo "Falta introducir el segundo número";
        }else echo "Numeros no introducidos";
    ?>
</body>
</html>