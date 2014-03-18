<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    
    <?php
        //entrada de datos
        $nome = $_REQUEST['nome'];
        $idade = $_REQUEST['idade'];
        //validación de datos
        is_numeric($idade) or die("a idade debe ser un número");
        !is_null($nome) or die("o nome ten que conter datos");

        //Comprobación
        if ($idade < 18)    {
            print($nome . " é menor de idade");
        }
        else    {
            print($nome . " é maior de idade");        
        }
    ?>
    
    <body>        
    </body>
</html>