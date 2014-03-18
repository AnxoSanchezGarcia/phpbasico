<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("LONXITUDE_LOGIN", 5);
define("MIN_PASS", 5);
define("MAX_PASS", 20);

/**
 * A lonxitude ten q ser maior de 5 
 * @param type $valor
 * @return type
 */
Function lonxitudeLogin ($valor)   {
    return (strlen($valor) >= LONXITUDE_LOGIN);
}

/**
 * Esta función devolve true só se o nome está formado letras
 * @param type $valor
 * @return type
 */
Function patronLogin($valor)   {
    $patron = "/^[[:alpha:]]+$/";
    return (preg_match($patron, $valor)); 
}  

/**
 * Devolve TRUE se ambos son iguais
 * @param type $valor
 * @param type $valorRepetido
 * @return type
 */
Function sonIguais ($valor, $valorRepetido) {
    return ($valor == $valorRepetido);
}

/**
 * Devolve true se a pass ten letras e números misturados
 * @param type $valor
 * @return type
 */
Function patronPass ($valor)    {
    /* $patron="/^[[:alnum:]]*[._-]+[[:alnum:]]*$/          este patrón obrigaríache a ter un destes . _ - entre caracteres alfanuméricos*/ 
    $patron = "/^[[:alnum:]]+$/";
    return (preg_match($patron, $valor));    
}

/**
 * Devolve true se está no rango marcado
 * @param type $valor
 * @return type
 */
Function lonxitudePass($valor)  {
    return (strlen($valor) >= MIN_PASS && strlen($valor) <= MAX_PASS);    
}

/**
 * O login non pode estar baleiro e só pode conter números e letras. Lonxitude >=5
 * @param o login que inseriu o usuario
 * @return true se todo é correcto, false no caso contrario
 */
Function validarLogin($valor)   {
    return (patronLogin($valor) && lonxitudeLogin($valor));   
}

/**
 * Debe cumplir que as pass son iguais, que sexan letras e números e q teña unha lonxitude determinada
 * @param type $valor password
 * @param type $valorRepetido repetir password
 * @return type
 */
Function validarPass($valor, $valorRepetido)    {
    return (sonIguais($valor, $valorRepetido) && lonxitudePass($valor) && patronPass($valor));
    
}

/**
 * devolve true se existe e é un mail... o isset non faría falla.
 * @param type $valor
 * @return type
 */
Function validarEmail($valor)   {
    return (isset($valor) && filter_var($valor , FILTER_VALIDATE_EMAIL));
    
}



?>