<?php

//ternary operator
$number = 49;
if ( 49 ==$number){
    echo "forty-nine ";
}else{
    echo" A number";
}
echo"\n <br> ";

$numberInWord = ( 49 == $number) ? "forty-nine" : " A number";
echo $numberInWord;

echo"\n <br/>";
if ( $number % 2 ==0){
    echo " even number";
}else{
    echo " odd number";
}
echo"\n";
echo "<br/>";
$result =( $number % 2 ==0) ? "even number" : "odd number";
echo $result;
?>