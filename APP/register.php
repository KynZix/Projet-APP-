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

	  			<form name="inscription" method="post" action="registerTest.php">

	  				<?php
		  			if (isset($_COOKIE['mail'])) {//

		  				$mail = $bdd->prepare("SELECT * FROM compte WHERE mail = :mail");
		  				$mail -> execute( array( 'mail' => htmlspecialchars($_COOKIE['mail'] ) ) );
		  				$mail = $mail -> fetch();
		  				if (isset($mail['mail'])) {?>
		  					<p> adresse deja prise</p>
		  				<?php }
		  			}
	  				?>

			  		<legend><h3>Création d'un nouveau compte</h3></legend>
			  			<fieldset>
							<label>
								<p>Nom</p>
								<input class="input-register" type="text" name="nom" id="nom" placeholder="Nom" required>
							</label>

							<label>
								<p>Prenom</p>
								<input class="input-register" type="text" name="prenom" id="prenom" placeholder="Prenom" required>
							</label>
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
							<label>
								<p>Date de naissance</p>
								<input class="input-register" type="date" name="birthday" id="birthday" placeholder="01/01/2000" required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Adresse mail</p>
								<input class="input-register" type="text" name="mail" id="mail" placeholder="abcd123@gmail.com" required>
							</label>
						</fieldset>

						<fieldset >
							<label>
								<p>Numero</p>
								<input class="input-register" type="number" name="phone" id="phone" placeholder="1234657890" required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Pays</p>
								<input class="input-register" type="text" name="pays" id="pays" placeholder="France" required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Ville</p>
								<input class="input-register" type="text" name="ville" id="ville" placeholder="Ville" required>
							</label>
							<label>
								<p>Code Postal</p>
								<input class="input-register" type="number" name="ZIP" id="ZIP" placeholder="Code Postal" required>
							</label>
						</fieldset>


						<fieldset>
							<label>
								<p>Adresse</p>
								<input class="input-register" type="text" name="adresse" id="adresse" placeholder="Adresse" required>
							</label>
							<label>
								<p>Complement d'adresse</p>
								<input class="input-register" type="text" name="adresse2" id="adresse2" placeholder="Complement d'adresse">
							</label>
						</fieldset>

						<?php if ($_SESSION['typeUtilisateur']==2) {?>
							<fieldset id="radios">
								<label><input class="input-register" type="radio" id="radio" name="typeUtilisateur" value="2" checked>Utilisateur</label>
								<label><input class="input-register" type="radio" id="radio" name="typeUtilisateur" value="1">Gestionnaire</label>
								<label><input class="input-register" type="radio" id="radio" name="typeUtilisateur" value="0">Administrateur</label>
							</fieldset>
						<?php } ?>

					<fieldset>
						<input class="input-register" type="submit" name="submit" value="S'inscrire">
					</fieldset>

				</form>

	   		</section>


		</div>
		<footer>
			<?php include("footer.php"); ?>
		</footer>


	</body>

</html>
