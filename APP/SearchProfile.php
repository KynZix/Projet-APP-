<!DOCTYPE html>

<html>

	<head>
		<title>Recherche</title>
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
					$questionsReponses = $bdd->query("SELECT * FROM compte WHERE nom LIKE '%$searchquery%' OR prenom LIKE '%$searchquery%' OR id LIKE '%$searchquery%'");	
					if ($questionsReponses->rowCount() > 0) { //Si au moins 1 résultat a été trouvé	
						while ($donnees = $questionsReponses->fetch()){?>
							<div class="element2">
								<!-- question -->
								<p>
								<strong>Utilisateur n°<?php echo $donnees['id']?>:</strong> <a href="profil.php?profileid=<?php echo $donnees['id'] ?> "><?php echo $donnees['prenom'].' '.$donnees['nom']?></a>
								</p>
							
							</div>
<?php 
						}

					} else { //Aucun résultat 	 ?>		
						<p>Aucun résultat n'a été trouvé.</p>
<?php				}  

				}

				//________________________________


				else {   //L'utilisateur n'a rien mis dans la barre de recherche
					header("Location:profil.php");
					}
				
				?>
			</div>

			<footer>
				<?php include("footer.php"); ?>
			</footer>

		</body>
	
	    


	</body>

</html>
