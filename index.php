<?php
/* ini_set('xdebug.default_enable', false);
ini_set('html_errors', false);
 */

 /* prodicts */
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Food.php";
require_once "./Models/Toy.php";
require_once "./Models/Bed.php";

/* users */
require_once "./Models/Address.php";
require_once "./Models/User.php";
require_once "./Models/REgisteredUser.php";

/* functions */
require_once "encodeJsonFunction.php";



$product = new Product("trippa essiccata","https://shop-cdn-m.mediazs.com/bilder/rocco/trippa/verde/di/manzo/7/800/rocco_driedchews_greentripe_500g_1000x1000_7.jpg","rocco","snack appetitoso e puzzolente","3","100","20");
var_dump($product);
$product = new Category("trippa essiccata","https://shop-cdn-m.mediazs.com/bilder/rocco/trippa/verde/di/manzo/7/800/rocco_driedchews_greentripe_500g_1000x1000_7.jpg","rocco","snack appetitoso e puzzolente","3","100","20","gatto","fa-cat");
var_dump($product);
$product = new Food("trippa essiccata","https://shop-cdn-m.mediazs.com/bilder/rocco/trippa/verde/di/manzo/7/800/rocco_driedchews_greentripe_500g_1000x1000_7.jpg","rocco","snack appetitoso e puzzolente","3","100","20","cane","fa-dog","masticativo","horse",null,null,true,true);
var_dump($product);
$product = new Toy("Dog Activity Solitaire","https://arcaplanet.vtexassets.com/arquivos/ids/220073/trixie-dog-activity-cane-solitaire.jpg?v=1759972606","trixie","Dog activity Solitaire è un gioco d'intelligenza per il tuo cane","8",14.70,35,"cane","fa-dog",null,"L",null,null,true);
var_dump($product);

$product = new Bed("Materasso Royal Blu","https://www.amershamdesigns.co.uk/uploads/images/products/large/amershamdesigns_lordlou_lordlougeorgeroyalbluevelvetpetbed_1488802086George_pile_blue1450x450.png","I Morbidosi","Morbida cuccia per cani ideale per il riposo del tuo amico","2",59.90,15,"cane","fa-dog","S","bue");
var_dump($product);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- indispensabile per far funzionare le media-queries -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TITOLO</title>


  <!-- font-family: fontawesome -->
  <script src="https://kit.fontawesome.com/a19b158346.js" crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

  <!-- vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- Axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class=" bg-black text-light ">
  <div id="app">

<?php  ?>
    
  </div>

  <script type="module" src="js/main.js"></script>
  


</body>

</html>

<style lang="scss">
  
</style>