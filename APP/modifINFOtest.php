<?php
session_start();
// On s amuse à créer quelques variables de session dans $_SESSION

//on essaie e se connecter a la bdd, s'il y a une erreur on affiche juste une erreur au lieu d'afficher le lien vers la bdd par securité
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	die('erreur:'.$e -> getMessage());
}

if (isset($_POST['nom'])) {
	$req = $bdd -> prepare('UPDATE compte SET nom = :nom WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'nom' => $_POST['nom']));
	echo "<p>le nom a bien ete changé</p>";

}
if (isset($_POST['prenom'])) {
 	$req = $bdd -> prepare('UPDATE compte SET prenom = :prenom WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'prenom' => $_POST['prenom']));
	echo "<p>le prenom a bien ete changé</p>";
} 
if (isset($_POST['mail'])) {
 	$req = $bdd -> prepare('UPDATE compte SET mail = :mail WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'mail' => $_POST['mail']));
	echo "<p>le mail a bien ete changé</p>";
} 
if (isset($_POST['phone'])) {
 	$req = $bdd -> prepare('UPDATE compte SET phone = :phone WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'phone' => $_POST['phone']));
	echo "<p>le phone a bien ete changé</p>";
} 
if (isset($_POST['pays'])) {
 	$req = $bdd -> prepare('UPDATE compte SET pays = :pays WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'pays' => $_POST['pays']));
	echo "<p>le pays a bien ete changé</p>";
} 
if (isset($_POST['ville'])) {
 	$req = $bdd -> prepare('UPDATE compte SET ville = :ville WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'ville' => $_POST['ville']));
	echo "<p>le ville a bien ete changé</p>";
} 
if (isset($_POST['ZIP'])) {
 	$req = $bdd -> prepare('UPDATE compte SET ZIP = :ZIP WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'ZIP' => $_POST['ZIP']));
	echo "<p>le ZIP a bien ete changé</p>";
} 
if (isset($_POST['adresse'])) {
 	$req = $bdd -> prepare('UPDATE compte SET adresse = :adresse WHERE mail = $_SESSION[\'mail\']');
	$req -> execute(array('mail' => $_SESSION['mail'],'adresse' => $_POST['adresse']));
	echo "<p>le adresse a bien ete changé</p>";
} 
$req->closeCursor();
?>
