<?php
session_start();
// On s amuse à créer quelques variables de session dans $_SESSION

if ( !( isset($_SESSION['typeUtilisateur']) && ($_SESSION['typeUtilisateur'] = 1 ||  $_SESSION['typeUtilisateur'] = 0 || $_SESSION['typeUtilisateur'] = 2) ) ) { //on ne peut entrer sur le BO que si on en a lautoristion
	header("Location: index.php");
}

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
$mailInvalide=0;
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
	// on regarde si le format est correct cad : caractère@caractère.caractère
		 $_POST['mail'] = htmlspecialchars($_POST['mail']);
		if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['mail']))
        {
          		$req = $bdd -> prepare('UPDATE compte SET mail = :nouveauMail WHERE mail = :ancienMail');
				$req -> execute(array('ancienMail' => $_SESSION['mail'],'nouveauMail' => $_POST['mail']));
				echo "<p>le mail a bien ete changé</p>";
				$mailPris=0;
				$mailInvalide=0;
        }
      else
        {
          $mailInvalide=1;
        }
		
	}

 	
}

$numeroInvalide=0;

if (isset($_POST['phone']) and $_POST['phone']!="") {
	$phone_l = strlen((string)$_POST['phone']);
	if ($phone_l==10) {
	    $req = $bdd -> prepare('UPDATE compte SET phone = :phone WHERE mail = :mail');
		$req -> execute(array('mail' => $_SESSION['mail'],'phone' => $_POST['phone']));
		echo "<p>le phone a bien ete changé</p>";
	}
	else{
		$numeroInvalide=1;
	}

 	
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



if (isset($mailPris) && $mailPris==1) {
	setcookie("infos","Ce mail est déjà pris",time()+200);
	echo "mail faux";
	header("Location:modifINFO.php");
}

else if (isset($mailInvalide) && $mailInvalide==1){
	setcookie("infos","Cet adresse mail est invalide",time()+200);
	echo "mail faux";
	header("Location:modifINFO.php");
}

// Pour le numero de tel
else if (isset($numeroInvalide) && $numeroInvalide==1){
		setcookie("infos","Ce numero de telephone est invalide",time()+200);
		echo "numero faux";
		header("Location:modifINFO.php");
}
else{
		setcookie("infos","les infos on bien été mises a jour",time()+200);
		echo "ok";
		header("Location:profil.php");
		}
?>
