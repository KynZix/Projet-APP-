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

//on affiche le resultat du formlaire
echo '<p>$_POST[mdp] :    '.$_POST['mdp'].'</p>';
echo '<p>$_POST[nmdp1] :   '.$_POST['nmdp1'].'</p>';
echo '<p>$_POST[nmdp2] :   '.$_POST['nmdp2'].'</p>';
echo '<p>$SESSION[mail] :   '.$_SESSION['mail'].'</p>';
echo "<p>-----------------------------------</p>";

if ($_POST['nmdp1']==$_POST['nmdp2']) {
	echo "<p>ils sont pareils</p>";

	$req = $bdd -> prepare('SELECT mdp FROM compte WHERE mail=:mail');
	$req -> execute(array('mail' => $_SESSION['mail']));
	$mdpBDD = $req->fetch();
	echo $mdpBDD['mdp'];
	if ($mdpBDD['mdp']==$_POST['mdp']) {
		echo"<p> mdp entré == mdpBDD </p>";
		$req = $bdd -> prepare('UPDATE compte SET mdp = :nmdp WHERE mail = :mail');
		$req -> execute(array('mail' => $_SESSION['mail'],'nmdp' => $_POST['nmdp1']));
		echo "<p>le mdp a bien ete changé</p>";
		header("Location:profil.php");
	}
	else{
		echo "<p>le mot de passe n'est pas bon</p>";
		setcookie('mdp',$_POST['mdp'],time() + 600);
		setcookie('nmdp1',$_POST['nmdp1'],time() + 600);
		setcookie('nmdp2',$_POST['nmdp2'],time() + 600);
		header("Location:modifMDP.php");
	}
}
else{
	echo "<p>ils ne sont pas pareils</p>";
	setcookie('mdp',$_POST['mdp'],time() + 600);
	setcookie('nmdp1',$_POST['nmdp1'],time() + 600);
	setcookie('nmdp2',$_POST['nmdp2'],time() + 600);
	header("Location:modifMDP.php");
}
/*



else{

}


$req->closeCursor();
*/
?>
