<?php
require_once __DIR__ . "/Product.php";
class Bed extends Product
{
  protected string $typeName = "Bed";
  protected string $typeIcon = " fa-couch";
  protected string|null $size = null; //select array
  protected string $color= "mixed";//select array
  protected string $material = "cotton"; //select array
  
  protected bool $outdoor = false;
  protected bool $summery = false;




  function __construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage, $_category,$_size, $_color=null, $_material=null,  $_outdoor=null, $_summery=null)
  {

    parent::__construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage,$_category);

    if($_color){
      $this->setColor($_color);
    }

    if ($_material) {
      $this->setMaterial($_material);
    }
    if ($_size) {
      $this->setSize($_size);
    }
    if ($_outdoor) {
      $this->setOutdoor($_outdoor);
    }
    if ($_summery) {
      $this->setSummery($_summery);
    }
  }


  /*** FUNCTION GET ASSOCIATIVE ARRAY ***/
  public function getAssociativeArray()
  {
    $associatedArray = [];
    foreach ($this as $key => $value) {

      if (is_object($value)) {

        $associatedArray[$key] = $value->getAssociativeArray();
      } else {
        $associatedArray[$key] = $value;

      }
    }
    return $associatedArray;
  }

/*** GETTER & SETTER ***/




  /**
   * Get the value of typeName
   */ 
  public function getTypeName()
  {
    return $this->typeName;
  }

  /**
   * Set the value of typeName
   *
   * @return  self
   */ 
  public function setTypeName($typeName)
  {
    $this->typeName = $typeName;

    return $this;
  }

  /**
   * Get the value of typeIcon
   */ 
  public function getTypeIcon()
  {
    return $this->typeIcon;
  }

  /**
   * Set the value of typeIcon
   *
   * @return  self
   */ 
  public function setTypeIcon($typeIcon)
  {
    $this->typeIcon = $typeIcon;

    return $this;
  }

  /**
   * Get the value of color
   */ 
  public function getColor()
  {
    return $this->color;
  }

  /**
   * Set the value of color
   *
   * @return  self
   */ 
  public function setColor($color)
  {
    $this->color = $color;

    return $this;
  }

  /**
   * Get the value of material
   */ 
  public function getMaterial()
  {
    return $this->material;
  }

  /**
   * Set the value of material
   *
   * @return  self
   */ 
  public function setMaterial($material)
  {
    $this->material = $material;

    return $this;
  }

  /**
   * Get the value of size
   */ 
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   *
   * @return  self
   */ 
  public function setSize($size)
  {
    $this->size = $size;

    return $this;
  }

  /**
   * Get the value of outdoor
   */ 
  public function getOutdoor()
  {
    return $this->outdoor;
  }

  /**
   * Set the value of outdoor
   *
   * @return  self
   */ 
  public function setOutdoor($outdoor)
  {
    $this->outdoor = $outdoor;

    return $this;
  }

  /**
   * Get the value of summery
   */ 
  public function getSummery()
  {
    return $this->summery;
  }

  /**
   * Set the value of summery
   *
   * @return  self
   */ 
  public function setSummery($summery)
  {
    $this->summery = $summery;

    return $this;
  }
}