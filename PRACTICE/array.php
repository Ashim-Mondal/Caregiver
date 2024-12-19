<!DOCTYPE HTML>
<html>
<head></head>
<body>

<h1>Array in Php </h1>

<?php

//Index Array
$firstArr = array(1,2,3,4);

print_r ($firstArr);

echo "<BR>";

// Associative Array
$secondArr = array(
			'peter' => 10,
			'jane' => 11,
			'paul' => 12
				);
				
echo $secondArr['peter'];
print_r ($secondArr);

echo "<BR>";echo "<BR>";

//Index Multidimentional
$indexMD = array(
			array(1,2,3,4),
			array(5,6,7,8),
			array(9,10,11,12)
			);
			
	print_r($indexMD[1][0]);
	echo "<BR>";echo "<BR>";
	echo $indexMD[2][1];
	
	echo "<br>";
	
	//Inserting
	
	$demoArr = array(1,2,3,4);
	$demoArr[] = 5;
	print_r($demoArr);
	
	echo "<br>";
	
	$assoArr = array(
				'name'=> 'ashim',
				'age' => 20
				);
	
	$assoArr['Height'] = 5.8;
	print_r($assoArr);

?>

</body
</html>