<?php
for($i =0; $i<10; $i++){
	//echo $i;
	echo PHP_EOL ."<br/>";
	for ( $j =0; $j<$i;  $j++){
		echo "#";
	}
}
	echo PHP_EOL."<br/>";
	$i=0;
	while ( $i<10){
		$i++;
		echo $i;
		echo PHP_EOL."<br/>";

	}
echo PHP_EOL."<br/>";
$i=0;
do{
	$i++;
	echo $i; 
	echo PHP_EOL."<br/>";
}while($i<10);
echo "go to\n";
$i=0;
a: $i++;
 echo $i.PHP_EOL."<br/>";

if ($i<10)goto a;
?>
