<!DOCTYPE html>

<html>

	<head>
		<title>FAQ</title>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>  
		<!-- comment -->
		

		<body>
			<!--
			<header>
				<?php //include("header.php"); ?>
			</header>
			-->

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


			<div id="conteneur">
				<div class="element1">
					<!-- Cette partie sert à positionner la FAQ et la recherche -->
						<h1>FAQ</h1> 
						<form action="faq.php" method = "post">
							Recherche : <input type="text" name="question" /><br/>
						<input type="submit" name="submit">
						</form>
				</div>



				<?php
				//on recupere les 10 dernieres questions pseudos et reponses dans une table
				$questionsReponses = $bdd->query('SELECT question, reponse FROM faq ORDER BY id DESC');

				while ($questionReponse = $questionsReponses->fetch()){
				?>
				<!-- questions/reponses -->
					<div class="element2">

						<!-- question -->
						<span class="span1" tabindex="0">
							<?php echo $questionReponse['question']; ?>
						</span>

						<!-- reponses-->
						<p class="text1">
							<?php echo $questionReponse['reponse']?>
						</p>
					</div>
				<?php } ?>
			</div>

				
				
					
					 
					
				

			<?php
			//recuperer le nombre de question
			/*
			$nrbQuestions =  $bdd->query('SELECT MAX(id) AS nbr FROM faq');
			$nbrQuestions = $nrbQuestions->fetch();
			$nbrQuestions = $nbrQuestions['nbr'];
			echo $nbrQuestions;
			*/
			?>	

			<!--
			<footer>
				<?php include("footer.php"); ?>
			</footer>
			-->
		</body>
	
	    


	</body>

</html>