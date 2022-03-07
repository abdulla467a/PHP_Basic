<?php

/*$name =" Abdulla al shaykat";
$gender ="male";
if($gender =="male"){
    echo " He is Mr. Right";
}
else {
    echo " He is the Wrong guy";
}
*/
$per =85;
if($per >=80 && $per <=100){
    echo "You are in the top list ";
}
elseif($per >=70 && $per <=80){
    echo "You are in the 1st Divison ";
}
elseif($per >=60 && $per <=70){
    echo "You are in the 2nd Division ";
}
elseif($per >=50 && $per <=60){
    echo "You are in the 3rd Divison ";
}
elseif($per >=40 && $per <=50){
    echo "You are in the 4th Division";
}
elseif($per <33){
    echo "You are fail ";
}
else {
    echo "Please enter the valid percentage";
}


?>