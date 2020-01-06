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

if (isset($_POST['nom']) and $_POST['nom']!="") {
	$req = $bdd -> prepare('UPDATE compte SET nom = :nom WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'nom' => $_POST['nom']));
	echo "<p>le nom a bien ete changé</p>";

}
if (isset($_POST['prenom']) and $_POST['prenom']!="") {
 	$req = $bdd -> prepare('UPDATE compte SET prenom = :prenom WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'prenom' => $_POST['prenom']));
	echo "<p>le prenom a bien ete changé</p>";
} 

//on test si le champ mail a ete remplie
if (isset($_POST['mail']) and $_POST['mail']!="") {
	//on test si le mail est deja present dans la bdd
	$req = $bdd -> prepare('SELECT mail FROM compte WHERE mail=:mail');
	$req -> execute(array('mail' => $_POST['mail']));
	$mailBDD = $req->fetch();
	//sil est deja present
	if (isset($mailBDD['mail']) and $mailBDD['mail']!="") {
		echo "mail deja pris";
		$mailPris=1;
	}
	//sil nest pas present on modifie
	else{
		$req = $bdd -> prepare('UPDATE compte SET mail = :nouveauMail WHERE mail = :ancienMail');
		$req -> execute(array('ancienMail' => $_SESSION['mail'],'nouveauMail' => $_POST['mail']));
		echo "<p>le mail a bien ete changé</p>";
		$mailPris=0;
		
	}

 	
} 
if (isset($_POST['phone']) and $_POST['phone']!="") {
 	$req = $bdd -> prepare('UPDATE compte SET phone = :phone WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'phone' => $_POST['phone']));
	echo "<p>le phone a bien ete changé</p>";
} 
if (isset($_POST['pays']) and $_POST['pays']!="") {
 	$req = $bdd -> prepare('UPDATE compte SET pays = :pays WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'pays' => $_POST['pays']));
	echo "<p>le pays a bien ete changé</p>";
} 
if (isset($_POST['ville']) and $_POST['ville']!="") {
 	$req = $bdd -> prepare('UPDATE compte SET ville = :ville WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'ville' => $_POST['ville']));
	echo "<p>le ville a bien ete changé</p>";
} 
if (isset($_POST['ZIP']) and $_POST['ZIP']!="") {
 	$req = $bdd -> prepare('UPDATE compte SET ZIP = :ZIP WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'ZIP' => $_POST['ZIP']));
	echo "<p>le ZIP a bien ete changé</p>";
} 
if (isset($_POST['adresse']) and $_POST['adresse']!="") {
 	$req = $bdd -> prepare('UPDATE compte SET adresse = :adresse WHERE mail = :mail');
	$req -> execute(array('mail' => $_SESSION['mail'],'adresse' => $_POST['adresse']));
	echo "<p>le adresse a bien ete changé</p>";
} 



if (isset($mailPris)) {
	if ($mailPris==1) {
		setcookie("infos","veuillez entrer un autre mail",time()+200);
		echo "mail faux";
		header("Location:modifINFO.php");
	}
	else{
	setcookie("infos","les infos on bien été mises a jour",time()+200);
	echo "ok";
	header("Location:profil.php");
	}
}
else{
	setcookie("infos","les infos on bien été mises a jour",time()+200);
	echo "ok";
	header("Location:profil.php");
}

?>
