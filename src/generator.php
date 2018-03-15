<?php
	$limit = $_POST['limit'];
	$last = $_POST['last'];
	$head = $_POST['head'];

	require './controller/db.php';
?>


<?php
	$obj = new db();

	$result = json_decode($obj->get_custom_data(str_split($head),$limit,$last),true);
	
	foreach ($result as $key => $value) 
	{	$i=0;
		//print_r($value);
		echo '<tr id='.$key.'>';
		foreach ($value as $key => $val) {
			# code...
			
				
			echo "<td class='col$i'>";
			print_r($value[$key]);
			echo "</td>";

			$i++;
		}
		echo "</tr>";
	}
?>
