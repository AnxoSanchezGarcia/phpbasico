<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <style type="text/css">
        input[type='text'], input[type='number']  {
            background:antiquewhite;
        }
        
        input[type='text']:focus, input[type='number']:focus {
            background:lavender;
        }        
    </style>  
    
    <body>
        <?php /* nada */ ?>
        
        <form action="resultado2.php" action="post">
            <p>Nome: <input type="text" id="nome" name="nome"/></p>
            <p>Idade: <input type="number" id="idade" name="idade"/></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
        
    </body>
</html>