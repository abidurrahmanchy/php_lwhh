<?php
$string =7;
$number =4;

function greaterOrSmaller($string,$number){
	if ($string>$number){
		return 1;
	}else if ($string ==$number){
		return 0;

	}else{
		return -1;
	}
}
if(greaterOrSmaller($string,$number)==1){
	echo " {$string } is greater than {$number}";

}else if (greaterOrSmaller($string,$number)==0 ){
	echo " {$string } is equal to {number}";
}else if (greaterOrSmaller($string,$number)==-1){
	echo" {$string} is smaller than to {number}";
}
?>