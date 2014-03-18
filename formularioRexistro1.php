<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formuario rexistro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>
    </head>
    <style type="text/css">
        body    {
            background-color:rgba(192,192,192,1);
        }
        #contedor {
            width: 350px;
            height: 230px;
            /*centrado*/
            margin: 0 auto;
            /*fondo branco*/
            background-color:rgba(255,255,255,1); 
            /*sombra*/
            -moz-box-shadow: 0px 0px 12px #000000;
            -webkit-box-shadow: 0px 0px 12px #000000;
            box-shadow: 0px 0px 12px #000000;
            /*esquinas redondas */
            border:none 0px #000000;
            -moz-border-radius-topleft: 12px;
            -moz-border-radius-topright:12px;
            -moz-border-radius-bottomleft:12px;
            -moz-border-radius-bottomright:12px;
            -webkit-border-top-left-radius:12px;
            -webkit-border-top-right-radius:12px;
            -webkit-border-bottom-left-radius:12px;
            -webkit-border-bottom-right-radius:12px;
            border-top-left-radius:12px;
            border-top-right-radius:12px;
            border-bottom-left-radius:12px;
            border-bottom-right-radius:12px;
        }       
        #formulario {
            padding-top: 10px;
            padding-left: 40px;
            
        }
        #formulario input[type="text"], input[type="password"]  {
            background-color:/*rgba(0,255,255,0.3);*/ rgba(192,192,192,0.2);
            border: 1px solid rgba(192,192,192,1);
            color: rgba(0,0,0,0.7);
        }
         #formulario input[type="text"]:focus, input[type="password"]:focus  {
            background-color:/*rgba(255,255,0,0.3);*/rgba(192,192,192,0.5);
            border: 1px solid rgba(192,192,192,1);
            color: rgba(0,0,0,0.7);
        }       
         #formulario input[type="text"]:hover, input[type="password"]:hover  {
            background-color: rgba(192,192,192,0.5);
        }               
        #formulario p   {
            font-family: 'Frijole', normal;
            font-size: 12px;
            padding-bottom: 8px;
            color: rgba(0,0,0,0.6);
        }
        #formulario p:hover   {
            color: rgba(0,0,0,1);
        }        
        
        /* O BOTON codigo! */
        .classname {
            -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
            -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
            box-shadow:inset 0px 1px 0px 0px #ffffff;
            background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e3e3e3), color-stop(1, #9e9e9e) );
            background:-moz-linear-gradient( center top, #e3e3e3 5%, #9e9e9e 100% );
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e3e3e3', endColorstr='#9e9e9e');
            background-color:#e3e3e3;
            -webkit-border-top-left-radius:6px;
            -moz-border-radius-topleft:6px;
            border-top-left-radius:6px;
            -webkit-border-top-right-radius:6px;
            -moz-border-radius-topright:6px;
            border-top-right-radius:6px;
            -webkit-border-bottom-right-radius:6px;
            -moz-border-radius-bottomright:6px;
            border-bottom-right-radius:6px;
            -webkit-border-bottom-left-radius:6px;
            -moz-border-radius-bottomleft:6px;
            border-bottom-left-radius:6px;
            text-indent:0px;
            border:1px solid #dcdcdc;
            display:inline-block;
            color:#575757;
            font-family:arial;
            font-size:13px;
            font-weight:bold;
            font-style:normal;
            height:25px;
            line-height:30px;
            width:80px;
            text-decoration:none;
            text-align:center;
            text-shadow:1px 1px 0px #ffffff;
        }
        .classname:hover {
            background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #9e9e9e), color-stop(1, #e3e3e3) );
            background:-moz-linear-gradient( center top, #9e9e9e 5%, #e3e3e3 100% );
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9e9e9e', endColorstr='#e3e3e3');
            background-color:#9e9e9e;
        }.classname:active {
            position:relative;
            top:1px;
        }

    </style>    
    <body>
        <div id="contedor">
            <div id="formulario">
                <form action="resultadoRexistro1.php" method="post">
                    <p><input type="text" id="login" name="login"> Login</p>
                    <p><input type="password" id="pass" name="pass"> Password</p>
                    <p><input type="password" id="passRepetir" name="passRepetir"> Repetir password</p>            
                    <p><input type="text" id="email" name="email" > E-mail</p> 
                    <p><input type="submit" value="Enviar" class="classname"> </p>
                </form>
            </div>
        </div>
    </body>
</html>
