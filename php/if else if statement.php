<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php




$per = 90;

if ($per >= 80 && $per <=100){
	echo "you are in merit";
}elseif($per >= 60 && $per <= 80){
	echo "you are first division";
}elseif($per >= 45 && $per <=60){
	echo "you are second division";
}elseif($per >= 33 && $per <=45){
	echo "you are third division";
}elseif($per <33 ){
	echo "you are fail";
}else{
	echo "enter your valid percentage";
}

















  ?>
</body>
</html>