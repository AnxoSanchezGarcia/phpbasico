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
            background:white;
            border-style:solid;
            
        }
        
        input[type='text']:focus, input[type='number']:focus {
            border-color:gold;
            border-width:medium;
            border-style:solid;
            
        }         
        #sexo   {
            background-color:lavender;
            width: 240px;
            height: 28px;
            padding-left: 10px;
            padding-top:5px;
        }
        #sexo:hover{
            background-color:turquoise;
        }
        
    </style>  
    
    <body>
        <?php /* nada */ ?>
        
        <form name="formulario" action="resultado3.php" action="post">
            <p>Nome: <input type="text" id="nome" name="nome"/></p>
            <p>Idade: <input type="text" id="idade" name="idade"/></p>
            <p>Solicitude bolsa: <input type="checkbox" name="bolsa" /></p>
            <p id="sexo">Sexo:
                <input type="radio" name="sexo" value="M"/> Masculino
                <input type="radio" name="sexo" value="F"/> Femenino
            </p>
            <p> Estado civil: 
                <select name="estado">
                    
                    <option value="casado">Casado</option>
                    <option value="soltero">Soltero</option>
                    <option value="arrejuntao">Arrejuntao</option>
                    
                </select>
            <p><input type="submit" value="Enviar" /></p>
        </form>
        
    </body>
</html>