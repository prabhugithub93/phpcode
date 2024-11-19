<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php


// global variable
 /*

 $x = 10;
 $y = 5;

 function taxt(){
 	global $x , $y;
 	$x = $x+$y;

 }
 taxt();
 echo $x;

echo "<br>";


*/

// local variable

 function taxt(){
 	$x = 10;
 	echo "this is local varable: $x";
 	echo "<br>";
 }

taxt();

echo "this is a local :$x";

?>
</body>
</html>