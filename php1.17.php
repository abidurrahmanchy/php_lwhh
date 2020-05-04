<?php
$number =-34;
$r = $number % 2;//abs{$number}
switch($r){
	case 0:
	switch($number){
	case $number>0:
	echo "$number is a positive  evan number<br/>";
	break;
	case $number<0:
	echo " $number is a nagative evan number<br/>";
	break;
	}
	
	break;
	default:
	switch ($number) {
		case $number>0:
			// echo "<h1>$number is a positive odd number</h1><br/>" ;
			echo "$number is a positive odd number<br/>" ;
			break;
			
		case $number<0:
			echo " $number is a nagitiuve odd number<br/>";
			break;
	}
}


switch( true ){
	case ( 0 == $r && $number>0):
	echo"$number is a positive evan number";
	break;
	case ( 1==$r && $number>0):
	echo" $number is a positive odd number";
	break;
case ( 0 == $r && $number<0):
	echo"$number is a nagative evan number";
	break;
	case (-1== $r && $number<0):
	echo" $number is a nagative odd number";
}
?>