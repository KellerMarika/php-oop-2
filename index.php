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


/* api */
$prdoductList = json_decode(file_get_contents("dbJson/stock.json"), true);
//var_dump($prdoductList);

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

<body class=" bg-light ">
  <div id="app">





    <section id="header" class="bg-dark">
      <!-- componente user-nav -->
      <div id="user-nav" class="black-nav">
        <div class="container">
          <ul class="list-unstyled d-flex gap-5 m-0 align-items-center">
            <li class="list-unstyled"> <a class="d-inline-block p-2" href="login.php">Login</a></li>
            <li class="list-unstyled"><a class="d-inline-block p-2" href="wishlist.php">wishlist</a></li>
            <li class="list-unstyled"><a class="d-inline-block p-2" href="cart.php">Cart</a></li>
          </ul>
        </div>
    </section>

    <!-- componente product-nav -->
    <section class="bg-green">
      <div class="d-flex container justify-content-between">
        <div id="products-nav" class="green-nav d-flex">
          <div class="d-flex align-items-end">
            <img src="img/pet-shop-logo.webp" alt="pet-shop-logo" class="logo">
            <h1 class="title-nav text-dark "> Pet Store</h1>
          </div>
        </div>


        <!--componente classi  -->

        <ul class="list-unstyled  d-flex m-0 align-items-center align-self-end mb-3 justify-content-between">

          <li class="list-unstyled flex-fill"> <button class="d-inline-block p-2 px-5 fs-4 text-dark fw-bolder"
                href="login.php">cane</button></li>
          <!-- ciclo sulle voci dell'array -->

          <li class="list-unstyled flex-fill "><button class="d-inline-block p-2 px-5 fs-4 text-dark fw-bolder"
                href="wishlist.php">gatto</button></li>
        </ul>
      </div>
    </section>

    <div class="container">

      <div class="row row-cols-5 flex-wrap h-100 mt-5">
        <?php foreach ($prdoductList as $product) { ?>


          <div class="col p-2">
            <div class="product-card rounded-1">

              <img class="img-fluid" src="<?php echo $product["img"] ?>" alt="  <?php echo $product["name"] ?> ">

              <h6 class="title ">
                <?php echo $product["name"] ?>
              </h6>
              <p class="brand text-uppercase small">
                <?php echo $product["brand"] ?>
              </p>

              <ul>
                <li class="<?php echo ($product["inStock"]) ? "text-success" : "text-danger" ?> "> Disponibilità:
                  <?php echo ($product["inStock"]) ? $product["inStock"] . "pezzi" : "esaurito" ?></li>
              </ul>

              <div class="d-flex align-items-center justify-content-between"> 
              <span
                  class=' "small" <?php echo ($product["discountPercentage"]) ? "text-decoration-line-through" : "" ?>'>
                <?php echo ($product["price"]). "€";  ?>
              </span>

              <?php echo  ($product["discountPercentage"]) ? '<span class="text-danger fw-bolder fs-5">'.  $product["finalprice"] .'€</span>':"" ?>

              <?php echo  ($product["discountPercentage"]) ? '<span class="text-light fw-bolder rounded-5 bg-danger px-1"> - '.  $product["discountPercentage"] .'%</span>':"" ?>
              </div>

              <div class="card-options d-flex justify-content-between">
              <button><i class="fa-solid fa-heart"></i></button>
                <button><i class="fa-solid fa-cart-plus"></i></button>
              </div>

             
 









            </div>
          </div>
        <?php } ?>
      </div>
    </div>








  </div>
  <script type="module" src="js/main.js"></script>
</body>

</html>

<style lang="css">
  * {
    border: 1px solid red
  }

  a {
    text-decoration: none;
    color: white;
  }

  a:hover {
    color: greenyellow;
  }

  #user-nav {
    height: 50px;
  }

  .bg-green {
    height: 150px;
    background-color: #ceff9e;
    box-shadow: 5px 0px 10px grey;
  }

  .logo {
    transform: scale(75%);
  }

  .title-nav {
    font-size: 3rem;
  }

  .col {}

  .product-card {
    aspect-ratio: 1/1.2
  }
</style>