<?php
require_once __DIR__ . "/Category.php";
class Food extends Category
{
  protected string $typeName = "Food";
  protected string $typeIcon = "fa-bowl-food";
  protected bool $monoprotein = false;
  protected bool $grainfree = false;
  protected bool $diet = false;
  protected bool $puppy = false;
  protected string|null $size =null;  //select array
  protected string $taste = "pollo"; //select array
  protected string $consistency = "secco"; //select array

  function __construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage, $_categoryName, $_categoryIcon, $_monoprotein,$_grainfree,$_diet,$_puppy,$_size=null,$_taste=null,$_consistency=null)
  {

    parent::__construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage,$_categoryName,$_categoryIcon);
    
    $this->setMonoprotein($_monoprotein);
    $this->setGrainfree($_grainfree);
    $this->setDiet($_diet);
    $this->setPuppy($_puppy);
    $this->setSize($_size);
    $this->setTaste($_taste);
    $this->setConsistency($_consistency);
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
   * Get the value of type
   */ 
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @return  self
   */ 
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get the value of monoprotein
   */ 
  public function getMonoprotein()
  {
    return $this->monoprotein;
  }

  /**
   * Set the value of monoprotein
   *
   * @return  self
   */ 
  public function setMonoprotein($monoprotein)
  {
    $this->monoprotein = $monoprotein;

    return $this;
  }

  /**
   * Get the value of grainfree
   */ 
  public function getGrainfree()
  {
    return $this->grainfree;
  }

  /**
   * Set the value of grainfree
   *
   * @return  self
   */ 
  public function setGrainfree($grainfree)
  {
    $this->grainfree = $grainfree;

    return $this;
  }

  /**
   * Get the value of diet
   */ 
  public function getDiet()
  {
    return $this->diet;
  }

  /**
   * Set the value of diet
   *
   * @return  self
   */ 
  public function setDiet($diet)
  {
    $this->diet = $diet;

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
   * Get the value of taste
   */ 
  public function getTaste()
  {
    return $this->taste;
  }

  /**
   * Set the value of taste
   *
   * @return  self
   */ 
  public function setTaste($taste)
  {
    $this->taste = $taste;

    return $this;
  }



  /**
   * Get the value of consistency
   */ 
  public function getConsistency()
  {
    return $this->consistency;
  }

  /**
   * Set the value of consistency
   *
   * @return  self
   */ 
  public function setConsistency($consistency)
  {
    $this->consistency = $consistency;

    return $this;
  }
}