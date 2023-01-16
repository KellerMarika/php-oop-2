
<?php

$user= new User("Marika","Keller", "02-11-1992");
var_dump($user);

$usersList = json_decode(file_get_contents("dbJson/users.json"), true);
var_dump($usersList);

$newUser = [
  "title" => "title",
  "content" => "content",
  "category" => "generic",
  "createdAt" => date('Y-m-d H:i:s'),
  "updatedAt" => "",
  "id" => uniqid()
];

$usersList[] = $newUser;

var_dump($usersList);

$jsonString = json_encode($usersList, JSON_PRETTY_PRINT);
file_put_contents("dbJson/users.json", $jsonString);
header("Content-Type: application/json");




/**FUNZIONE GENERICA ENCODE JSON *****************************
 * 
 * $arrayAssociativo array recuperato dalla funzione interna della classe
 * $percorso file del database
 *//* 
function encodeJsonWOW(array $arrayAssociativo, string $percorso){

  $dbList = json_decode(file_get_contents($percorso), true);
  var_dump($dbList);

  $newElementToPush = $arrayAssociativo;
  
  $dbList[] = $newElementToPush;
  
  var_dump($dbList);
  
  $jsonString = json_encode($dbList, JSON_PRETTY_PRINT);
  file_put_contents($percorso, $jsonString);
  header("Content-Type: application/json");

}

encodeJsonWOW($newUser, "dbJson/users.json");
 */