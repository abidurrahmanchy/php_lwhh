<?php
//include_once "function.php";
function evenorodd($number){//parameter
	if ( $number % 2 == 0){
	return true;
	}
	return false;
}
$string =31;
if ( evenorodd($string)){//argument
	echo " {$string} is a even number";
}else{
echo " {$string} is a odd number";	
}
?>
