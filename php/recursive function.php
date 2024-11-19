<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

function display($number){
	if ($number <= 5) {
		echo "$number";
		echo "<br>";
		display($number + 1);
	}

}
     display(4);


echo "<br>";

function factorial($n){
	if ($n == 0) {
		return 1;
	}else{
		return($n*factorial($n-1));
	}

}
     echo factorial(3);



?>
</body>
</html>