<?php
$name =0;
//$name = "true";
if( isset($name)){
echo " name is set";
}else{
echo"not set";
}
echo"\n.</br>";

if (empty($name)){
echo"name is empty";
} else{
echo" is not empty";
}
echo " \n.</br>";
if  (isset($name) && ( is_numeric($name)|| $name!='')){
echo"name is  set  and it's not empty";

}else {
echo" name is not set or  it\'s ematy";
}
?>