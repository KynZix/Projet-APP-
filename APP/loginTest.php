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
echo '<p>$_POST[mail] :    '.$_POST['mail'].'</p>';
echo '<p>$_POST[mdp] :   '.$_POST['mdp'].'</p>';
echo "<p>-----------------------------------</p>";


//on recherche tus les mails correspondant a la requette de l'internaute
$req = $bdd -> prepare('SELECT typeUtilisateur,mail,mdp FROM compte WHERE mdp=:mdp AND mail=:mail');
$req -> execute(array('mdp' => $_POST['mdp'],'mail' => $_POST['mail']));
$mailMDP = $req->fetch();

//si on trouve un mail qui correspond a la requette on stoke les infos dans la session
if (isset($mailMDP['typeUtilisateur'])) {
	$_SESSION['mail'] = $mailMDP['mail'];
	$_SESSION['mdp'] = $mailMDP['mdp'];
	$_SESSION['typeUtilisateur'] = $mailMDP['typeUtilisateur'];

	echo '<p>$_SESSION[mail] :    '.$_SESSION['mail'].'</p>';
	echo '<p>$_SESSION[mdp] :    '.$_SESSION['mdp'].'</p>';
	echo '<p>$_SESSION[typeUtilisateur]'.$_SESSION['typeUtilisateur'].'</p>';
	header("Location:index.php");
}
else{
header("Location:login.php");
}


$req->closeCursor();

?>
