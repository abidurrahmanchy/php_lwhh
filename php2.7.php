<?php
//recursive function//recursion
function printstring ($i){
    if ($i>=10){
        return;

    }
    echo $i."\n";
    $i++;
    printstring($i);
}
printstring(0);
function printNumber( $counter,$end,$stepping){
    if ($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber( $counter,$end,$stepping);

}
printNumber( 0,100,11);
?>
