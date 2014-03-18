<?php
/*   
 * Arquivo onde programaremos funcións de validación de formularios
 */

/* definición de constantes */
define('IDADE_MINIMA', 1);
define('IDADE_MAXIMA', 100);


/**
 * Esta función devolve true no caso de que o $valor sexa Entero, falso no resto dos casos
 * @param type $valor
 * @return boolean
 */
Function validarEnteiro ($valor)    {    
    return (filter_var($valor , FILTER_VALIDATE_INT));
}

/**
 * función coa cal comprobamos que $valor está dentro dun rango de 2 números que lle pasamos
 * @param type $valor
 * @param type $inicio
 * @param type $final
 * @return boolean
 */
Function comprobarRango ($valor, $inicio, $final)    {
    return ($valor>=$inicio && $valor<=$final);
}

/**
 * función coa que dado un valor comprobamos se é un enteiro e está dentro dun rango de anos entre 1 e 100
 * @param type $valor
 * @return boolean
 */
Function validarIdade ($valor)    {
    return(validarEnteiro($valor) && comprobarRango($valor,IDADE_MINIMA, IDADE_MAXIMA));
}

/**
 * Verifica que o nome ten contido
 * recibe un valor, ao cal se lle quitan espazos, caracteres de HTML e maiores e menores.
 * Se queda baleiro é false, se quedan cousas é true
 * @param type $valor
 * @return boolean
 */
Function limparTexto ($valor)   {
    if (isset($valor))  {
        /* valor = quitarMaioresMenores(quitarEspazosEnBrancoPrincipioFinal(quitaCaracteresHTML()));*/
        $valor = strip_tags(trim(htmlspecialchars($valor, ENT_QUOTES, "ISO-8859")));  
    } 
    return ($valor!="");   
    }

/**
 * Esta función devolve true só se o nome está formado por caracteres alfabéticos 
 * @param type $valor
 * @return type
 */
Function validarNome ($valor)   {
    $patron = "/^[[:alpha:]]+$/";
    return (preg_match($patron, $valor));
    
}    

    
    
?>