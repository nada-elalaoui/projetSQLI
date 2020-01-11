<?php  
	$connect = mysqli_connect("localhost", "root", "", "sqli");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE information SET ".$column_name."='".$text."' WHERE ID_INF='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Modification effectuée!';  
	}  
 ?>