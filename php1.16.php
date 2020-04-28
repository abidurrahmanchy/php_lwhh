<?php
$number = 32;
$R = $number % 2;
switch($R){
    case 0:
    echo "$number is an evan number \n";
break;
 default;
echo " $number is an odd number \n";
}
echo " \n"."<br>";
$color = " yellow";
switch( $color){
    case'red';
    echo" red is our favarit colur";
break;
case'yellow';
echo " yellow is our favarit  colour";
break;
case'black';
echo" black is not our favarit colour";
break;
default:
echo "this colour is ok";
}
echo"\n <br>";
if ( 'red'==$color || 'blue' ==$color){
    echo " red is my favarit color";
}else{
    echo " blue is my favarit color"; 

}