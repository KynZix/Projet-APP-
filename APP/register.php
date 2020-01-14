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

			  		<legend><p>Creation d'un nouveau compte</p></legend>
			  			<fieldset>
							<label>
								<p>Nom</p>
								<input class="input-register" type="text" name="nom" id="nom" placeholder="Nom"
									<?php if (isset($_COOKIE['nom'])) {
										echo 'value='.$_COOKIE['nom'];
									}
									else{?>
										value="Nom"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Prenom</p>
								<input class="input-register" type="text" name="prenom" id="prenom" placeholder="Prenom" 
									<?php if (isset($_COOKIE['prenom'])) {
										echo 'value=' .$_COOKIE['prenom'];
									}
									else{?>
										value="Prenom"
									<?php } ?>
									required>
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
								<input class="input-register" type="date" name="birthday" id="birthday"
									<?php if (isset($_COOKIE['birthday'])) {
										echo 'value=' .$_COOKIE['birthday'];
									}
									else{?>
										value="2000-01-01"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Adresse mail</p>
								<input class="input-register" type="text" name="mail" id="mail" placeholder="abcd123@gmail.com"
									<?php if (isset($_COOKIE['mail'])) {?>
										value = <?= $_COOKIE['mail'] ?> ;
									<?php }
									else{?>
										value="abcd123@gmail.com"
									<?php } ?>
								required>

							</label>
						</fieldset>

						<fieldset >
							<label>
								<p>Numero</p>
								<input class="input-register" type="number" name="phone" id="phone" placeholder="1234657890" value="123456789"
									<?php if (isset($_COOKIE['phone'])) {
										echo 'value=' .$_COOKIE['phone'];
									}
									else{?>
										value="0123456789"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Pays</p>
								<input class="input-register" type="text" name="pays" id="pays" placeholder="France"
								<?php if (isset($_COOKIE['pays'])) {
										echo 'value='.$_COOKIE['pays'];
									}
									else{?>
										value="France"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Ville</p>
								<input class="input-register" type="text" name="ville" id="ville" placeholder="Ville" 
								<?php if (isset($_COOKIE['ville'])) {
										echo "value=".$_COOKIE['ville'];
									}
									else{?>
										value="Paris"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Code Postal</p>
								<input class="input-register" type="number" name="ZIP" id="ZIP" placeholder="Code Postal"
								<?php if (isset($_COOKIE['ZIP'])) {
										echo 'value=' .$_COOKIE['ZIP'];
									}
									else{?>
										value="12"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Adresse</p>
								<input class="input-register" type="text" name="adresse" id="adresse" placeholder="Adresse" 
								<?php if (isset($_COOKIE['adresse'])) {
										echo 'value=' .$_COOKIE['adresse'];
									}
									else{?>
										value="6rue"
									<?php } ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Complement d'adresse</p>
								<input class="input-register" type="text" name="adresse2" id="adresse2" placeholder="Complement d'adresse"
								<?php if (isset($_COOKIE['adresse2'])) {
										echo 'value=' .$_COOKIE['adresse2'];
									} ?>
									>
							</label>
						</fieldset>

						<?php if ($_SESSION['typeUtilisateur']==0) {?>
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
