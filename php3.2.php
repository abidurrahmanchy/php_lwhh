<?php
$students =[
    "raihan",
    "utsha",
    "rakib",
    "refat",
];
$students[2]="nishat";

/*$student = array_pop($students);
 
$string=count($students);
for($i =0; $i<$string; $i++){
    echo $students [$i]."\n</br>";
}*/
$student = array_pop($students);
$student = array_shift($students);
//echo $student."\n</br>";
 
$string=count($students);
for($i =0; $i<$string; $i++){
    echo $students [$i]."\n</br>";
}
$students [] ="kabbir";
array_push($students,"rehatt");
array_unshift($students, "Mohamad");
$string=count($students);
for($i =0; $i<$string; $i++){
    echo $students [$i]."\n</br>";
}
?>