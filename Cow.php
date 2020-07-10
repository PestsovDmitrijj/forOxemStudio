<?

class Cow extends Animal{
	
	protected $type = 'Cow';
	protected $typeOfProduction = 'liters of milk';
	
	public function product_collection(){
		return floatval(rand(800, 1200))/100;
	}
	
}

?>