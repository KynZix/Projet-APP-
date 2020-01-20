<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Créer un compte</title>
		<link rel="stylesheet" href="CSS/register.css">
	</head>

	<body>

		<?php include("header.php"); ?>

		<?php
		if ( !( isset($_SESSION['typeUtilisateur']) && ($_SESSION['typeUtilisateur'] = 1 ||  $_SESSION['typeUtilisateur'] = 0) ) ) {
			header("Location: index.php");
		}
		?>

	    <div>
	  		<section>

	  			<script type="text/javascript" src="javascript/register.js"></script>

	  			<form name="inscription" method="post" action="registerTest.php">
	  				<?php
		  			if (isset($_COOKIE['mail'])) {

		  				$mail = $bdd->prepare("SELECT * FROM compte WHERE mail = :mail");
		  				$mail -> execute(array('mail' => $_COOKIE['mail'] ));
		  				$mail = $mail -> fetch();
		  				if (isset($mail['mail'])) {?>
		  					<p> adresse deja prise</p>
		  				<?php }
		  			}
	  				?>

			  		<legend><h3>Création d'un nouveau compte</h3></legend>
			  			<fieldset>
			  			<div class="labelInput">
							<label>Nom</label>
								<input class="input-register" type="text" name="nom" id="nom" placeholder="Nom" onblur="verifRempliLettre(this)" required>
						</div>
							<span class="tooltip">Nom incorrect</span>
						<div class="labelInput">
							<label>Prénom</label>
								<input class="input-register" type="text" name="prenom" id="prenom" placeholder="Prenom" onblur="verifRempliLettre(this)" required>							
						</div>
							<span class="tooltip">Prénom incorrect</span>
						</fieldset>

						<fieldset id="radios">
							<label><input class="input-register" type="radio" id="radio" name="genre" value="1" required
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==1) { echo "checked";} ?>
								>Homme</label>
							<label><input class="input-register" type="radio" id="radio" name="genre" value="0"
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==0) { echo "checked";} ?>
								>Femme</label>
							<label><input class="input-register" type="radio" id="radio" name="genre" value="2"
								<?php if (!isset($_COOKIE['genre']) || $_COOKIE['genre']==2) {echo "checked";} ?>
								>Autre</label>
						</fieldset>

						<fieldset>
						<div class="labelInput">
							<label>Date de naissance</label>
								<input class="input-register" type="date" name="birthday" id="birthday" placeholder="01/01/2000" required>
						</div>
							<span class="tooltip">Vous devez remplir votre date de naissance</span>
						</fieldset>

						<fieldset>
						<div class="labelInput">
							<label>Adresse mail</label>
								<input class="input-register" type="text" name="mail" id="mail" placeholder="abcd123@gmail.com" onblur="verifMail(this)" required>
						</div>
							<span class="tooltip">Mail incorrect</span>
						</fieldset>

						<fieldset >
						<div class="labelInput">
							<label>Numéro</label>
								<input class="input-register" type="number" name="phone" id="phone" placeholder="1234657890" onblur="verifTel(this)" required>
						</div>
								<span class="tooltip"> Numéro au format incorect ou non rempli </span>
						</fieldset>

						<fieldset>
						<div class="labelInput">
							<label>Pays</label>
								<input class="input-register" type="text" name="pays" id="pays" placeholder="France" onblur="verifRempliLettre(this)" required>
						</div>
							<span class="tooltip">Vous devez noter votre pays de résidence</span>
						</fieldset>

						<fieldset>
						<div class="labelInput">
							<label>Ville</label>
								<input class="input-register" type="text" name="ville" id="ville" placeholder="Ville" onblur="verifRempliLettre(this)" required>
						</div>
							<span class="tooltip">Vous devez noter votre ville de résidence</span>
						<div class="labelInput">
							<label>Code Postal</label>
								<input class="input-register" type="number" name="ZIP" id="ZIP" placeholder="Code Postal" onblur="verifZIP(this)" required>
						</div>
							<span class="tooltip"> Code postal de 5 chiffres svp </span>
						</fieldset>


						<fieldset>
						<div class="labelInput">
							<label>Adresse</label>
								<input class="input-register" type="text" name="adresse" id="adresse" placeholder="Adresse" onblur="verifAdresse(this)" required>
						</div>
							<span class="tooltip"> Adresse invalide </span>
						<div class="labelInput">	
							<label>Complément d'adresse</label>
								<input class="input-register" type="text" name="adresse2" id="adresse2" placeholder="Complement d'adresse">
						</div>
						</fieldset>

						<?php if ($_SESSION['typeUtilisateur']==2) {?>
							<fieldset id="radios">
								<label><input class="input-register" type="radio" id="radio" name="typeUtilisateur" value="2" checked>Utilisateur</label>
								<label><input class="input-register" type="radio" id="radio" name="typeUtilisateur" value="1">Gestionnaire</label>
								<label><input class="input-register" type="radio" id="radio" name="typeUtilisateur" value="0">Administrateur</label>
							</fieldset>
						<?php } ?>

					<fieldset class="submitButton" >
						<input type="submit" name="submit" value="S'inscrire">
					</fieldset>

				</form>

	   		</section>


		</div>
		<footer>
			<?php include("footer.php"); ?>
		</footer>


	</body>

</html>
