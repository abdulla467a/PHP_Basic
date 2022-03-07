<?php

#using Regular argument
#function testing ($string)

#using reference

/*function testing (&$string){
$string .="Yeah he was.";


}

$str = " Thanos was Right";
testing ($str);
echo $str;
*/


#Another 

function first ($num){
    $num +=5;
}
function second (&$num){
    $num +=7;

}

$number =10;
first ($number);
echo "Orginal value is $number<br>";
second ($number);
echo "Orginal value is $number<br>";




?>