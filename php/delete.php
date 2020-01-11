<?php  
	$connect = mysqli_connect("localhost", "root", "", "sqli");
	$sql = "DELETE FROM information WHERE ID_INF = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Modification effectuée!';  
	}  
 ?>