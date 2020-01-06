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
			  		<legend><p>Creation d'un nouveau compte</p></legend>
			  			<fieldset>
							<label>
								<p>Nom</p>
								<input type="text" name="nom" id="nom" placeholder="Nom" 
									<?php if (isset($_COOKIE['nom'])) {
										echo 'value='.$_COOKIE['nom'];
										setcookie("nom","",time()-200);
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Prenom</p>
								<input type="text" name="prenom" id="prenom" placeholder="Prenom"
									<?php if (isset($_COOKIE['prenom'])) {
										setcookie("prenom","",time()-200);
										echo 'value=' .$_COOKIE['prenom'];
									} ?> 
									required>
							</label>
						</fieldset>

						<fieldset id="radios">
							<label><input type="radio" id="radio" name="genre" value="1" required 
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==1) { echo "checked";setcookie("genre","",time()-200);} ?> 
								>Homme</label>
							<label><input type="radio" id="radio" name="genre" value="0"
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==0) { echo "checked";setcookie("genre","",time()-200);} ?> 
								>Femme</label>
							<label><input type="radio" id="radio" name="genre" value="2"
								<?php if (isset($_COOKIE['genre']) and $_COOKIE['genre']==2) {echo "checked";setcookie("genre","",time()-200);} ?>
								>Autre</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Date de naissance</p>
								<input type="date" name="birthday" id="birthday" placeholder="10/00/1997"
									<?php if (isset($_COOKIE['birthday'])) {
										echo 'value=' .$_COOKIE['birthday'];
										setcookie("birthday","",time()-200);
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
										setcookie("mail","",time()-200);
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
										setcookie("phone","",time()-200);
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Pays</p>
								<input type="text" name="pays" id="pays" placeholder="France"
								<?php if (isset($_COOKIE['pays'])) {
										echo 'value=' .$_COOKIE['pays'];
										setcookie("pays","",time()-200);
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Ville</p>
								<input type="text" name="ville" id="ville" placeholder="Ville"
								<?php if (isset($_COOKIE['ville'])) {?>
										value= <?= $_COOKIE['ville'];?>
									<?php setcookie("ville","",time()-200);} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Code Postal</p>
								<input type="number" name="ZIP" id="ZIP" placeholder="Code Postal"
								<?php if (isset($_COOKIE['ZIP'])) {
										echo 'value=' .$_COOKIE['ZIP'];
										setcookie("ZIP","",time()-200);
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Adresse</p>
								<input type="text" name="adresse" id="adresse" placeholder="Adresse"
								<?php if (isset($_COOKIE['adresse'])) {
										echo 'value=' .$_COOKIE['adresse'];
										setcookie("adresse","",time()-200);
									} ?>
									required>
							</label>
						</fieldset>

						<fieldset>
							<label> 
								<p>Complement d'adresse</p>
								<input type="text" name="adresse2" id="adresse2" placeholder="Complement d'adresse"
								<?php if (isset($_COOKIE['adresse2'])) {
										echo 'value=' .$_COOKIE['adresse2'];
										setcookie("adresse2","",time()-200);
									} ?>
									>
							</label>
						</fieldset>

						<?php if ($_SESSION['typeUtilisateur']==0) {?>
							<fieldset id="radios">
								<label><input type="radio" id="radio" name="typeUtilisateur" value="2" checked>Utilisateur</label>
								<label><input type="radio" id="radio" name="typeUtilisateur" value="1">Gestionnaire</label>
								<label><input type="radio" id="radio" name="typeUtilisateur" value="0">Administrateur</label>
							</fieldset>
						<?php } ?>

					<fieldset>
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
