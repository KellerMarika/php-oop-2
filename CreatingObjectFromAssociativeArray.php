<?php
/*  ini_set('xdebug.default_enable', false);
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
var_dump($prdoductList[1]);


function createForm($_associativeArray)

//____________________________________________________________________________
//ne  devo creare una versione globale in cui passo array e tipo di controllo (o scelgo la callbackfunction interna) vedi switch forse è megliio_________________________________________________________________
{

  foreach ($_associativeArray as $key => $value) {
    // var_dump("KEY: " . $key);
    //var_dump("VALUE: ".$value);
//  var_dump("VALUE-TYPE: " . gettype($value));

    /* INPUT TYPE STRING */
    if (gettype($value) === "string" || (str_ends_with($key, "price") || str_starts_with($key, "discount"))) {

      /* se password */
      if ($key === "password") {

        echo
          '<label for="' . $key . '" class="col-sm-2 col-form-label">Password</label>
        <input type="password" class="" id="' . $key . '" placeholder="Password">'; // *2  per doppio controllo p1===p2?

        /* se email */
      } else if (str_ends_with($key, "email")) {

        echo
          '<label for="' . $key . '">Email address</label>
      <input type="email" class="" id="' . $key . '" aria-describedby="' . $key . '"  name="' . $key . 'placeholder="Enter ' . $key . '">';

        /* textarea */
      } else if (str_ends_with($key, "text") || str_ends_with($key, "overview") || str_ends_with($key, "description")) {
        echo
          '<label for="' . $key . ' ">' . $key . ' </label>
      <textarea class="" id="' . $key . '"  name="' . $key . ' " placeholder="' . $key . '" rows="3"></textarea>';

      /* all text + float& */
      } else {
        echo
          '<label for="' . $key . '">' . $key . ' </label>
        <input type="text" class="" id="' . $key . ' name="' . $key . ' " placeholder="' . $key . '">';
      }


    } else if (gettype($value) === "integer") {
      echo
        '<label for="' . $key . '">' . $key . ' </label>
      <input type="number" class="" id="' . $key . ' name="' . $key . ' " placeholder="' . $key . '">';
    } else if (gettype($value) === "boolean") {
      echo
        '<label for="' . $key . '">' . $key . ' </label>
      <input type="checkbox" class="" id="' . $key . ' name="' . $key . ' " placeholder="' . $key . '">';
    } else if (gettype($value) === "array") {

      echo '<legend id="' . $key . '" class="' . $key . ' ">' . $key . '</legend>';
    }

  }
}

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




  </div>
  <script type="module" src="js/main.js"></script>
</body>

</html>

<style lang="css">

</style>