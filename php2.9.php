<?php
/*$name ="Hello World";//global scope
function dosomething(){
    global $name;
    echo $name;
    echo $GLOBALS ['name'];


}
dosomething();
function doSomething (){
    global $name;
    $name = "How are you?";//local scope

}
dosomething();
echo $name;*/
function doSomething(){
    //startc scope
    static $i;
    $i = $i ?? 0;
    $i++;
    echo "\n";
}
function doextra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();
?>
