<!DOCTYPE html>

<html>

	<head>
		<title>Psitech info utilisateur</title>
		<link rel="stylesheet" href="CSS/profil.css">
	</head>



	<body>
		<?php include("header.php"); ?>

		<div class="affichage">
			<div class="menuProfil1">
				<a href="profil.php">USER</a>
				<a href="tests.php">TESTS</a>
			</div>
			<div class="infos">
				<?php
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				catch(Exception $e)
				{
					die('erreur:'.$e -> getMessage());
				}
				$req = $bdd -> prepare('SELECT nom,prenom,mail,phone,birthday,pays,ville,ZIP,adresse,adresse2 FROM compte WHERE mail=:mail');
				$req -> execute(array('mail' => $_SESSION['mail']));
				$infos = $req->fetch();
				echo '<div class="info"><p> nom: </p><p>'.$infos['nom'].'</p></div>';
				echo '<div class="info"><p> prenom: </p><p>'.$infos['prenom'].'</p></div>';
				echo '<div class="info"><p> mail: </p><p>'.$infos['mail'].'</p></div>';
				echo '<div class="info"><p> phone: </p><p>'.$infos['phone'].'</p></div>';
				echo '<div class="info"><p> birthday: </p><p>'.$infos['birthday'].'</p></div>';
				echo '<div class="info"><p> pays: </p><p>'.$infos['pays'].'</p></div>';
				echo '<div class="info"><p> ville: </p><p>'.$infos['ville'].'</p></div>';
				echo '<div class="info"><p> ZIP: </p><p>'.$infos['ZIP'].'</p></div>';
				echo '<div class="info"><p> adresse: </p><p>'.$infos['adresse'].'</p></div>';
				if (isset($infos['adresse2']) and $infos['adresse2']!="") {
					echo '<div class="info"><p> complément d\'adresse: </p><p>'.$infos['adresse2'].'</p></div>';
				}
				else{
					echo '<div class="info"><p> complément d\'adresse: </p><p>auncun</p></div>';
				}
				
				?>

							</div>
			<div class="menuProfil2">
				<a href="modifINFO.php">MODIFIER INFOS</a>
				<a href="modifMDP.php">MODIFIER MOT DE PASSE</a>
			</div>
		</div>


		<?php include("footer.php"); ?>  	
	</body>

</html>