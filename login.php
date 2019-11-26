<php? // On démarre la session AVANT d écrire du code HTML
session_start();
// On s amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>
<?php setcookie('nom', 'Dupont', time() + 365*24*3600, null, null, false, true); ?>
<?php setcookie('prenom', 'Jean', time() + 365*24*3600, null, null, false, true); ?>
<?php setcookie('age', 21, time() + 365*24*3600, null, null, false, true); ?>
<?php setcookie('email', 'jean.dupont@gmail.com', time() + 365*24*3600, null, null, false, true); ?>
<?php setcookie('mot de passe', 'M@teo21', time() + 365*24*3600, null, null, false, true); ?>
<!DOCTYPE html>

<html>

	<head>
		<title>Connexion</title>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>  
		<?php include("header.php"); ?>
	    <div class="group">
	  		<section>

	  			<form id="login">
		  			<fieldset class="account_info">
			  			<legend>Login</legend>
						<label>
							Adresse mail <input type="text" name="mail" id="mail" placeholder="abcd123@gmail.com"> 
						</label>
					</fieldset>

					<fieldset class="account_info">
						<label> 
							Mot de passe <input type="text" name="mot de passe" id="password" placeholder="*****"> 
						</label>
					</fieldset>

					<fieldset class="account_info">
						<input type="checkbox" name="remember"> Se souvenir de moi
					</fieldset>
					<fieldset class="account_info">	
						<input type="submit" name="submit" value="Se connecter" id="button" link = "">
						<?php înclude("testValiditeloginFonctionnel.php") ?>
					</fieldset>
				</form>
	   		</section>
		</div>

	    <?php include("footer.php"); ?>


	</body>

</html>

</html>
