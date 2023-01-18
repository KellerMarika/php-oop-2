<?php
require_once __DIR__ . "/RegisteredUser.php";

class Admin extends RegisteredUser
{
  private array $toReorderlist=[];
  //occorrerebbe mettere a db un array dei fornitori (array associativo indirizzi ecc) x smistare i prodotti in più ordini a fornitore ma non allarghiamoci
  

  function __construct($_name, $_surname, $_email, $_birthDate, $_address, $_password)
  {

    parent::__construct($_name, $_surname, $_email, $_birthDate, $_address, $_password);
    
  }

/* FUNZIONE CREATE OBJECT (WITH CLASS) FROM AN ASSOCIATIVE ARRAY */





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