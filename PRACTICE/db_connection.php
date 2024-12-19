<!DOCTYPE HTML>
<html>
<head>
<title>
</title>
</head>
<body>


<form action="" method="get">

<h4>Enter name </h4><br>
<input type="text" name="juiceName" value="drinkName"><br><br>
<h4>Enter Customer name </h4><br>
<input type="text" name="customerName" value="CName"><br><br>
<h4>Enter Owner name </h4><br>
<input type="text" name="ownerName" value="OName"><br><br>

<input type="submit" name="sm" value="submitButton"><br><br>



<?php
$pdo = new pdo("mysql:host=localhost;dbname=shop","ashim","abc123");
$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if($pdo == TRUE){
	echo "Connected";
}


$sql = "create table if not exists juice(
		name VARCHAR(20) NOT NULL,
		c_name VARCHAR(30) NOT NULL,
		owner VARCHAR(20)
		)";
$stmt = $pdo -> prepare($sql);
$stmt -> execute();

/*
$n_val = "coke";
$c_val = "Rakesh";
$o_val = "ashim mondal";

$sql = "INSERT INTO juice (name,c_name,owner)
		VALUES('coke','Rakesh','ashim')";
		
$stmt = $pdo -> prepare($sql);

$stmt -> execute();*/

if(isset($_GET['sm']))
	//print_r($_GET[0])
	$n_val = $_GET["juiceName"];
	$c_val = $_GET["customerName"];
	$o_val = $_GET["ownerName"];

$sql = "INSERT INTO juice (name,c_name,owner)
		VALUES('$n_val','$c_val','$o_val')";
		
$stmt = $pdo -> prepare($sql);

$stmt -> execute();

?>

</body>


</html>