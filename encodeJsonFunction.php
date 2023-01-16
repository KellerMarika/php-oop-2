<?php

$a = 2;
/**FUNZIONE GENERICA ENCODE JSON *****************************
 * 
 * $arrayAssociativo array recuperato dalla funzione interna della classe
 * $percorso file del database
 */
function encodeJsonWOW(array $arrayAssociativo, string $percorso){

  $dbList = json_decode(file_get_contents($percorso), true);

  $newElementToPush = $arrayAssociativo;
  $dbList[] = $newElementToPush;
  
  $jsonString = json_encode($dbList, JSON_PRETTY_PRINT);
  file_put_contents($percorso, $jsonString);
  header("Content-Type: application/json");

}

