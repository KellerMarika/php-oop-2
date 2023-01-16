<?php
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/User.php";
require_once "encodeJsonFunction.php";

$user= new User("Marika","Keller", "02-11-1992");
encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 
$user= new User("Piero","Pippo", "15-05-1989");
encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 
$user= new User("Carolina","VaInPanchina", "07-12-1998");
encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 