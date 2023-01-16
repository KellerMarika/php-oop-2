<?php

class Address
{
  
  protected string $residence;
  protected string $city;
  protected int $zipCode;
  protected string $country;
 
  function __construct( $_residence,$_city, $_zipCode, $_country)
  {
    $this->residence = ($_residence);
    $this->setCity($_city);
    $this->zipCode = ($_zipCode);
    $this->country = ($_country);
  }

  public function getFullAddress()
  {
    return $this->residence . ", " . $this->city.", " . $this->zipCode .", ". $this->country;
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
   * Get the value of city
   *
   * @return void
   */
  public function getCity()
  {
    return $this->city;
  }

  /**
   * Set the value of city
   *
   */
  public function setCity($_city)
  {
    $this->city =strtoupper($_city);
  }

  /**
   * Get the value of zipCode
   *
   */
  public function getZipCode()
  {
    return $this->zipCode;
  }

  /**
   * Set the value of zipCode
   *
   */
  public function setZipCode($_zipCode)
  {
    $this->zipCode = $_zipCode;
  }

  /**
   * et value of country
   *
   */
  public function setCountry($_country)
  {
    $this->country = $_country;
  }

  /**
   * Get value of country
   *
   */
  public function getCountry()
  {
    return $this->country;
  }

  /**
   * Set value of residence
   *
   */
  public function setresidence($_residence)
  {
    $this->residence = $_residence;
  }

  /**
   * et value of residence
   */
  public function getresidence()
  {
    return $this->residence;
  }

  private function validateString($string)
  {
  }
}