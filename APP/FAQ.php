<!DOCTYPE html>

<html>

	<head>
		<title>FAQ</title>
		<link rel="stylesheet" href="CSS/faq.css">
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

				$questionsReponses = $bdd->query("SELECT * FROM faq ORDER BY ID DESC"); //Affiche toutes les questions dans la BDD, par ordre décroissant
					while ($donnees = $questionsReponses->fetch()){?>
						<div class="element2">
							<!-- question -->
							<span class="span1" tabindex="0">
								<p>
								<strong>Question <?php echo $donnees['id']?>:</strong> <?php echo $donnees['question']?>
								</p>
							</span>

							<!-- reponses-->
							<p class="text1">
								<?php echo $donnees['reponse']?>
							</p>

						</div>
				<?php
					}

			 ?>
			</div>

			<footer>
				<?php include("footer.php"); ?>
			</footer>

		</body>




	</body>

</html>
