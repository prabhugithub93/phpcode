<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

/*

$emp = array(  
  array(1,"sonoo",400000),  
  array(2,"john",500000),  
  array(3,"rahul",300000),
    array(3,"kohli",200000),  
  
  );  
 
echo "<table border ='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
            <th>emp id.</th>
                        <th>emp name</th>
            <th>salary</th>
</tr>";

foreach ($emp as $key => $value1) {
	echo "<tr>";
	foreach ($value1 as $value2) {
		echo "<td> $value2 </td>";
	}
	echo "</tr>";
}














  
 /*  for ($row = 0; $row < 4; $row++) {  
  for ($col = 0; $col < 4; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";

}  

echo "</table>";











*/


$emp =[

array( "rahul","manager", 50000),
array("devkumar", "salesman", 100000),
array("reena"," computer operetor",120000),
array("ketan","payment",150000),


];

foreach ($emp as $v1) {
  foreach ($v1 as $v2) {
echo $v2 ."     ";    
  }
  echo "<br>";

}


  ?>









</body>
</html>