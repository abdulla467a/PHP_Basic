<?php
$marks = [

"Ajij Patel" =>[
"math" => 90,
"Biology" => 80,
"Physics" => 75,
"Chemistry" => 80 ],


"Munnaf Patel" =>[
    "math" => 90,
    "Biology" => 80,
    "Physics" => 75,
    "Chemistry" => 80 ],

    "Asraf Patel" =>[
        "math" => 90,
        "Biology" => 80,
        "Physics" => 75,
        "Chemistry" => 80 ],

        "Ardha Patel" =>[
            "math" => 90,
            "Biology" => 80,
            "Physics" => 75,
            "Chemistry" => 80 ]

];
echo "<table border ='2px' cellpadding='5px' cellspacing='0'> 

<tr>

 <th>Name</th>
 <th>Math</th>
 <th>Biology</th>
 <th>Physics</th>
 <th>Chemistry</th>

</tr>";
 
foreach($marks as  $key => $v1){

echo "<tr> 
 <td> $key</td>";
foreach($v1 as $v2){
    echo "<td> $v2 </td>";
 } 
 echo  "</tr>";

}
echo "</table>";

/*
echo "<pre>";
print_r($marks);
echo "</pre>";
*/
?>