 <?php
// class Prabhu
// {
// 	// public protected private 

// 	public $a = 20;
// 	public $b = 15;


// 	public function sum(){
//       echo $this->a + $this->b;
// 	}


// }

// $obj =  new Prabhu();
// $obj->sum();











// class fruits
// {
// 	public $a = 10;
//     public $b = 40;

// public function sub(){
// 	echo $this->a - $this->b;
// }

// }
// 	$xyz = new fruits();

//     $xyz->sub();






// class keyboard{
// 	public $a= 12;
// 	public $b= 18;
// 	public function sum(){
// 		echo $this->a + $this->b;

// 	}

// }  
//  $obj = new keyboard();
//  $obj->sum();




// class ban{
// 	public $y = 55;
//     public $x = 12;

//     public function  sum (){
//     	echo $this->y + $this->x;
//     }
  

// }
//        $zz = new ban();
//     $zz->sum();

class testmy {
    public $test;
    public $testdata;
    public $mydata;

    public function __construct($test, $testdata, $mydata) {
        $this->test = $test;
        $this->testdata = $testdata;
        $this->mydata = $mydata;
    }

    public function data() {
        $alldata = "hello $this->test" . " " . $this->testdata . " " . "{$this->mydata}";
        return $alldata;
    }
}

$myobj = new testmy("imran", "how are", "you");
echo $myobj->data();
?>

<!DOCTYPE html>
<html>
<head>
<style>
.myDiv {
  border: 5px outset red;
  background-color: lightblue;    
  text-align: center;
}
</style>
</head>
<body>

<h1>The div element</h1>

<div class="myDiv">
  <?php $a = 10; $b = 30; ?>
  <h2>This is a heading in a div element</h2>
  <?php if ($a < $b) { ?>
    <p>This is some text in a div element.</p>
  <?php } else { ?>
    <p>If condition is not true.</p>
  <?php } ?>
</div>

<p>This is some text outside the div element.</p>

