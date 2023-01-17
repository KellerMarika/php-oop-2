<?php

/* ini_set('xdebug.default_enable', false);
ini_set('html_errors', false); */

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
/* $address = new Address("via Tonnetto 5", "Pavia", "41225", "Italy");
$user = new User("Pier", "Pippo", "PierPippo89@vattelapesca.com", "15-05-1989", $address->getAssociativeArray());

encodeJsonWOW($user->getAssociativeArray(), "dbJson/users.json");  */

/* REGISTERED USER*/
/* $address = new Address("via Uccelliera 88", "Modena", "41225", "Italy");

$registeredUser = new RegisteredUser("Carolina", "VaInPanchina", "SopraLaPancaLaCapra.@ampa.it", "07-12-1998", $address->getAssociativeArray(), "MiSentoSpanizzina");

encodeJsonWOW($registeredUser->getAssociativeArray(), "dbJson/users.json"); */

/* *********************************** CREAZIONE  CATEGORIE  (NO JSON -tristezza) ********************************************* */
$categories=[];

$categories["cat"]=new Category("cat","fa-cat");
$categories["dog"]=new Category("dog","fa-dog");

var_dump($categories);

/* ************************************** CREAZIONE  PRODOTTI (NO JSON -tristezza) *********************************************** */

$stockList=[];
$stockList[]= new Product("Salviette Detergenti Multiuso","https://www.biogenya.it/wp-content/uploads/2020/07/Pet-Pharma-occhi-musetto_048030_800x800.jpg","Inodorina","Le Salviette Detergenti Multiuso Lovedì sono la soluzione ideale per detergere, deodorare e profumare il tuo cane ","50","2.90","0",$categories["cat"]);

var_dump($stockList);





/* ************************************** CREAZIONE  PRODOTTI  ****************************************************** */
/* $product = new Product("Salviette Detergenti Multiuso","https://www.biogenya.it/wp-content/uploads/2020/07/Pet-Pharma-occhi-musetto_048030_800x800.jpg","Inodorina","Le Salviette Detergenti Multiuso Lovedì sono la soluzione ideale per detergere, deodorare e profumare il tuo cane ","50","2.90","0");
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");

$product = new Category("Lettiera Biokat's Natural Classic","https://arcaplanet.vtexassets.com/arquivos/ids/266859/lettiera-biockats-classic.jpg?v=637793331475200000","Biokat's","Lettiera agglomerante Biokat's Natural Classic in argilla naturale al 100%","0","6.38","0","cat","fa-cat");
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");

$product = new Food("trippa essiccata","https://shop-cdn-m.mediazs.com/bilder/rocco/trippa/verde/di/manzo/7/800/rocco_driedchews_greentripe_500g_1000x1000_7.jpg","rocco","snack appetitoso e puzzolente","0","100","20","dog","fa-dog","masticativo","horse",null,null,true,true);
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");


$product = new Toy("Gioco Bacchetta per Gatto con Topini","https://arcaplanet.vtexassets.com/arquivos/ids/273144/croci-gioco-gatto-topini.jpg?v=1759626509","trixie","gioco per gatti con simpatici topini con un colorato toino in corda per far divertire il tuo felino.","14",2.50,10,"cat","fa-cat",null,"L",null,null,true);
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");

$product = new Toy("Dog Activity Solitaire","https://arcaplanet.vtexassets.com/arquivos/ids/220073/trixie-dog-activity-cane-solitaire.jpg?v=1759972606","trixie","Dog activity Solitaire è un gioco d'intelligenza per il tuo cane","8",14.70,35,"dog","fa-dog",null,"L",null,null,true);
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json");


$product = new Bed("Materasso Royal Blu","https://www.amershamdesigns.co.uk/uploads/images/products/large/amershamdesigns_lordlou_lordlougeorgeroyalbluevelvetpetbed_1488802086George_pile_blue1450x450.png","I Morbidosi","Morbida cuccia per cani ideale per il riposo del tuo amico","2",59.90,5,"dog","fa-dog","S","bue");
encodeJsonWOW($product->getAssociativeArray(), "dbJson/stock.json"); 
 */

/* cart */





/* stock */