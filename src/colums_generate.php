<?php
	$table = $_POST['name'];
	$header =$_POST['head'];

	require './controller/db.php';

	$obj = new db();

	$result = json_decode($obj->get_row_header($table));
	echo "<tr>";

	$i=0;
	foreach ($result as $key => $value) 
	{
		//print_r($value);
	
			echo "<th id='headings' class='col$i'>";
			print_r($value);
			echo "</th>";

			$i++;

	}
	echo "</tr>";
?>
