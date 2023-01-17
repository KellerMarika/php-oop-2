<?php

ini_set('xdebug.default_enable', false);
ini_set('html_errors', false);

/* products chanin */
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Food.php";
require_once "./Models/Toy.php";
require_once "./Models/Bed.php";


/* user chain */
require_once "./Models/Address.php";
require_once "./Models/User.php";
require_once "./Models/RegisteredUser.php";

/* function */
require_once "encodeJsonFunction.php";

/* ************************************   CREAZIONE  UTENTI ****************************************************** */
/* USER */
$address = new Address("via Tonnetto 5", "Pavia", "41225", "Italy");
$user = new User("Pier", "Pippo", "PierPippo89@vattelapesca.com", "15-05-1989", $address->getAssociativeArray());

encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json"); 

/* REGISTERED USER*/
$address = new Address("via Uccelliera 88", "Modena", "41225", "Italy");

$registeredUser = new RegisteredUser("Carolina", "VaInPanchina", "SopraLaPancaLaCapra.@ampa.it", "07-12-1998", $address->getAssociativeArray(), "MiSentoSpanizzina");

encodeJsonWOW($registeredUser->getAssociativeArray(), "dbJson/users.json");

/* ************************************** CREAZIONE  PRODOTTI  ****************************************************** */


$product = new Food("trippa essiccata","https://shop-cdn-m.mediazs.com/bilder/rocco/trippa/verde/di/manzo/7/800/rocco_driedchews_greentripe_500g_1000x1000_7.jpg","rocco","snack appetitoso e puzzolente","3","100","20","cane","fa-dog","masticativo","horse",null,null,true,true);
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");


$product = new Toy("Dog Activity Solitaire","https://arcaplanet.vtexassets.com/arquivos/ids/220073/trixie-dog-activity-cane-solitaire.jpg?v=1759972606","trixie","Dog activity Solitaire è un gioco d'intelligenza per il tuo cane","8",14.70,35,"cane","fa-dog",null,"L",null,null,true);
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");


$product = new Bed("Materasso Royal Blu","https://www.amershamdesigns.co.uk/uploads/images/products/large/amershamdesigns_lordlou_lordlougeorgeroyalbluevelvetpetbed_1488802086George_pile_blue1450x450.png","I Morbidosi","Morbida cuccia per cani ideale per il riposo del tuo amico","2",59.90,15,"cane","fa-dog","S","bue");
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");


/* cart */





/* stock */