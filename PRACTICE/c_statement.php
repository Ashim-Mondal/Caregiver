<!DOCTYPE HTML>
<html>  
<head>
</head>
<body>

<h4>Conditional statement </h4>

<?php

$arr = array(1,2,3,4,5);
$arr1 = array(6,7,8,9,10);
$arr2 = array(
		"name"=>"ashim",
		"age"=>20,
		'roll'=>112
			);

print_r($arr2);
echo "<br>";
print_r($arr);
echo "<br>";
array_splice($arr,2,2);
print_r($arr);

echo "<br>";
array_splice($arr2,1,1);
print_r($arr2);

echo "<br>";
echo "<br>";
echo count($arr);

echo "<br>";
echo "<br>";
echo count($arr2);

echo "<br>";
echo "<br>";
var_dump (array_search(112,$arr2));

echo "<br>";
echo "<br>";

$newArr = array_merge($arr,$arr1);

print_r ($newArr);
echo "<br>";
echo "<br>";
echo var_dump(4 <=> 7);
echo "<br>";
echo "<br>";

// Conditional statement


if(1 > $arr[1]){
	echo "5";
}
else{
	
	echo "2";
}
echo "<br>";
echo "<br>";
//TERNARY operator

$a = (7 == 7 ? 'True':'No' );
echo ($a);

echo "<br>";
echo "<br>";
//Switch

$c = 6;

switch($c){
	
	case 1:
		echo "one";
		break;
	case 2:
		echo "Two";
		break;
	case 3:
		echo "Three";
		break;
	case 4:
		echo "four";
		break;
	default:
		echo "Invalid";
}

echo "<br>";
echo "<br>";
// for Loop

for($i = 1; $i < 5; ++$i){
	echo ($i);
}

echo "<br>";
echo "<br>";

//for each Loop

foreach($arr as $num){
	echo $num;
}

echo "<br>";
echo "<br>";

//for each Loop for Associative array

foreach($arr2 as $name=>$age){
	echo ("$name , $age");
}
echo "<br>";
echo "<br>";

//While Loop
$b = 1;
while($b < 5){
	echo "$b";
	$b++;
}

echo "<br>";
echo "<br>";

//do-While Loop
$d = 1;
do{
	echo "$d";
	$d++;
}while($d < 5);
?>

</body>

</html>