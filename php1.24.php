<?php
$string =11;
for( $i = $string, $factorial = 1; $i >1; $i--){
    //$factorial = $factorial * $i;
    $factorial  *= $i;
}
printf ( "factorial of %d is %d" ,$string, $factorial);
?>