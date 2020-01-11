<?php
require_once 'db.php';
if (isset($_POST["add"])) {
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$typeM = $_POST["type"];
$marque  = $_POST["marque"];
$modele  = $_POST["model"];
$ns = $_POST["ST"];
$IDINV = $_POST["id"];
$datel = $_POST["datel"];
$datef  = $_POST["datef"];
$datea  = $_POST["datea"];
$cpu = $_POST["cpu"];
$ram = $_POST["ram"];
$typeHHD= $_POST["typeh"];
$cap= $_POST["capacite"];
$taille  = $_POST["taille"];
$NSE  = $_POST["NSE"];
$souris = $_POST["souris"];
$clavier = $_POST["clavier"];
$Adapt = $_POST["adaptateur"];
$casque  = $_POST["casque"];
$NSC  = $_POST["casqueN"];
$query = "INSERT into  information
(`Nom`, `Prenom`, `TyprM`,`Marque`,`Modele`,`NS`,`IDINV`, `Datel`, `Datef`,`Datea`,`CPU`,`RAM`,`TypeHHD`,`Capacite`, `Taille`, `NSE`,`Souris`,`Clavier`,`Adaptateurs`,`Casque`,`NSC`)
values
('".$nom."','" .$prenom ."','" .$typeM ."','".$marque."','" .$modele."','" .$ns."','".$IDINV."','" .$datel ."','" .$datef ."','".$datea."','" .$cpu."','" .$ram."','".$typeHHD."','".$cap."','" .$taille ."','" .$NSE ."','".$souris."','" .$clavier."','" .$Adapt."','" .$casque."','" .$NSC."')" ;
$statement = $conn->prepare($query);
$statement->execute();
header('location:../Liste.php');
echo $query;
}
else {echo "bla";}

 ?>
