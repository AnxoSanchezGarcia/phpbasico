<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style type="text/css">
        input[type='text']  {
            background:antiquewhite;
        }
        
        input[type='text']:focus {
            background:lavender;
        }        
    </style>  
    
    <body>
        <?php /* nada */ ?>
        
        <form action="exemplo1.php" action="get">
            <p>Nome: <input type="text" id="nome" name="nome"/></p>
            <p>Apelidos: <input type="text" id="apelidos" name="apelidos"/></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
        
    </body>
</html>
