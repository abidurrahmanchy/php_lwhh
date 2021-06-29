<?php
//$vegetables = explode('','banjal,brocolli,carrot,capsicam');
$vegetables = preg_split ('/(, |,)/','banjal, brocolli, carrot, capsicam, potato, sweet-potato');
print_r($vegetables);
//var_dump($vegetables);
$vegetablesString = join (',',$vegetables);

//echo count ($vegetablesString);
echo count ($vegetables);
?>