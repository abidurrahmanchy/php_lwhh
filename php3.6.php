<?php
$student = array ( 
    
    'fname'=> 'Abidur',
    'lname'=> 'Rahman',
    'age'=> '22',
    'class'=>'13',
    'section'=> 'A'
);
print_r($student);
echo $student['fname']." ".$student[ 'lname']." \n";
printf(" %s %s \n",$student['fname'],$student['lname']);

$serialized = serialize($student);// serialize slyle php
echo $serialized;
 echo "\n";

$newserialized= unserialize ($serialized);
print_r( $newserialized);

$jsondata = json_encode($student);//jsonencod style javascript 
echo $jsondata;
echo"\n";
$student2 = json_decode($jsondata,true);//jsonencod  to serialized back.
print_r( $student2);
?>