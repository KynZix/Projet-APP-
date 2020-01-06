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
$req = $bdd -> prepare('SELECT id,mdp FROM compte WHERE mail=:mail');
$req -> execute(array('mail' => $_POST['mail']));
$idBDD = $req->fetch();

// si le mail est present dans la bdd auquel correspond un mdp hasshé et si le mdp entré entré correspond a celui ci on se login
if (isset($idBDD['mdp']) and (password_verify($_POST['mdp'], $idBDD['mdp']) or $_POST['mdp'] == $idBDD['mdp'])) {
	$_SESSION['id'] = $idBDD['id'];
	header("Location:index.php");
}
else{//le mdp est erroné ou le mail ne figure pas dans la bdd
header("Location:login.php");
}


$req->closeCursor();

?>
