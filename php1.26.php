<?php
for ( $i =0 ;$i<100 ;$i+=7){
echo $i."\n.</br>";
}

for ( $i =0; $i<100; $i++){
	if ( $i % 7 ==0) echo $i."\n.</br>";
	
	if ( $i % 11 ==0) echo $i."\n.</br>";
	
}
?>
<?php
for ( $i =0, $j =0; $i<100; $i+=7, $j +=11){
	echo $i ."\n.</br>";
	echo $j <100 ? $j ."\n.</br>":'';
}
?>
