<?php
$i =0;
while ( $i<5){
	echo $i;
	echo"\n</br>";
	$i++;
}
echo " ======\n</br>";
$j = 0;
while ( $j++ <5){
	echo $j;
	echo "\n</br>";

}
echo"=======\n</br>";
$j =0;
while ( ++$j <5){
	echo $j;
	echo "\n</br>";

} 
echo " ======\n</br>";
$x = $y =5;
$x = $y++;
echo $x.":".$y;
?>