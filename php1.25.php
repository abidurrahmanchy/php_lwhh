<?php
$string =13;
$result =1;

$j =1;
for ( $string =1; $string <=10; $string++){
	$result *=$string;
	$j++;
	echo " factorial of {$string} is {$result} \n.</br>";
}
echo "total {$j} string of operations \n";

for ( $i = $string; $i > 1; $i--){
	$result *= $i;
}
echo " factorial of {$string} is {$result} \n.</br>";

for ( $string = 1; $string<= 10; $string++){
	$result = 1;
	for( $i = $string; $i > 1; $i--){
		$result*= $i;
		$j++;
	}
	echo " factorial of {string} is {$result} \n.</br>";

}
echo "total {$j} string of operations \n.</br>";

?>