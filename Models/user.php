<?php

//require_once "../encodeJsonFunction.php";
class User
{
  private string $id;
  protected string $name;
  protected string $surname;
  protected string $email;
  protected array $birthDate;
  protected  $address;

  protected array $cart = [];//pusho array associativi degli oggetti al click del bottone cart
  protected array $orders = [];//pusho id ordine





  /* COSTRUTTORE */
  function __construct($_name, $_surname, $_email, $_birthDate, $_address)
  {
    $this->setId();
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->setBirth_date($_birthDate);
    $this->setAddress($_address);


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



  /*** FUNCTION GET FULL NAME ***/
  public function getFullName()
  {
    return $this->getName() . " " . $this->getSurname();
  }

  /*** GETTER & SETTER ***/


    /**
   * Get the value of cart
   */
  public function getCart()
  {
    return $this->cart;
  }

  /**
   * Set the value of cart
   *
   * @return  self
   */
  public function setCart($_jsonCart) 

  {


    $this->cart= $_jsonCart;

    return $this;
  }


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
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($_email)
  {
    $this->email = $_email;

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
    $this->birthDate = (array) new DateTime($_birthDate);

    return $this;
  }

  /**
   * Get the value of address
   */ 
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress($_address)
  {
    $this->address =  $_address;
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

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId()
  {
    $this->id = uniqid("user-");

    return $this;
  }

}
