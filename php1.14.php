<?php
$condition1 =true;
$condition2 =true;
$condition3 =true;
if( $condition1){
    if( $condition2){
        if($condition3){
            echo" Hello!";
        }else{
            echo "Number 1";

        }
    }else{
        echo "Number 2";
    }
}else{
    echo "Number 3";
}
echo "\n<br>";
$conditionX =true;
$conditionY =true; // Defined or Call
$conditionZ =true;
if($conditionX && $conditionY &&$conditionZ ){ //সব ভেরিয়েবল এর মান যদি সমান / true  হয়।
    echo "Hello!";
}elseif( $conditionX && $conditionY){
    echo " Number 1";
}elseif( $conditionX){
    echo " Number 2";
}else{
    echo " Number 3";
}
?>