<?php
class Category
{

  protected string $name = "All";
  protected string $icon;

  function __construct($_name, $_icon)
  {

    $this->setName($_name);
    $this->setIcon($_icon);
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
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of icon
   */
  public function getIcon()
  {
    return $this->icon;
  }

  /**
   * Set the value of icon
   *
   * @return  self
   */
  public function setIcon($icon)
  {
    $this->icon = $icon;

    return $this;
  }
}