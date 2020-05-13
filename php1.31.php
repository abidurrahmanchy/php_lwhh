<?php
//null coalescs operator
$default_lat = 45.23;
$default_lon = 56.21;

$user_lat = 67.43;
//$lat = isset( $user_lat) ? $user_lat : $default_lat;
$lat = $user_lat??$default_lat;

echo  $lat;


if( isset ($user_lat)){
    $lat =$user_lat;
}else{
    $lat =$default_lat;
}
?>
