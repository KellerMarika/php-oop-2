<?php
require_once __DIR__ . "/Product.php";
class Category extends Product
{
  protected string $categoryName; //"gatto"||"cane"
  protected string $CategoryIcon;

  function __construct($_name,$_img,$_brand,$_overview,$_qta,$_price,$_discountPercentage, $_categoryName,$_categoryIcon)
  {

    parent::__construct($_name,$_img,$_brand,$_overview,$_qta,$_price,$_discountPercentage);
    $this->setCategoryName($_categoryName);
    $this->setCategoryIcon($_categoryIcon);
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


  /**
   * Get the value of categoryName
   */ 
  public function getCategoryName()
  {
    return $this->categoryName;
  }

  /**
   * Set the value of categoryName
   *
   * @return  self
   */ 
  public function setCategoryName($_categoryName)
  {
    $this->categoryName = $_categoryName;

    return $this;
  }

  /**
   * Get the value of CategoryIcon
   */ 
  public function getCategoryIcon()
  {
    return $this->CategoryIcon;
  }

  /**
   * Set the value of CategoryIcon
   *
   * @return  self
   */ 
  public function setCategoryIcon($_CategoryIcon)
  {
    $this->CategoryIcon = $_CategoryIcon;

    return $this;
  }
}