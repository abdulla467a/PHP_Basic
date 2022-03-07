<?php

#normal way
/*
$a =1;
while($a <=20){
    echo $a .") Hello Peter <br>";
    #$a = $a +1;
    $a++;
}
*/
#normal way
/*
$a = 40;
while($a >=10){
    echo $a .") Hello Peter <br>";
    #$a = $a +1;
    $a--;
}


*/
#using Html way inside php
$a = 40;
echo "<ul>";
while($a >=10){
    echo "<li>". $a .") Hello Peter </li>";
    #$a = $a +1;
    $a--;
}
echo "<ul>";
?>