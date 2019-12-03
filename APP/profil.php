<!DOCTYPE html>

<html>

	<head>
		<title>Profil</title>
		<link rel="stylesheet" href="CSS/profil.css">
	</head>

	<body>
		<?php include("header.php"); 
		
		//Connexion à la BDD
			
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
			die('erreur:'.$e -> getMessage()); //Affiche un message en cas d'erreur
		}
		
		$mailactuel = $_SESSION['mail'];
		
		$bdd = $bdd->query("SELECT * FROM compte WHERE mail = '".$mailactuel."'");	
		$profil = $bdd->fetch();
		?>
		<div class="affichage">
			<div class="menuProfil1">
				<a href="profil.php">USER</a>
				<a href="tests.php">TESTS</a>
			</div>
			<div class="infos">
				<div class="col-2-2">
					<img id="profilephoto" src="Media/Emptyprofile.png">
				</div>
				<div>
					<p><strong>Nom:</strong> <?php echo $profil['nom']?></p>
					<p><strong>Prénom:</strong>  <?php echo $profil['prenom']?> </p>
					<p><strong>Adresse Mail:</strong> <?php echo $profil['mail']?></p>
					<p><strong>Adresse:</strong> <?php echo $profil['adresse']?></p>
					<p><strong>Numéro:</strong> <?php echo $profil['phone']?></p>
				</div>
			</div>
			<div class="menuProfil2">
				<a href="modifInfos.php">MODIFIER INFOS</a>
				<a href="modifMDP.php">MODIFIER MOT DE PASSE</a>
			</div>
		</div>


		<?php include("footer.php"); ?>  	
	</body>

</html>
