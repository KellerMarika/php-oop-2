<?php
require_once __DIR__ . "/Category.php";
class Product
{

  private $id;
  protected string $name;
  protected string $img;
  protected string $brand;
  protected string $overview;
  protected int $qta = 0;
  protected bool $inStock = false;
  protected $price;
  protected float $discountPercentage = 0.0;
  protected $finalprice;
  protected int $buied = 0;
  protected bool $topSelled = false;
  protected Category|null|array $category;



  /* COSTRUTTORE */
  function __construct($_name, $_img, $_brand, $_overview, $_qta, $_price, $_discountPercentage, $_category = null)
  {
    $this->setId();
    $this->name = $_name;
    $this->img = $_img;
    $this->brand = $_brand;
    $this->overview = $_overview;
    $this->qta = $_qta;
    $this->setInStock();
    $this->setPrice($_price);
    $this->discountPercentage = $_discountPercentage;
    $this->setFinalprice();
    $this->setCategory($_category);
  }


  /**** METHODS ****/

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

  public function decrementQta()
  {
    $this->qta--;

    return $this;
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
  public function setName($_name)
  {
    $this->name = $_name;

    return $this;
  }

  /**
   * Get the value of img
   */
  public function getImg()
  {
    return $this->img;
  }

  /**
   * Set the value of img
   *
   * @return  self
   */
  public function setImg($_img)
  {
    $this->img = $_img;

    return $this;
  }

  /**
   * Get the value of brand
   */
  public function getBrand()
  {
    return $this->brand;
  }

  /**
   * Set the value of brand
   *
   * @return  self
   */
  public function setBrand($_brand)
  {
    $this->brand = $_brand;

    return $this;
  }

  /**
   * Get the value of overview
   */
  public function getOverview()
  {
    return $this->overview;
  }

  /**
   * Set the value of overview
   *
   * @return  self
   */
  public function setOverview($_overview)
  {
    $this->overview = $_overview;

    return $this;
  }


  /**
   * Get the value of inStock
   */
  public function getInStock()
  {
    return $this->inStock;
  }

  /**
   * Set the value of inStock
   *
   * @return  self
   */
  public function setInStock()
  {

    if ($this->qta > 0) {
      $this->inStock = true;
    }
    return $this;
  }


  /**
   * Get the value of qta
   */
  public function getQta()
  {
    return $this->qta;
  }

  /**
   * Set the value of qta
   *
   * @return  self
   */
  public function setQta($_qta)
  {
    $this->qta = $_qta;

    return $this;
  }


  /**
   * Get the value of price
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */
  public function setPrice($_price)
  {
    $this->price = sprintf("%.2f", $_price);

    return $this;
  }

  /**
   * Get the value of finalprice
   */
  public function getFinalprice()
  {
    return $this->finalprice;
  }

  /**
   * Set the value of finalprice
   *
   * @return  self
   */
  public function setFinalprice()
  {
    $this->finalprice = ($this->price / 100) * (100 - $this->discountPercentage);
    $this->finalprice = sprintf("%.2f", $this->finalprice);
    return $this;
  }

  /**
   * Get the value of discountPercentage
   */
  public function getDiscountPercentage()
  {
    return $this->discountPercentage;
  }

  /**
   * Set the value of discountPercentage
   *
   * @return  self
   */
  public function setDiscountPercentage($_discountPercentage)
  {
    $this->discountPercentage = intval($_discountPercentage);

    return $this;
  }

  /**
   * Get the value of buied
   */
  public function getBuied()
  {
    return $this->buied;
  }

  /**
   * Set the value of buied
   *
   * @return  self
   */
  public function setBuied()
  {
    $this->buied++;

    return $this;
  }



  /**
   * Get the value of topSelled
   */
  public function getTopSelled()
  {
    return $this->topSelled;
  }

  /**
   * Set the value of topSelled
   *
   * @return  self
   */
  public function setTopSelled($_productsList)
  {
    // $this->topSelled = ciclo su array dei prodotti, media di vendita dei prodotti;
    //if($this->buied>della media){$this->TopSelled= true};
    //va evocata ad ogni ordine

    return $this;
  }


  /**
   * Get the value of Categpry
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of Categpry
   *
   * @return  self
   */
  public function setCategory($_category)
  {
    $this->category = $_category;

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
    $this->id = uniqid("product-", );

    return $this;
  }


}

?>