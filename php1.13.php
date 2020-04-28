<?php
//divisible by 4?
//divisible by 100?
//divisible by 400?

$year = 3600;
if($year % 4 ==0 && $year % 100 ==0 && $year % 400==0){

    echo "{$year} is a leap year"; 
}
else if($year % 4 ==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "{$year} is not a leap year"; 
}
else if($year % 4 ==0){
    echo "{$year} is  not a leap year";
}
/*true && false= false
false && true= false
false && false=false
true && true=true

true || false=true
false || true= true
false || false=false
true || true=true

echo "\n";
if(false && true){
    echo " Hello world";
}
    echo " \n";
if ( false || false ){
    echo " How are you?";
}
*/
echo "\n <br>";
if(true && true){
    echo " Hello world";

}
echo " \n<br/>";
if ( true || false ){
    echo " How are you?";
}
echo " \n"."<br/>";
$year2 =2016;

if ($year2 % 4==0 &&( $year2 % 100 !=0 || $year2 % 400==0 )){
    echo "{$year2} is a leep year";
}else{
    echo "{$year2} is not leep year";
}
echo " \n<br/>";
if( true && ( false || true)){
    echo " Best of luck";
}
?>