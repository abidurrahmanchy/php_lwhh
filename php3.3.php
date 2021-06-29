<?php
/*$student =[
	'3'=> 'nafige',
	'5'=>'rabi',
	'7'=>'rafik'

];
echo $student[3];
*/
$foods =[
	'vagetable' => 'brinjal, brocolli, capsican',
	'fruits'=> 'orange, banana, apple',
	'drink'=> 'water, milk',
];
//$foods ['drinks'] = $foods ['drinks'].",orange juice";
$foods ['drinks'] = ",orange juice";

/*
echo $foods[ 'vagetable'];
for ($i=0;$i<count ($food);$i++){
	echo $food($i); 
}

foreach ( $foods as $key=> $value){
	echo $key."=".$value." \n";
}
$keys = array_keys($foods);
for( $i=0;$i<count($keys);$i++){
$key =$keys[ $i];
echo $foods[$key]."\n";
}
$values =array_values(foods);
for( $i=0;$i<count($values);$i++){
$value=$values[$i];
echo $values."\n";
}*/
?>$keys = array_keys($foods);
for( $i=0;$i<count($keys);$i++){
$key =$keys[ $i];
echo $foods[$key];
?>