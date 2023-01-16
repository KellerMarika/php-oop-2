<?php
require_once __DIR__ . "/Category.php";
class Food extends Category
{
  protected string $typeName = "Toy";
  protected string $typeIcon = " fa-baseball";
  protected bool $training = false;
  protected bool $problemSolving = false;
  protected bool $puppy = false;
  protected string|null $size =null;  //select array
  protected string $material = "rubber"; //select array

  function __construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage, $_categoryName, $_categoryIcon,$_training,$_problemSolving,$puppy,$_sizel,$material)
  {

    parent::__construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage,$_categoryName,$_categoryIcon);

  }


  /*** FUNCTION GET ASSOCIATIVE ARRAY ***/
  public function getAssociativeArray()
  {

    $associatedArray = [];
    foreach ($this as $key => $value) {

      //var_dump($key, $value);
      $associatedArray[$key] = $value;
    }
    return $associatedArray;
  }

  /*** GETTER & SETTER ***/



}