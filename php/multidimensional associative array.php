<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$marks =[

"rahul"=>[
     "physics"=>86,
     "biology"=>88,
     "math"=> 56,
 ],
 "salman"=>[
         "physics"=>86,
         "biology"=>88,
         "math"=> 56,
 ],

"mohan"=>[
         "physics"=>86,
         "biology"=>88,
         "math"=> 56,
]

];

foreach ($marks as $key => $value1) {
	echo $key."<br>";
	foreach ($value1 as $value2) {
		echo $value2 ." ";
}

}


echo "<pre>";
print_r($marks);
echo "</pre>";















?>
</body>
</html>