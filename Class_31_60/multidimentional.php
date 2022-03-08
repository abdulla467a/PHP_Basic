<?php
$emp =[

[1,"Ajij","Engineer",50000],
[2,"Rahim","Doctor",50000],
[3,"karim","Army",25000],
[4,"suraj","Pilot",35000],
[5,"Ahanat","Doctor",45000],
[6,"onoy","Doctor",445000],
];

/* Table tag use korar jonno */

echo "<table border ='2px' cellpadding='5px' cellspacing='0'> ";

echo "<tr>

 <th>Emp Id</th>
 <th>Emp Name</th>
 <th>Designation</th>
 <th>Salary</th>

</tr>";

/* onk besi line hoi tai amra for loop sue krbo

echo $emp [0][0] ." ";
echo $emp [0][1] ." ";
echo $emp [0][2] ." ";
echo $emp [0][3] ." ";
echo "<br>";

echo $emp [1][0] ." ";
echo $emp [1][1] ." ";
echo $emp [1][2] ." ";
echo $emp [1][3] ." ";

*/

/* for loop use kore
for($row =0; $row <4; $row++){
    for($col =0; $col <4; $col++){
        echo $emp [$row] [$col]  ." ";

    }
    echo "<br>";
}
*/

/*
echo "<pre>";
print_r($emp);
echo "</pre>";
  */   

  /* for each use kore */

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
       # echo $v2 ." ";
        echo "<td> $v2 </td>";
    
    } 
    #echo "<br>";
    echo "</tr>";
}
echo "</table>";

?>