<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php

$color = array("red",22.4,"yellow","pink");
/*
//first idea

echo $color [0];
echo "<br>";
echo $color [3];
echo "<br>";


echo $color [1];
echo "<br>";


echo $color [2];
echo "<br>";
echo "<br>";
echo "<br>";

$xyz = array("rahul",12,25.55,"virat");
echo $xyz[1];
echo "<br>";

echo $xyz[0];
echo "<br>";


echo $xyz[3];
echo "<br>";


echo $xyz[2];
echo "<br>";


*/

//second idea
/*
echo "<pre>";
print_r($color);
echo "</pre>";

*/
/*

// loop use
echo "<ul>";

for ($i=0; $i < 4; $i++) { 
	echo "<li>";
	echo  $color[$i];
	echo "</li>";

}
echo "</ul>";



*/


$car = array("volvo","lamborgini","tata","maruti","kia","toyata","range rover",);
/*
echo $car[0];
echo "<br>";
echo $car[1];
echo "<br>";
echo $car[2];
echo "<br>";
echo $car[3];
echo "<br>";
echo $car[4];
echo "<br>";
echo $car[5];
echo "<br>";
echo $car[6];
echo "<br>";
echo $car[7];

*/
/*
echo "<UL>";
for ($i=0; $i < 7 ; $i++) { 
	echo "<li>";
	echo $car[$i];
	echo "<li>";
}

echo "<UL>";


*/

$car = array("toyata","tata","landlover","rangrover","maruti");

for ($i=0; $i < 4 ; $i++) { 
	echo "<li>";
	echo $car[$i];
	echo "<li>";
}


?>

</body>
</html>