<?php


//normal array
$array = ['Sumon','araf','hasan',25, 10.89,78];

echo $array[3]. '<br>';
echo $array[0]. '<br>';
echo $array[5]. '<br>';


//Associative array
$array = [
    'first_name' => 'Sumon',
    'last_name'=> 'araf',
    'Age'=> 25,
    'place' =>'Pakistan'
];

echo $array['first_name']. '<br>';
echo $array['last_name']. '<br>';
echo $array['place'];


//Multi_Dimentioanl Array
 
$array = [
    'first_name' => 'Sumon',
    'last_name'=> 'araf',

    'Birth_Place' =>[
        'Pakistan' => 'House 12,Road 1',
        'city'=> 'Lahore',
        'Zipcode'=> '253344',
    ],
];
print_r($array);














?>
