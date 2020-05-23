<?php
function factorial ($string){
    if ($string <=1){
        return 1;
    }
    return $string *factorial( $string -1);

}
echo factorial(9);
echo"\n <\br>";
echo factorial(11);
?>

