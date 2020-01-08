<?php session_start(); 
//on essaie e se connecter a la bdd, s'il y a une erreur on affiche juste une erreur au lieu d'afficher le lien vers la bdd par securité
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	die('erreur:'.$e -> getMessage());
}

//on affiche le résultat du formulaire
echo '<p>$_POST[mail] :    '.$_POST['mail'].'</p>';
echo '<p>$_POST[mdp] :   '.$_POST['mdp'].'</p>';
echo "<p>-----------------------------------</p>";


//on recherche tous les mails correspondant a la requête de l'internaute
$req = $bdd -> prepare('SELECT id FROM compte WHERE mdp=:mdp AND mail=:mail');
$req -> execute(array('mdp' => $_POST['mdp'],'mail' => $_POST['mail']));
$idBDD = $req->fetch();

//si on trouve un mail qui correspond a la requête on stocke les infos dans la session
if (isset($idBDD['id'])) {
	$_SESSION['id'] = $idBDD['id'];
	header("Location:index.php");
}
else{
header("Location:login.php");
}


$req->closeCursor();

?>
