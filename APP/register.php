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
	  			<form name="inscription" method="post" action="registerTest.php">
			  		<legend><p>Creation d'un nouveau compte</p></legend>
			  		<div class="formulaire">

			  			<fieldset>
							<label>
								<p>Nom</p>
								<input type="text" name="nom" id="name" placeholder="Nom" 
									<?php if (isset($_COOKIE['nom'])) {
										echo 'value='.$_COOKIE['nom'];
									} ?>
									required>
							</label>
							<label>
								<p>Prenom</p>
								<input type="text" name="prenom" id="prenom" placeholder="Prenom"
									<?php if (isset($_COOKIE['prenom'])) {
										echo 'value=' .$_COOKIE['prenom'];
									} ?> 
									required>
							</label>
						</fieldset>

						<fieldset>
							<label><input type="radio" name="genre" value="1" required 
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==1) { echo "checked";} ?> 
								>Male</label>
							<label><input type="radio" name="genre" value="0"
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==0) { echo "checked";} ?> 
								>Female</label>
							<label><input type="radio" name="genre" value="2"
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==2) { echo "checked";} ?>
								>Other</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Date de naissance</p>
								<input type="date" name="birthday" id="birthday" placeholder="10/00/1997"
									<?php if (isset($_COOKIE['birthday'])) {
										echo 'value=' .$_COOKIE['birthday'];
									} ?>
									required>
							</label>
						</fieldset>	

						<fieldset>
							<label>
								<p>Adresse mail</p>
								<input type="text" name="mail" id="mail" placeholder="abcd123@gmail.com"
									<?php if (isset($_COOKIE['mail'])) {
										echo 'value=' .$_COOKIE['mail'];
									} ?>
								required> 
							</label>
						</fieldset>

						<fieldset >	
							<label> 
								<p>Numero</p>
								<input type="number" name="phone" id="phone" placeholder="1234657890"
									<?php if (isset($_COOKIE['phone'])) {
										echo 'value=' .$_COOKIE['phone'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Pays</p>
								<input type="text" name="pays" id="country" placeholder="France"
								<?php if (isset($_COOKIE['pays'])) {
										echo 'value=' .$_COOKIE['pays'];
									} ?>
									required>
							</label>
							<label> 
								<p>Ville</p>
								<input type="text" name="ville" id="town" placeholder="Ville"
								<?php if (isset($_COOKIE['ville'])) {
										echo 'value=' .$_COOKIE['ville'];
									} ?>
									required>
							</label>
							<label> 
								<p>Code Postal</p>
								<input type="number" name="ZIP" id="ZIP" placeholder="Code Postal"
								<?php if (isset($_COOKIE['ZIP'])) {
										echo 'value=' .$_COOKIE['ZIP'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset >
							<label>
								<p>Adresse</p>
								<input type="text" name="adresse" id="adress" placeholder="Adresse"
								<?php if (isset($_COOKIE['adresse'])) {
										echo 'value=' .$_COOKIE['adresse'];
									} ?>
									required>
							</label>
							<label> 
								<p>Complement d'adresse</p>
								<input type="text" name="adresse2" id="adress2" placeholder="Complement d'adresse"
								<?php if (isset($_COOKIE['adresse2'])) {
										echo 'value=' .$_COOKIE['adresse2'];
									} ?>
									required>
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
