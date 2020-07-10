<?
include 'includer.php';
echo "Welcome to the uncle Bob farm!\n";
$crib = new Crib();
for( $i = 0; $i < 10; $i++ ){
	$crib->add_animal('Cow');
}
for( $i = 0; $i < 20; $i++ ){
	$crib->add_animal('Hen');
}
echo "Checking id of animals:\n";
$cows = $crib->check_animals('Cow');
$hens = $crib->check_animals('Hen');

echo 'Cows: ';
foreach($cows as $value) print $value->get_id().' ';
echo "\nHens: ";
foreach($hens as $value) print $value->get_id().' ';
echo "\n";
echo "Now we starting product collection!\n";
$prods = $crib->get_production();
foreach( $prods as $key => $value ){
	print $key.' => '.$value[0]." ".$value[1]."\n";
}
echo "Thanks!";

?>