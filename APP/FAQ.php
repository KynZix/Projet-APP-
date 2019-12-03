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
				
				if (isset($_GET['searchtext'])) {  //Si l'utilisateur a effectué une recherche
					$searchquery = $_GET['searchtext'];
					$questionsReponses = $bdd->query("SELECT * FROM faq WHERE reponse LIKE '%$searchquery%' OR reponse LIKE '%$searchquery%' ");	
					if ($questionsReponses->rowCount() > 0) { //Si au moins 1 résultat a été trouvé	
						while ($donnees = $questionsReponses->fetch()){?>
							<div class="element2">
								<!-- question -->
								<p>
								<strong>Question <?php echo $donnees['id']?>:</strong>
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
<?php				}  

				}

				//________________________________


				else {   //L'utilisateur n'a pas effectué de recherche (soit il a directement accédé à la FAQ via le bouton du menu ou bien il a lancé une recherche vide")
					$questionsReponses = $bdd->query("SELECT * FROM faq ORDER BY ID DESC"); //Affiche toutes les questions dans la BDD, par ordre décroissant
					while ($donnees = $questionsReponses->fetch()){?>
						<div class="element2">
							<!-- question -->
							<p>
							<strong>Question <?php echo $donnees['id']?>:</strong>
							</p>
							
							<!-- reponses-->
							<p>
								<?php echo $donnees['reponse']?>
							</p>
							
						</div>
				<?php 
					}
				
				} ?>
			</div>

			<footer>
				<?php include("footer.php"); ?>
			</footer>

		</body>
	
	    


	</body>

</html>
