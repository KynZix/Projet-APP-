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
						<input type="submit" name="submit" value="Se connecter" id="button">
					</fieldset>
				</form>
	   		</section>
		</div>

	    <?php include("footer.php"); ?>


	</body>

</html>