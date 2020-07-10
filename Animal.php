<?

abstract class Animal{
	
	protected $type;
	protected $typeOfProduction;
	protected $id;
	
	function __construct($id){
		$this->id = $id;
	}
	
	abstract public function product_collection();
	
	public function get_type(){
		return $this->type;
	}
	
	public function get_id(){
		return $this->id;
	}
	
	//get type of production
	public function get_top(){
		return $this->typeOfProduction;
	}
	
}


?>