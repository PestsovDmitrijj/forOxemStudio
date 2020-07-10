<?

class Crib{
	
	private $crib = [
		'Cow' => array(),
		'Hen' => array()
	];
	
	public function add_animal($animal_type){
		$success = false;

		foreach( $this->crib as $key => $value ){
			if( $key == $animal_type ){
				array_push( $this->crib[$key], new $key(count($this->crib[$key])) );
				$success = true;
			}
		}
		if( $success == false ){
			echo 'wrong type of animals';
		}
	}
	
	public function check_animals($animal){
		return $this->crib[$animal];
	}
	
	public function get_production(){
		$result = array();
		foreach( $this->crib as $key => $value ){
			$res = 0;
			$typeP = '';
			foreach( $value as $obj ){
				$res += $obj->product_collection();
				$typeP = $obj->get_top();
			}
			$result[$key][0] = $res;
			$result[$key][1] = $typeP;
		}
		return $result;
	}
	
	
}

?>