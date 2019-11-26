<!DOCTYPE html>

<html>

	<head>
		<title>FAQ</title>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>  
		<!-- comment -->
		

		<body>
			<header>
				<?php include("header.php"); ?>
			</header>

			<?php
			//on essaie e se connecter a la bdd, s'il y a une erreur on affiche juste une erreur au lieu d'afficher le lien vers la bdd par securité
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			catch(Exception $e)
			{
				die('erreur:'.$e -> getMessage());
			}
			?>
			

			<?php
			//on recupere les 10 dernieres questions pseudos et reponses dans une table
			$questionsPseudosReponses = $bdd->query('SELECT question, reponse FROM faq ORDER BY id DESC LIMIT 0,10');

			while ($questionPseudoReponse = $questionsPseudosReponses->fetch())
			{
				echo '<section>' . $questionPseudoReponse['question'] . ':</n> ' . $questionPseudoReponse['reponse'];
			}
			?>
		
		
			<footer>
				<?php include("footer.php"); ?>
			</footer>
		</body>
	
	    


	</body>

</html>