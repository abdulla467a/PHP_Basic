<?php

$day ='Friday';
$day ='sunday';
$day ='Monday';

if($day === 'Friday' || $day ==='sunday')

// conditon jdi false hoi 
//if($day === 'Friday' && $day ==='sunday')
{
echo 'Today is Holiday';
}

elseif($day ==='Saturday'){
    echo 'Work day';
}
else{
    echo'Today is not Holiday';
}



?>
