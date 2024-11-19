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

function hello($fname, $lname){
	$v = "$fname $lname";
	return $v;
}
echo hello("hello","yahooooooo");

*/

function sum($math,$eng,$sci){
	$s = $math+$eng+$sci;
	return $s;
}

function percentage($st){
	$per = $st / 3;
	echo $per;
}
$total= sum(55,40,72);
echo $total;
percentage($total);



?>
</body>
</html>