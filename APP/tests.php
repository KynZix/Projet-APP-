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
		if (isset($_GET['profileid'])) {  //Si l'utilisateur a taper une ID dans l'url
			$currentid = $_GET['profileid'];
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
					if ($currentid == $_SESSION['id']){ ?>
						<legend><p>Mes tests<p></legend>
<?php			} else {
						$utilisateur = $bdd->query("SELECT * FROM compte WHERE id = $currentid")->fetch(); ?>
						<legend><p>Liste des tests de <?php echo $utilisateur['prenom'].' '.$utilisateur['nom']?><p></legend>
<?php			}
					?>
					<?php
						$req = $bdd -> prepare("SELECT * FROM tests INNER JOIN compte ON compte.id = tests.id_examine WHERE id = $currentid");

						$req -> execute(array('id' => $_SESSION['id']));
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

			</div>
			<div class="menuProfil2">
				<a href="modifINFO.php">MODIFIER MES INFORMATIONS PERSONNELLES</a>
				<a href="modifMDP.php">MODIFIER MON MOT DE PASSE</a>
			</div>
		</div>


		<?php include("footer.php"); ?>
	</body>

</html>
