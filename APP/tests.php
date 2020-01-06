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
				<div class="liste_tests">
					<legend><p>liste des scores obtenus aux tests<p></legend>
					<?php
					if (isset($_SESSION['typeUtilisateur'])) {
						if ($_SESSION['typeUtilisateur']==2) {
							$req = $bdd -> prepare('SELECT tests.id_test,tests.date,tests.resultat,tests.score,compte.nom,compte.mail FROM tests INNER JOIN compte ON compte.id = tests.id_examinateur WHERE id_examine=:id');
						}
						else{
							$req = $bdd -> prepare('SELECT tests.id_test,tests.date,tests.resultat,tests.score,compte.nom,compte.mail FROM tests INNER JOIN compte ON compte.id = tests.id_examine WHERE id_examinateur=:id');
						}

						$req -> execute(array('id' => $_SESSION['id']));
						while ($test = $req->fetch()) {
							echo "<div>";
								echo "<p>(".$test['id_test'].") test du ".$test['date'].": ".$test['score']."</p>";
								echo "<legend><p>infos comp: ".$test['nom']." - ".$test['mail']."<p></legend>";
							echo "</div>";
						}
					}?>
				</div>
				<?php if ($_SESSION['typeUtilisateur']<2) { ?>
					<div>
						<a href="ajoutTest.php">Ajouter un test</a>
					</div>
				<?php } ?>
				
			</div>
			<div class="menuProfil2">
				<a href="modifINFO.php">MODIFIER MES INFORMATIONS PERSONNELLES</a>
				<a href="modifMDP.php">MODIFIER MON MOT DE PASSE</a>
			</div>
		</div>


		<?php include("footer.php"); ?>  	
	</body>

</html>
