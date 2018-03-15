<?php
	/**
	* 
	*/
	class db 
	{
		
		

		function get_rows($quantity, $end)
		{
			require ('connect.php');

			$sql = "select * from main where id > $end ORDER BY id LIMIT $quantity;";

			$result = mysqli_query($conn,$sql);
			
			$arr=[];
			while ($row=mysqli_fetch_assoc($result)) {
				
				$arr[]=$row;
				
			}

			return json_encode($arr);
		}

		function get_row_header($table)
		{
			require 'connect.php';
			
			$sql="show columns from $table";
			
			$result=mysqli_query($conn,$sql);

			$arr=[];
			while ($row=mysqli_fetch_assoc($result)) {
				
				$arr[]=$row['Field'];
				
			}

			return json_encode($arr);
		}

		function get_custom_data($index,$quantity, $end)
		{
			require  'connect.php';
			

			$rows_header=$this->get_row_header('main');
			$rows_header=json_decode($rows_header,true);
			$sql="select id ";

			for ($i=1; $i < sizeof($index) ; $i++) { 
				
				if ($index[$i]) {
					
					$sql.=", `".$rows_header[$i]."`";
				}
			}

			$sql.=" from main where id > $end ORDER BY id LIMIT $quantity;";
			
			echo $sql;
			$result=mysqli_query($conn,$sql);

			$arr=[];
			while ($row=mysqli_fetch_assoc($result)) {
				
				$arr[]=$row;
				
			}

			//return json_encode($arr);
			return json_encode($arr);
		}
	}

	/*
	$obj = new db();
	print_r("<br><br>1111<br>");
	//$res=json_decode($obj->get_rows(2,10),true);
	//print_r($res);	
	$a=array(1,1,0,0,0,0,0,0,0);
	$obj->get_custom_data($a,10,5); */
?>