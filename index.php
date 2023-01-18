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

/* Arrays */
require_once "objectsArrays.php";


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

      <div class="row row-cols-3 flex-wrap h-100 mt-5">
        <?php foreach ($stockList as $i => $product) { ?>

          <div class="col p-2">
            <div class="product-card rounded-2 d-flex p-3">
              <div class="poster-card h-100  ">
                <div class=" img-container position-relative overflow-hidden">
                  <img class="img-fluid" src="<?php echo $product->getImg() ?>"
                      alt="  <?php echo $product->getName() ?> ">
                  <i
                      class='position-absolute start-0 top-0 fa-solid p-2 <?php echo ($product->getCategory()->getIcon()) ?? "" ?>'></i>
                </div>



                <div class="card-infos p-2 text-center">

                  <div class="card-options  border-bottom d-flex justify-content-between  ">
                    <button class="btn"><i class="fa-solid fa-heart"></i></button>
                    <button class="btn"><i class="fa-solid fa-cart-plus"></i></button>
                  </div>

             
                    <div class="small pt-2  <?php echo ($product->getInStock()) ? "text-success" : "text-danger" ?> ">
                      Disponibilità:
                      <?php echo ($product->getInStock()) ? $product->getInStock() . "pezzi" : "esaurito" ?></div>
             


                  <div class=" gap-2 py-2">
                    <div
                        class=' "small" <?php echo ($product->getDiscountPercentage()) ? "text-decoration-line-through " : "" ?>'>
                      <?php echo ($product->getPrice()) . "€"; ?>
                    </div>

                    <?php echo ($product->getDiscountPercentage()) ? '<div class="text-danger fw-bolder fs-3">' . $product->getfinalprice() . '€</div>' : "" ?>

                    <?php echo ($product->getDiscountPercentage()) ? '<div class="text-light fw-bolder rounded-5 bg-danger px-3 py-1 mt-2 d-inline-block"> - ' . $product->getDiscountPercentage() . '%</div>' : "" ?>
                  </div>
                </div>

              </div>


              <div class="card-info h-100 bg-light align-items-baseline p-2 ps-4">


                <h5 class="title ">
                  <?php echo $product->getName() ?>
                </h5>


                <p class="brand text-uppercase small ">
                  <?php echo $product->getBrand() ?>
                </p>
                <p>
                  <?php echo $product->getOverview() ?>
                </p>

                <div class="type-infos">
                  <?php if (method_exists($product, "getTypeName")) { ?>
                    <i

                        class='position-absolute end-0 bottom-0 fa-solid p-2 <?php echo ($product->getTypeIcon()) ?>'></i>
                    <ul class="m-0 p-0 ps-2 ">
                      <?php if ($product->getTypeName() === "Food") {
                        ?>
                        <li>Consistenza: <?php echo $product->getConsistency() ?? "n/d" ?> </li>
                        <li>Gusto: <?php echo $product->getTaste() ?? " n/d" ?> </li>
                        <li>Taglia: <?php echo $product->getSize() ?? " n/d" ?> </li>
                        <li>Puppy: <?php echo $product->getPuppy() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                        <li>Monoproteico: <?php echo $product->getMonoprotein() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                        <li>Grain Free: <?php echo $product->getGrainfree() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                        <li>Dietetico: <?php echo $product->getDiet() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>

                      <?php } else if ($product->getTypeName() === "Toy") {
                        ?>
                          <li>Materiale: <?php echo $product->getMaterial() ?? " n/d" ?> </li>
                          <li>Taglia: <?php echo $product->getSize() ?? " n/d" ?> </li>
                          <li>Puppy: <?php echo $product->getPuppy() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                          <li>Addestramento/Sport: <?php echo $product->getTraining() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                          <li>Problemsolving: <?php echo $product->getProblemsolving() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>

                      <?php } else if ($product->getTypeName() === "Bed") {
                        ?>
                            <li>Materiale: <?php echo $product->getMaterial() ?? " n/d" ?> </li>
                            <li>colore: <?php echo $product->getColor() ?? " n/d" ?> </li>
                            <li>Taglia: <?php echo $product->getSize() ?? " n/d" ?> </li>
                            <li>Da esterno: <?php echo $product->getOutdoor() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                            <li>Estivo: <?php echo $product->getSummery() ? ' <i class="fa-solid fa-check text-success"></i>' : ' <i class="fa-solid fa-xmark text-danger"></i>' ?> </li>
                          </ul>
                    <?php } ?>
                  <?php } ?>
                </div>
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
  .img-container {
    width: 210px;
    max-height: 200px;
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
    aspect-ratio: 1/1;
    box-shadow: 0px 2px 10px grey;
  }

  .poster-card {
    border-right: 1px solid lightgrey;
  }
</style>