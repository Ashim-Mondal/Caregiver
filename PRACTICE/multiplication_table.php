

<?PHP

for($i = 1; $i <= 12; $i++){
	for($j = 1; $j <= 10; $j++){
		echo " $i X $j = ".$i*$j." ";
	}
	echo"<br>";
}

	echo"<br>";
	echo"<br>";

$arr = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 
'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

foreach($arr as $city){
	echo "$city,";
}

?>