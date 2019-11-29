<?php Session_start();
$_SESSION['nom'] = "";
$_SESSION['prenom'] = "";
$_SESSION['mail'] ="";
$_SESSION['dateDeNaissance'] ="";
$_SESSION['numeroDeTelephone'] ="";
$_SESSION['sexe'] ='';
$_SESSION['pays'] ='';
$_SESSION['ville'] ='';
$_SESSION['codePostal'] ='';
$_SESSION['adresse'] ='';
$_SESSION['complementAdresse'] ='';
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Cr&eacute;er un compte</title>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body> 
		<header>
			<?php include("header.php"); ?>
		</header>
		
	    <div class="group">
	  		<section>
	  			<form name="inscription" method="post" action="saisie.php">
		  			<fieldset class="account_info">
			  			<legend>Cr&eacute;ation d'un nouveau compte</legend>
					</fieldset>
					<fieldset class="account_info">
						<label>
							Adresse mail <input type="text" name="mail" id="mail" placeholder="abcd123@gmail.com"> 
						</label>
						<label> 
							Pr&eacute;nom <input type="text" name="prenom" id="first_name" placeholder="ab">
						</label>
						<label> 
							Nom <input type="text" name="nom" id="last_name" placeholder="cd">
						</label>

					</fieldset>
					
					<fieldset class="account_info">
						<label> 
							Date de naissance <input type="date" name="date de naissance" id="birthday" placeholder="10/00/1997">
						</label>
						<label> 
							Num&eacute;ro <input type="number" name="Numero" id="phone" placeholder="1234657890">
						</label>
					</fieldset>
					
					
					<fieldset class="account_info">
						<label>
							Nom <input type="text" name="Nom" id="name" placeholder="Nom">
						</label>
						<label>
							Prenom <input type="text" name="Prenom" id="prenom" placeholder="Prenom">
						</label>
						<label>
							Sexe <input type="text" name="Sexe" id="sex" placeholder="Sexe">
						</label>
						<label> 
							Pays <input type="text" name="Pays" id="country" placeholder="France">
						</label>

						<label> 
							Ville <input type="text" name="Ville" id="town" placeholder="Ville">
						</label>

						<label> 
							Code Postal <input type="number" name="Code Postal" id="ZIP" placeholder="Code Postal">
						</label>
					</fieldset>

					<fieldset class="account_info">
						<label> 
							Adresse <input type="text" name="Adresse" id="adress" placeholder="Adresse">
						</label>
						<label> 
							Compl&eacute;ment d'adresse <input type="text" name="Complement d'adresse" id="adress2" placeholder="Complement d adresse">
						</label>
					</fieldset>

					<input type="submit" name="submit" value="S'inscrire">

				</form>
				
				<?php
				$subject = "inscription sur le site Psytech";
				$message = "répondez à ce message si vous avez bien demandé à être inscrit aux tests psychotechniques";
				$headers = array(
		    		'From' => 'cyril.nerin@gamil.com',
		    		'CC ' => 'leonard.huang@isep.fr, msaknisabri@gmail.com, cdechateauvieux7@gmail.com, leopold.lacruz@gmail.com, leonard.huang.99@gmail.com', 
		    		'Reply-To' => 'cyril.nerin@gmail.com, leonard.huang@isep.fr, msaknisabri@gmail.com, cdechateauvieux7@gmail.com, leopold.lacruz@gmail.com, leonard.huang.99@gmail.com',
		    		'X-Mailer' => 'PHP/' . phpversion()
				);

				?>

	   		</section>


		</div>
		<footer>
			<?php include("footer.php"); ?>
		</footer>
	  	

	</body>

</html>
