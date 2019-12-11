<?PHP
class product
{
    public $ref;
    public $name;
    public $categ;
    public $price_gros;
    public $price;
	public $carac;
    public $photo;
	public $quantity ;

    function __construct($ref,$name,$categ,$price_gros,$price,$carac,$photo,$quantity)
    {   $this->ref = $ref; 
        $this->name = $name;
        $this->categ = $categ;
        $this->price_gros = $price_gros;
		$this->price = $price;
		$this->carac = $carac;
        $this->photo = $photo;
	 $this->quantity = $quantity ;
    }
    // getter 
    function getref()
    {
        return $this->ref;
    }
    function getname()
    {
        return $this->name;
    }
    function getcateg()
    {
        return $this->categ;
    }
  
    function getprice_gros()
    {
        return $this->price_gros;
    }
    function getprice()
    {
        return $this->price;
    }
   
	function getcarac()
    {
        return $this->carac;
    }
    function getphoto()
    {
        return $this->photo;
    }
	function getquantity()
    {
        return $this->quantity;
    }
    // setter 
     function setref($ref)
    {
        return $this->ref= $ref;
    }
    function setname($name)
    {
        return $this->name= $name;
    }
        function setcateg($categ)
    {
        return $this->categ= $categ;
    }
    function setprice_gros($price_gros)
    {
        return $this->price_gros =$price_gros;
    }
    function setprice($price)
    {
        return $this->price= $price;
    }
 
	function setcarac($carac)
    {
        return $this->carac= $carac;
    }
    function setphoto($photo)
    {
        return $this->photo= $photo;
    }
	function setquantity($quantity)
    {
        return $this->quantity= $quantity;
    }
}
  ?>
