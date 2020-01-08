<!DOCTYPE html>

<html>

	<head>
		<title>Recherche</title>
		<link rel="stylesheet" href="CSS/index.css">
	</head>

	<body>
		<!-- comment -->

		<body>
			<header>
				<?php include("header.php"); ?>
			</header>


			<?php
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


			<div id="conteneur">
				<?php

				if (isset($_GET['searchtext'])) {  //Si l'utilisateur a effectué une recherche
					$searchquery = $_GET['searchtext'];
					$category = $_GET['category'];
					if ($category == '0') {
						$result = $bdd->query("SELECT * FROM faq WHERE question LIKE '%$searchquery%' OR reponse LIKE '%$searchquery%' ");
						if ($result->rowCount() > 0) { //Si au moins 1 résultat a été trouvé
							while ($donnees = $result->fetch()){?>
								<div>
									<!-- question -->
									<p>
									<strong>Question <?php echo $donnees['id']?>:</strong> <?php echo $donnees['question']?>
									</p>

									<!-- reponses-->
									<p>
										<?php echo $donnees['reponse']?>
									</p>
								</div>
								<?php
							}
						} else { //Aucun résultat 	 ?>
								<p>Aucun résultat.</p>
		<?php		}
					}
					if ($category == '1') {
						$result = $bdd->query("SELECT * FROM compte WHERE nom LIKE '%$searchquery%' OR prenom LIKE '%$searchquery%' ");
						if ($result->rowCount() > 0) { //Si au moins 1 résultat a été trouvé
							while ($donnees = $result->fetch()){?>
								<div>
									<!-- comptes -->
									<p>
									<strong>Utilisateur n°<?php echo $donnees['id']?>:</strong> <a href="profil.php?profileid=<?php echo $donnees['id'] ?> "><?php echo $donnees['prenom'].' '.$donnees['nom']?></a>
									</p>

								</div>
								<?php
							}
						} else { //Aucun résultat 	 ?>
								<p>Aucun résultat.</p>
		<?php		}
					}
					if ($category == '2') {

						$result = $bdd->query("SELECT * FROM tests INNER JOIN compte WHERE (compte.id = tests.id_examine) AND (compte.nom LIKE '%$searchquery%' OR compte.prenom LIKE '%$searchquery%')  ");
						if ($result->rowCount() > 0) { //Si au moins 1 résultat a été trouvé
							while ($donnees = $result->fetch()){
								?>
								<div>
									<!-- tests -->
									<p>
									<a href="tests.php?profileid=<?php echo $donnees['id_test'] ?> "><strong>Test n°<?php echo $donnees['id_test']?>:</strong></a> <a href="profil.php?profileid=<?php echo $donnees['id'] ?> "><?php echo $donnees['prenom'].' '.$donnees['nom']?></a>
									</p>

								</div>
								<?php
							}
						} else { //Aucun résultat 	 ?>
								<p>Aucun résultat.</p>
		<?php		}
					}
				} ?>
			</div>

			<footer>
				<?php include("footer.php"); ?>
			</footer>

		</body>




	</body>

</html>
