<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

$emp= [

[1,"rahul", "salsman","ceo"],
[2,"devraj", "computer","operetor"],
[3,"nasir", "cto","marketting"],
[4,"jhfejhef", "wjhj","fdhdgd"],
[5,"narayan", "mst","shhgd"],


];

foreach ($emp as list($id,$name,$desgard,$salary)) {
	echo $$id,$name,$desgard,$salary."<br>";
}



?>
</body>
</html>