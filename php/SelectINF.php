<?php
require_once 'db.php';
header('Content-Type: application/json;charset=utf-8');  
$data = array();

$query = "SELECT `ID_INF`, `Nom`, `Prenom`, `TyprM`, `Marque`, `Modele`, `NS`, `IDINV`, `Datel`, `Datef`, `Datea`,
 `CPU`, `RAM`, `TypeHHD`, `Capacite`, `Taille`, `NSE`, `Souris`, `Clavier`, `Adaptateurs`, `Casque`, `NSC` 
 FROM `information` WHERE 1 "; 

$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $data[] = array(
        'ID_INF'   => $row["ID_INF"],
        'Nom'   => $row["Nom"],
        'Prenom'   => $row["Prenom"],
        'TyprM'   => $row["TyprM"],
        'Marque'   => $row["Marque"],
        'Modele'   => $row["Modele"],
        'NS'   => $row["NS"],
        'IDINV'   => $row["IDINV"],
        'Datel'   => $row["Datel"],
        'Datef'   => $row["Datef"],
        'Datea'   => $row["Datea"],
        'CPU'   => $row["CPU"],
        'RAM'   => $row["RAM"],
        'TypeHHD'   => $row["TypeHHD"],
        'Capacite'   => $row["Capacite"],
        'Taille'   => $row["Taille"],
        'NSE'   => $row["NSE"],
        'Souris'   => $row["Souris"],
        'Clavier'   => $row["Clavier"],
        'Adaptateurs'   => $row["Adaptateurs"],
        'Casque'   => $row["Casque"],
        'NSC'   => $row["NSC"],


 );
}




echo '{"data":'. json_encode($data) . ',
    "options": [],
    "files": []
  }';
//echo json_encode($data);
