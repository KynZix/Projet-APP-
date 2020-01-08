<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Créer un compte</title>
		<link rel="stylesheet" href="CSS/register.css">
	</head>

	<body>

		<?php include("header.php"); ?>

		<?php
		if (!isset($_SESSION['typeUtilisateur']) || $_SESSION['typeUtilisateur'] == 2) {
			header("Location: index.php");
		}
		?>

	    <div>
	  		<section>



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
			  		<legend><p>Creation d'un nouveau compte</p></legend>
			  			<fieldset>
							<label>
								<p>Nom</p>
								<input class="input-register" type="text" name="nom" id="nom" placeholder="Nom" value="no"
									<?php if (isset($_COOKIE['nom'])) {
										echo 'value='.$_COOKIE['nom'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Prenom</p>
								<input class="input-register" type="text" name="prenom" id="prenom" placeholder="Prenom" value="no"
									<?php if (isset($_COOKIE['prenom'])) {
										echo 'value=' .$_COOKIE['prenom'];
									} ?>
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
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==2) {echo "checked";} ?>
								>Autre</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Date de naissance</p>
								<input class="input-register" type="date" name="birthday" id="birthday" placeholder="10/00/1997"
									<?php if (isset($_COOKIE['birthday'])) {
										echo 'value=' .$_COOKIE['birthday'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Adresse mail</p>
								<input class="input-register" type="text" name="mail" id="mail" placeholder="abcd123@gmail.com" value="no"
									<?php if (isset($_COOKIE['mail'])) {?>
										value = <?= $_COOKIE['mail'] ?> ;
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
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Pays</p>
								<input class="input-register" type="text" name="pays" id="pays" placeholder="France" value="no"
								<?php if (isset($_COOKIE['pays'])) {
										echo 'value=' .$_COOKIE['pays'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Ville</p>
								<input class="input-register" type="text" name="ville" id="ville" placeholder="Ville" value="no"
								<?php if (isset($_COOKIE['ville'])) {?>
										value= <?= $_COOKIE['ville'];}?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Code Postal</p>
								<input class="input-register" type="number" name="ZIP" id="ZIP" placeholder="Code Postal" value="12"
								<?php if (isset($_COOKIE['ZIP'])) {
										echo 'value=' .$_COOKIE['ZIP'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Adresse</p>
								<input class="input-register" type="text" name="adresse" id="adresse" placeholder="Adresse" value="no"
								<?php if (isset($_COOKIE['adresse'])) {
										echo 'value=' .$_COOKIE['adresse'];
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Complement d'adresse</p>
								<input class="input-register" type="text" name="adresse2" id="adresse2" placeholder="Complement d'adresse" value="no"
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
