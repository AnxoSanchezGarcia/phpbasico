<?php require_once 'funcionesIMC.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado IMC</div>
        <?php
            $masa = $_REQUEST['masa'];
            $estatura = $_REQUEST['estatura'];
            
            /* erros */
            $errores = array();
            if(!validarPeso($masa))
                $errores[]=MSG_ERR_PESO;
            if(!validarEstatura($estatura))
                $errores[]=MSG_ERR_ESTATURA;
            /* fin erros */
            
            /*comprobamos se o array está baleiro, entón non hai erros. Se non o está, entón é que si hai */
            if (count($errores)>0) {
                echo "erros <br>";
                foreach($errores as $error)
                    echo $error .'<br>';
            }
            
            $imc = 0.0;
            $clasificacion = "";
            //Cálculo
            $imc = calculoIMC($masa, $estatura);
            $clasificacion = clasificacionIMC($imc);
            //
            echo "IMC = ".$imc;
            echo "<br>";
            echo "Clasificación = ".$clasificacion;
        ?>
    </body>
</html>