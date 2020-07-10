<?

class Hen extends Animal{
	
	protected $type = 'Hen';
	protected $typeOfProduction = 'pcs of eggs';
	
	public function product_collection(){
		return rand(0, 1);
	}
	
}

?>