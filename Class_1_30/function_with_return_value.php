<?php

/*function hello ($fname="First", $lname="Last"){
    $v= "$fname $lname";
return $v;
}

#echo hello("Bring Me", " Thanos");
$name = hello("Bring Me", " Thanos");
echo $name;
*/

function sum ($math,$eng,$sc){
    $s = $math + $eng + $sc;
    return $s;
}
function percentage($st){
    $per = $st / 3;
    echo $per . "%";
}
$total = sum(85,74,64);

percentage ($total);


?>