<?php
function dotaskA(){
    echo"step A done ";
    echo" \n<\br>";
}
function dotaskB(){
    echo"step B done ";
    echo" \n<\br>";
}
function dotaskC(){
    echo"step c done ";
    echo" \n<\br>";
}
function dotaskD(){
    echo"step D done ";
   
}
dothelargertask();


function dothelargertask(){
    echo" \n<\br>";
    dotaskA();
    dotaskB();
    dotaskC();
    dotaskD();
}
dothelargertask();