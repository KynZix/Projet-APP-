<!DOCTYPE html>

<html>

	<head>
		<title>Profil</title>
		<link rel="stylesheet" href="CSS/profil.css">
	</head>

	<body>
		<div id="container">
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
			if (isset($_GET['profileid'])) {  //Si l'utilisateur a taper une ID dans l'url
				$currentid = htmlspecialchars($_GET['profileid']);
			} else {
				header("Location:tests.php?profileid=".urlencode($_SESSION['id']));
			}




			?>
			<div class="affichage">
				<div class="menuProfil1">
					<a href="profil.php?profileid=<?php echo $currentid ?>">Profil</a>
					<a href="tests.php?profileid=<?php echo $currentid ?>">Tests</a>
				</div>
				<div class="infos">
					<div class="col-2-2">
						<img id="profilephoto" src="Media/Emptyprofile.png">
					</div>
					<div class="liste_tests">
						<?php
						if ($currentid == $_SESSION['id']){ //sur son profil?>
							<legend><p><b>Mes tests</b><p></legend>
	<?php			} else { //sur le profil de qqun dautre
							$req = $bdd->prepare("SELECT * FROM compte WHERE id = :id");
							$req -> execute(array("id" => $currentid));
							$utilisateur = $req -> fetch();
							if ($req->rowCount() > 0) { ?>
								<legend><p><b>Liste des tests de <?php echo $utilisateur['prenom'].' '.$utilisateur['nom']?></b><p></legend>
									<?php
										$req = $bdd -> prepare("SELECT * FROM tests INNER JOIN compte ON compte.id = tests.id_examine WHERE id_examine = :id_examine OR id_examinateur = :id_examinateur");

										$req -> execute(array('id_examine' => $currentid,'id_examinateur' => $currentid));
										while ($test = $req->fetch()) {
											echo "<div>";
												echo "<p>(".$test['id_test'].") test du ".$test['date'].": ".$test['score']."</p>";
												echo "<legend><p>infos comp: ".$test['nom']." - ".$test['mail']."<p></legend>";
											echo "</div>";
										}
									?>
								</div>
								<?php if ($_SESSION['typeUtilisateur']<2) { ?>
									<div>
										<a href="ajoutTest.php">Ajouter un test</a>
									</div>
								<?php } ?>
							<div class="menuProfil2">
								<a href="modifINFO.php">MODIFIER MES INFORMATIONS PERSONNELLES</a>
								<a href="modifMDP.php">MODIFIER MON MOT DE PASSE</a>
							</div>
<?php 				} else { //L'utilisateur a tapé l'ID d'un utilisateur qui n'existe pas ?>
								<div class="infos">
									<img src="Media/errorimage.jpg" id="errorimage">
									<h1 id="errormessage">Cet utilisateur n'existe pas</h1>
								</div>
<?php						}
		}
						?>
</div>
					</div>


			<?php include("footer.php"); ?>
		</div>
	</body>

</html>
