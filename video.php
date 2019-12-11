<?PHP
class video{
	private $id;
	private $name ;
	private $description;
	function __construct($id,$name,$description)
	{
		$this->id=$id;
		$this->name=$name;
		$this->description=$description;
	}
	
	function getid(){
		return $this->id;
	}
	function getname(){
		return $this->name;
	}
	function getdescription(){
		return $this->description;
	}

	function setid($id){
		$this->id=$id;
	}
	function name($name){
		$this->name=$name;
	}
	function description($description){
		$this->description=$description;
	}
	
}

?>