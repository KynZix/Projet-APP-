<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Cr&eacute;er un compte</title>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>  
		<?php include("menus.php"); ?>


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
        if(isset($_POST['valider'])){
        	$Nom = $_POST['Nom'];
        	$Prenom = $_POST['Prenom'];
        	$Sexe = $_POST['Sexe'];
        	$Pays = $_POST['Pays'];
        	$Ville = $_POST['Ville'];
        	$Code_postal = $_POST['Code Postal'];
        	$Adresse = $_POST['Adresse'];
        	$Complement_d_adresse = $_POST['Complement d adresse'];
        	echo 'Salut '. $Nom . ' ' . $Prenom.'de '. $Pays.'<br/>Bienvenue sur le site de Psytech !';
        	}
        ?>

	   		</section>


		</div>

	  	<?php include("footer.php"); ?>

	</body>

</html>
