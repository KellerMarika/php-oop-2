<?php
class User {
  protected string $name;
  protected string $surname;

  protected DateTime $birthDate;

  protected array $orders=[];

/* COSTRUTTORE */
function __construct($_name,$_surname, $_birthDate){

  $this->name=$_name;
  $this->surname=$_surname;
  $this->setBirth_date($_birthDate);
}

public function getFullName(){
  return $this->getName() . " " .$this->getSurname();
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
   * Get the value of surname
   */ 
  public function getSurname()
  {
    return $this->surname;
  }

  /**
   * Set the value of surname
   *
   * @return  self
   */ 
  public function setSurname($surname)
  {
    $this->surname = $surname;

    return $this;
  }

  /**
   * Get the value of birth_date
   */ 
  public function getBirth_date()
  {
    return $this->birthDate;
  }

  /**
   * Set the value of birth_date
   *
   * @return  self
   */ 
  public function setBirth_date($_birthDate)
  {
    $this->birthDate = new DateTime($_birthDate);

    return $this;
  }



  /**
   * Get the value of orders
   */ 
  public function getOrders()
  {
    return $this->orders;
  }

  /**
   * Set the value of orders
   *
   * @return  self
   */ 
  public function setOrders($_orders)
  {
    $this->orders = $_orders;

    return $this;
  }
}