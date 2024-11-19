<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php


$weekday = 1;

switch ($weekday) {
	case '1':
		echo "today is sunday";
		echo "<br>this is just test";
		break;
	     case '2':
		echo "today is monday";
		break;
	     case '3':
		echo "today is thursday";
		break;

	     case '4':
		echo "today is wednesday";
		break;
		
	     case '5':
		echo "today is friday";
		break;
		
	     case '6':
		echo "today is saturday";
		break;
		
	     case '7':
		echo "today is sunday";
		break;
		


	
	default:
		echo "enter the valid weekday";
		break;
}




?>
</body>
</html>