<?php
require_once __DIR__ . "/User.php";

class RegisteredUser extends User
{

  private string $userName;
  private string $password;
  private int $ReservedtotalDiscount = 20;
  private array $wishlist;


  function __construct($_name, $_surname, $_email, $_birthDate, $_address, $_password)
  {

    parent::__construct($_name, $_surname, $_email, $_birthDate, $_address);

    $this->setPassword($_password);
    $this->userName = ($this->getFullName());
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


  /**
   * Get the value of ReservedtotalDiscount
   */
  public function getReservedtotalDiscount()
  {
    return $this->ReservedtotalDiscount;
  }

  /**
   * Set the value of ReservedtotalDiscount
   *
   * @return  self
   */
  public function setReservedtotalDiscount($ReservedtotalDiscount)
  {
    $this->ReservedtotalDiscount = $ReservedtotalDiscount;

    return $this;
  }

  /**
   * Get the value of wishlist
   */
  public function getWishlist()
  {
    return $this->wishlist;
  }

  /**
   * Set the value of wishlist
   *
   * @return  self
   */
  public function setWishlist($_wishedProduct)
  {
    array_push($this->wishlist, $_wishedProduct);
    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */
  public function setPassword($_password)
  {
    $this->password = $_password;

    return $this;
  }

  /**
   * Get the value of username
   */
  public function getUsername()
  {
    return $this->userName;
  }

  /**
   * Set the value of username
   *
   * @return  self
   */
  public function setUserName($_userName)
  {
    $this->userName = $_userName;

    return $this;
  }
}