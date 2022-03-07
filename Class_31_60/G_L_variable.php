<?php
$x = 10;
$y = 25;
function test ()
{
    global $x, $y;
    $x = $x + $y;
 
    #echo " Variable X is inside function : $x <br>";
}
test ();
echo $x;

#echo " Variable X is outside function : $x";

?>