<?php

	for ( $i=0;$i<10;$i++){
	
	echo $i;
	echo "\n</br>";

	if ( $i ==6){
	break;
}
}
echo"======"."\n</br>";

for ( $i=20;$i<50;$i++){
	if ( $i % 13 ==0){
	echo $i;
	echo "\n</br>";
}
}
echo"======"."\n</br>";
for ( $i =20; $i < 30; $i++){
	if ( $i <27){
		continue;
	}
	echo $i;
	echo"\n</br>";
}
?>