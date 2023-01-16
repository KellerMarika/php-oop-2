<?php
require_once __DIR__ . "/User.php";

class RegisteredUser extends User{
  private int $ReservedtotalDiscount = 20;
  private array $wishlist;


  function __construct($_name,$_surname,$_email, $_birthDate, ) {
    parent::__construct( $_name,$_surname,$_email, $_birthDate);

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
}