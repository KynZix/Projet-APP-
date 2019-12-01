<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Créer un compte</title>
		<link rel="stylesheet" href="CSS/register.css">
	</head>

	<body> 

		<?php include("header.php"); ?>
		
	    <div>
	  		<section>
	  			<form name="inscription" method="post" action="saisie.php">
			  		<legend><p>Creation d'un nouveau compte</p></legend>
			  		<div class="formulaire">

			  			<fieldset>
							<label>
								<p>Nom</p>
								<input type="text" name="Nom" id="name" placeholder="Nom" required>
							</label>
							<label>
								<p>Prenom</p>
								<input type="text" name="Prenom" id="prenom" placeholder="Prenom" required>
							</label>
						</fieldset>

						<fieldset>
							<label><input type="radio" name="gender" value="male" required>Male</label>
							<label><input type="radio" name="gender" value="female">Female</label>
							<label><input type="radio" name="gender" value="other">Other</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Date de naissance</p>
								<input type="date" name="date de naissance" id="birthday" placeholder="10/00/1997" required>
							</label>
						</fieldset>	

						<fieldset>
							<label>
								<p>Adresse mail</p>
								<input type="text" name="mail" id="mail" placeholder="abcd123@gmail.com" required> 
							</label>
						</fieldset>

						<fieldset >	
							<label> 
								<p>Numero</p>
								<input type="number" name="Numero" id="phone" placeholder="1234657890" required>
							</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Pays</p>
								<input type="text" name="Pays" id="country" placeholder="France" required>
							</label>
							<label> 
								<p>Ville</p>
								<input type="text" name="Ville" id="town" placeholder="Ville" required>
							</label>
							<label> 
								<p>Code Postal</p>
								<input type="number" name="Code Postal" id="ZIP" placeholder="Code Postal" required>
							</label>
						</fieldset>

						<fieldset >
							<label>
								<p>Adresse</p>
								<input type="text" name="Adresse" id="adress" placeholder="Adresse" required>
							</label>
							<label> 
								<p>Complement d'adresse</p>
								<input type="text" name="Complement d'adresse" id="adress2" placeholder="Complement d'adresse">
							</label>
						</fieldset>
					</div>
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
