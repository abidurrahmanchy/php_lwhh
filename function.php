<? 
/*
*delermines if the aragument is even or odd
*/
function evenorodd($number){//parameter
	if ( $number % 2 == 0){
	return true;
	}
	return false;
}

//function factorial (int $n){
function factorial ($n){

	if (gettype ($n)!= "integer"){
		return "invalid";
	}
	
	$result = 1;
	for ( $i =$n; $i>1;$i--){
		$result *= $i;
	}
	return $result;
}
function serve($foodType = "coffee", $numberofItems= "1 cup"){

	echo "{$numberofItems} of {$foodType} has/have been serve";
	 
}