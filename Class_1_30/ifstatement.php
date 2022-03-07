<?php
/*
$a =13;
$b =10;

if($a <$b){
    echo "A is smaller";
} 
else {
    echo "A is Greater";
}
*/

$age = 16;
#if ($age >= 18 && $age <=21)
#if ($age >= 18 || $age <=21)
#if ($age >= 18 and $age <=21)
#if ($age >= 18 or $age <=21)
if ($age >= 18 xor $age <=21)
#if (!($age <= 18))
{
    echo " YOU ARE ELIGIBLE";
}


?>