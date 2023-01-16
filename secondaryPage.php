<?php

ini_set('xdebug.default_enable', false);
ini_set('html_errors', false);

require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Address.php";
require_once "./Models/User.php";
require_once "./Models/RegisteredUser.php";

require_once "encodeJsonFunction.php";

/* USER */
$address = new Address("via Tonnetto 5", "Pavia", "41225", "Italy");
$user = new User("Pier", "Pippo", "PierPippo89@vattelapesca.com", "15-05-1989", $address->getAssociativeArray());

encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 

/* REGISTERED USER*/
$address = new Address("via Uccelliera 88", "Modena", "41225", "Italy");

$registeredUser = new RegisteredUser("Carolina", "VaInPanchina", "SopraLaPancaLaCapra.@ampa.it", "07-12-1998", $address->getAssociativeArray(), "MiSentoSpanizzina");

encodeJsonWOW($registeredUser->getAssociativeArray(), "dbJson/users.json");

/* cart */





/* stock */