<?php
$foods= [
'vagetable' => explode(',',' brinjal, brocolli, capsican'),
'fruite' => explode( ',',' orange, banana, apple'),

'drinks'=> explode(',',' water, milk'),
];

//print_r($foods);
array_push ($foods['drinks'], 'orange juice');
print_r( $foods);

//echo $foods['vagetable'][0];

$sample = [ 
'test' => [
'test-again'=> [
'a',
'b',
'c',
'd'
]
],
];
//echo $sample['test'][ 'tast-again'][2];

$sample2 =[ 
[1,2,3,4],

[ 11,22,33,44],
[111,222,333,444],
[1111,2222,3333,4444,[ 5,6,7]],//maltiple arry

];
print_r($sample2);

echo $sample2[3][3][1];
?>