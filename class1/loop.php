<?php

//while_loop


$array =[
    1,2,3,4,5,6
];

//normally bar bar repeat kora lage
//echo 1*2;
//echo 2*2;

//using loop jeno bar bar use kora na lage

$i =1;
while ($i <= 10){
echo $i . 'x5=' .$i*5 . '<br/>';
echo $i . 'x7=' .$i*7 . '<br/>';

$i++;

}


//using do while loop

$i =1;
do {
    echo $i . 'x5=' .$i*5 . '<br/>';
    $i++;
}
while($i <= 10);



//for loop


for ($i=1; $i <= 10; $i++)
{
    echo $i . 'x10=' .$i*10 . '<br/>';

}

?>
