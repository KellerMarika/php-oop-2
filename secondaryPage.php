<?php
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/User.php";
require_once "encodeJsonFunction.php";

/* users */

$user= new User("Marika","Keller","marikakeller92@gmail.com", "02-11-1992");
encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 
$user= new User("Pier","Pippo", "PierPippo89@vattelapesca.com","15-05-1989");
encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 
$user= new User("Carolina","VaInPanchina","SopraLaPancaLaCapra.@ampa.it", "07-12-1998");
encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 

/* cart */





/* stock */