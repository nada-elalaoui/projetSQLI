<?php
if(isset($_REQUEST['id'])){
 $connect = mysqli_connect("localhost", "root", "", "sqli");
  $sql = "SELECT * FROM information WHERE ID_INF=".$_REQUEST['id'];
 $result = mysqli_query($connect, $sql);  
 $row = mysqli_fetch_array($result);

	$output = " <table border='1' class='details'>
		<tr>
		<td class='titl'><b>Modele</b></td>
		<td class='Modele' data-id=".$_REQUEST['id']." contenteditable>".$row['Modele']."</td>
		
		<td class='titl'><b>Numéro de série</b></td>
		<td class='NS' data-id=".$_REQUEST['id']." contenteditable>".$row['NS']."</td>
		
		<td class='titl'><b>ID d'inventaire</b></td>
		<td class='IDI' data-id=".$_REQUEST['id']." contenteditable>".$row['IDINV']."</td>

		<td class='titl'><b>Date Livraison</b></td>
		<td class='DL' data-id=".$_REQUEST['id']." contenteditable>".$row['Datel']."</td>
		</tr>

		<tr>
		<td class='titl'><b>Date F. Garantie</b></td>
		<td class='DG' data-id=".$_REQUEST['id']." contenteditable>".$row['Datef']."</td>
		
		<td class='titl'><b>Date d'affectation</b></td>
		<td class='DA' data-id=".$_REQUEST['id']." contenteditable>".$row['Datef']."</td>
		
		<td class='titl'><b>CPU</b></td>
		<td class='CPU' data-id=".$_REQUEST['id']." contenteditable>".$row['CPU']."</td>

		<td class='titl'><b>RAM</b></td>
		<td class='RAM' data-id=".$_REQUEST['id']." contenteditable>".$row['RAM']."</td>
		</tr>

		<tr>
		<td class='titl'><b>Type HHD</b></td>
		<td class='THD' data-id=".$_REQUEST['id']." contenteditable>".$row['TypeHHD']."</td>
		
		<td class='titl'><b>Capacité HHD</b></td>
		<td class='CHD' data-id=".$_REQUEST['id']." contenteditable>".$row['Capacite']."</td>
		
		<td class='titl'><b>Taille d'écran</b></td>
		<td class='TLE' data-id=".$_REQUEST['id']." contenteditable>".$row['Taille']."</td>
		</tr>

		";
		echo $output;
}

?>