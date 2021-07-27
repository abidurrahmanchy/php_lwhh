<?php
$fruits = array('apple','banana','orange','plum','dates','mango',);


//$somefruites = array_slice($fruits,2);
$somefruites = array_slice($fruits,2, 6,true);
//$somefruites = array_slice($fruits,-2,-1,true);
print_r($somefruites);
/*$random= array("a"=>12,"b"=>23,"c"=>64,"d"=> 66,12=> 77, "e"=> 88);
$randomdata= array_slice($random,3,true);


print_r($randomdata);*/
?>