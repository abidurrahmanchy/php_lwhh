<?php
function sum(int ...$number) :int{
	$result = 0;
	for ( $i=0;$i<count ($number);$i++){
		$result+=$number[$i];
	}
	return $result;
}
echo sum ( 2,3,5,8,9,6);
?>