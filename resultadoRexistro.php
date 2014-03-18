<?php require_once 'funcionsValidacionRexistro.php'; ?>

<html>
    <head>
        <title>Resutaldo rexistro</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>Resultado rexistro</div>
        <?php
            
            $login = $_REQUEST['login'];
            $pass = $_REQUEST['pass'];
            $passRepetir = $_REQUEST['passRepetir'];
            $email = $_REQUEST['email'];           
            $resultadoValidacion = array("login" => "login ✓" , "password" => "password ✓", "email" => "email ✓");
            
            if (!validarLogin($login))
                $resultadoValidacion["login"]= "login X";
            
            if (!validarPass($pass,$passRepetir))
                $resultadoValidacion["password"]= "password X";  
            
            if (!validarEmail($email))
                $resultadoValidacion["email"]= "email X";
            
            
            foreach ($resultadoValidacion as $valor) {
                echo "$valor </br>";
            }

            /* comprobamos se valida todo correctamente 
            if (validarLogin($login) && validarPass($pass, $passRepetir) && validarEmail($email))   {
                echo '<b>Rexisto correcto</b> cos seguintes valores: </br>';
                print_r($_REQUEST);
            }
            else    {
                echo '<b>Hai erros</b>, inseriches os seguintes valores; </br>';
                print_r($_REQUEST);
            }*/
        ?>
    </body>
</html>