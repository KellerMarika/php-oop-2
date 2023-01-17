<?php
require_once __DIR__ . "/Product.php";
class Toy extends Product
{
  protected string $typeName = "Toy";
  protected string $typeIcon = " fa-baseball";
  protected string $material = "rubber"; //select array
  protected string|null $size =null;  //select array
  protected bool $puppy = false;
  protected bool $training = false;
  protected bool $problemSolving = false;




  function __construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage, $_category, $_material,$_size,$_puppy,$_training,$_problemSolving)
  {

    parent::__construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage,$_category);

    if($_material){$this->setMaterial($_material);}
    if($_size){$this->setSize($_size);}
    if($_puppy){$this->setPuppy($_puppy);}
    if($_training){$this->setTraining($_training);}
    if($_problemSolving){$this->setProblemSolving($_problemSolving);}

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
   * Get the value of puppy
   */ 
  public function getPuppy()
  {
    return $this->puppy;
  }

  /**
   * Set the value of puppy
   *
   * @return  self
   */ 
  public function setPuppy($puppy)
  {
    $this->puppy = $puppy;

    return $this;
  }

  /**
   * Get the value of training
   */ 
  public function getTraining()
  {
    return $this->training;
  }

  /**
   * Set the value of training
   *
   * @return  self
   */ 
  public function setTraining($training)
  {
    $this->training = $training;

    return $this;
  }

  /**
   * Get the value of problemSolving
   */ 
  public function getProblemSolving()
  {
    return $this->problemSolving;
  }

  /**
   * Set the value of problemSolving
   *
   * @return  self
   */ 
  public function setProblemSolving($problemSolving)
  {
    $this->problemSolving = $problemSolving;

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
}