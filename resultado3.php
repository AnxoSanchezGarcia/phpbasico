<!DOCTYPE html>
<!-- incluimos validar.php para poder utilizar as súas funcións -->
<?php require_once 'validarFormularios.php';?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    
        <?php 
        //entrada datos
            $bolsa = (isset($_REQUEST['bolsa'])); // se existe (está marcada no formulario) é true, se non, é false
            $sexo = (isset($_REQUEST['sexo'])? $_REQUEST['sexo']:false); //se existe, opción marcada, asignámoslle a opción marcada. Se non, false
            if (isset($_REQUEST['nome'])) {
                $nombre = $_REQUEST['nome'];
            }
            $edad = $_REQUEST ['idade'];
        //validad datos
            $error = false;
            $mensaje_error = "ERROR:";
            //validar idade
            if (!validarIdade($edad)) {
                $error = true;
                $mensaje_error .= " La edad debe ser un número";
             }
            // validar nome          
            if (!validarNome($nombre))   {
                $error=true;
                $mensaje_error .= " o nome é obrigatorio";
             }
            // validar nome          
            if (!$sexo)   {
                $error=true;
                $mensaje_error .= " o sexo é obrigatorio";
             }            
             
        //calculo y salida
            if (!$error) {
                echo $mensaje_error;
                echo "</br>";
                echo "<a href='javascript:history.go(-1);'> Volver al formulario </a>";
            } else {
               //si no hay error
                if ($edad>=18){
                      echo $nombre." es mayor de edad";
                  } else {
                      echo $nombre." es menor de edad";
                  }
             }
             //se Bolsa está activo
             if($bolsa) { 
                 echo " </br> solicita bolsa";
             }
             else {
                 echo "</br> non solicita bolsa";
             }
             echo "sexo = " .$sexo;
            
                   
               
        ?>
    
    <body>        
    </body>
</html>