<!DOCTYPE html>

<html>

	<head>
		<title>Connexion</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>  
		<!-- comment -->
		<header class="group">
			<h1 class="logo">Psitech</h1>
	    </header>

	    <div class="group">
	    	<header>
				<?php include("menus.php"); ?>

	    	</header>
	  		<section>
	  			<form id="login">
		  			<fieldset class="account_info">
			  			<legend>Pas encore inscrit ?</legend>
						<p>Créer un compte pour profiter de plusieurs avantages</p>

						</p>
					</fieldset>
					<fieldset class="account_info">	
						<a href="register.html" id="button">S'inscrire</a>
					</fieldset>
				</form>

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
						<input type="submit" name="submit" value="Se connecter" id="button">
					</fieldset>
				</form>
	   		</section>
		</div>

	    <footer class="group">
			<small>&copy; Psitech</small>
	    </footer>


	</body>

</html>