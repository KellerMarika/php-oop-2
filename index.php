<?php
/* ini_set('xdebug.default_enable', false);
ini_set('html_errors', false);
 */

 /* prodicts */
require_once "./Models/Product.php";
require_once "./Models/Category.php";
require_once "./Models/Food.php";

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