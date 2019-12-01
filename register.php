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
							<link rel = "stylesheet" href="CSS/saisie.css">
							Adresse mail <input type="text" name="mail" id="mail" placeholder="abcd123@gmail.com"> 
						</label>
						<label>
						<link rel = "stylesheet" href="CSS/saisie.css"> 
							Pr&eacute;nom <input type="text" name="first_name" id="first_name" placeholder="ab">
						</label>
						<label> 
							Nom <input type="text" name="last_name" id="last_name" placeholder="cd">
						</label>

					</fieldset>
					
					<fieldset class="account_info">
						<label> 
							<link rel = "stylesheet" href="CSS/saisie.css">
							Date de naissance <input type="date" name="birthday" id="birthday" placeholder="10/00/1997">
						</label>
						<label>
						<link rel = "stylesheet" href="CSS/saisie.css"> 
							Num&eacute;ro <input type="number" name="phone" id="phone" placeholder="1234657890">
						</label>
					</fieldset>
					
					
					<fieldset class="account_info">
						<label>
							<link rel = "stylesheet" href="CSS/saisie.css">
							Nom <input type="text" name="name" id="name" placeholder="Nom">
						</label>
						<label>
							<link rel = "stylesheet" href="CSS/saisie.css">
							Prenom <input type="text" name="prenom" id="prenom" placeholder="Prenom">
						</label>
						<label>
							<link rel = "stylesheet" href="CSS/saisie.css">
							Sexe <input type="text" name="sex" id="sex" placeholder="Sexe">
						</label>
						<label>
						<link rel = "stylesheet" href="CSS/saisie.css"> 
							Pays <input type="text" name="country" id="country" placeholder="France">
						</label>

						<label>
						<link rel = "stylesheet" href="CSS/saisie.css"> 
							Ville <input type="text" name="town" id="town" placeholder="Ville">
						</label>

						<label>
						<link rel = "stylesheet" href="CSS/saisie.css"> 
							Code Postal <input type="number" name="ZIP" id="ZIP" placeholder="Code Postal">
						</label>
					</fieldset>

					<fieldset class="account_info">
						<label> 
							<link rel = "stylesheet" href="CSS/saisie.css">
							Adresse <input type="text" name="adress" id="adress" placeholder="Adresse">
						</label>
						<label>
							<link rel = "stylesheet" href="CSS/saisie.css"> 
							Compl&eacute;ment d'adresse <input type="text" name="adress2" id="adress2" placeholder="Complement d adresse">
						</label>
						<label>
							<link rel = "stylesheet" href="CSS/saisie.css">
							type utilisateur <input type="text" name="typeUtilisateur" id="typeUtilisateur" placeholder="type d'utilisateur">
						</label>
					</fieldset>

					<input type="submit" name="submit" value="S'inscrire">

				</form>
				
	   		</section>


		</div>
		<footer>
			<?php include("footer.php"); ?>
		</footer>
	  	

	</body>

</html>
