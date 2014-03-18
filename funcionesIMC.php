<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("PESO_MIN", 1);
define("PESO_MAX", 500);
define("ALTURA_MIN", 30);
define("ALTURA_MAX", 250);
define("MSG_ERR_PESO","erro no peso");
define("MSG_ERR_ESTATURA","erro na estatura");
/**
 * calculoIMC
 * Calcula el valor IMC
 * @param masa expresada en kgs [0-500]
 * @param estatura espresada en cms [0-300]
 * @return float resultado del cálculo imc redondeado a 2 decimales
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */
function calculoIMC($masa, $estatura) {
  $estatura = $estatura / 100; // cms a mts
  $imc = $masa /  ($estatura * $estatura);
  return round($imc, 2);
}

/**
 * clasificacionIMC
 * Calcula la clasificación ...
 * @param imc Valor válido de IMC
 * @return String Contiene clasificación según valor
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */
function clasificacionIMC($imc) {
    if ($imc < 18.5) {
        $clasificacion = "Bajo peso";       
    } elseif ($imc < 25) {
        $clasificacion = "Normal"; 
    } elseif ($imc < 30) {
        $clasificacion = "Sobrepeso"; 
    } else {
        $clasificacion = "Obesisad";
    }
    return $clasificacion;
}

/**
 * enRango
 * Indica se o valor está dentro dun rango determinado [inicio-fin]
 * @param inicio
 * @param fin
 * @param valor
 * @return true se o valor está dentro do rango, false se non
 */
function enRango ($inicio, $fin, $valor)    {
    return($valor>=$inicio && $valor<=$fin);   
}

/**
 * validarPeso
 * Indica se o valor do peso é correcto
 * @param peso debe de ser un valor numérico [1-500]
 * @return boolean True se cumple. False en caso contrario
 */
function validarPeso ($valor)    {
    /* if (is_int($valor)) {
        return(enRango(PESO_MIN,PESO_MAX,$valor));
    }
    return false;*/
    $resultado = FALSE;
    if (filter_var($valor, FILTER_VALIDATE_INT)) {
        $resultado = enRango(PESO_MIN,PESO_MAX,$valor);
    }
    return $resultado;
}

/**
 * validarEstatura
 * Indica se a estatura é correcta
 * @param a estatura en centímetros dentro dun rango [30-250]
 * @return boolean true se está dentro do rango, false en caso contrario 
 */
function validarEstatura ($valor)    {
    $resultado = FALSE;
    if (filter_var($valor, FILTER_VALIDATE_INT)) {
        $resultado = enRango(ALTURA_MIN,ALTURA_MAX,$valor);
    }
    return $resultado;
}