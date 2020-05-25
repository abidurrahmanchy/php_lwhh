<?php
$student= [
    "kabbir",
    "nafig",
    "rahat",
    1232,
];
/*$student= array(
    "kabbir",
    "nafig",
    "rahat",
    1232,
);*/

echo $student[0];

echo"\n</br>";
var_dump ($student);
echo"\n</br>";
echo count($student);
echo"\n</br>";
/*for ($i=0;$i<count($student);$i++){
    echo $student[$i]."\n</br>";
}*/
$string = count($student);
for ($i=0;$i<$string;$i++){
    echo $student[$i]."\n</br>";
}
for ($i =$string-1;$i>=0; $i--){
    echo $student[$i]."\n</br>";
}
?>