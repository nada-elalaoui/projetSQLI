<?php  
 $connect = mysqli_connect("localhost", "root", "", "sqli");
    if (!$connect) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
 $output = '';  
 $sql = "SELECT * FROM information";

 if(isset($_REQUEST['search'])){
  $crit = $_REQUEST['search']; 
  $sql .= " WHERE NOM LIKE '%$crit%' or Prenom LIKE '%$crit%' or TyprM LIKE '%$crit%' or Marque LIKE '%$crit%' or Modele LIKE '%$crit%' or NS LIKE '%$crit%'  or Datel LIKE '%$crit%' or Datef LIKE '%$crit%' or CPU LIKE '%$crit%' or RAM LIKE '%$crit%' or Taille LIKE '%$crit%' or NSE LIKE '%$crit%' or TypeHHD LIKE '%$crit%' or Capacite LIKE '%$crit%'";
 }
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Nom</th>
                     <th width="10%">Prenom</th>
                     <th width="10%">Type de Machine</th>
                     <th width="10%">Marque</th>
                     <th width="10%">Operation</th>
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM information LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td class="Nom" data-id="'.$row["ID_INF"].'" contenteditable>'.$row["Nom"].'</td>
                     <td class="Prenom" data-id="'.$row["ID_INF"].'" contenteditable>'.$row["Prenom"].'</td>
                     <td class="TyprM" data-id="'.$row["ID_INF"].'" contenteditable>'.$row["TyprM"].'</td>
                     <td class="Marque" data-id="'.$row["ID_INF"].'" contenteditable>'.$row["Marque"].'</td>
                     <td><button type="button" name="delete_btn" data-id="'.$row["ID_INF"].'" class="btn btn-xs btn-danger btn_delete">x <span class="tooltiptext">Supprimer</span></button>
                  <button type="button" name="view_btn" data-id="'.$row["ID_INF"].'" class="btn btn-xs btn-success view_btn">+  <span class="tooltiptext">Afficher</span></button></td>
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
              
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td colspan=5> RIEN</td> 
			   </tr>';  
 }  

 $output .= '</table>  
      </div>';  


 echo $output;  
 ?>
