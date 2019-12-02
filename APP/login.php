<html>
			

			
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Connexion</title>
		<link rel="stylesheet" href="CSS/login.css">
	</head>

	<body>  
		<?php include("header.php"); ?>


	    <div class="group">
	  		<section>

	  			<form action="loginTest.php" id="login" method="post">
	  				<legend>Login</legend>
		  			<fieldset>
						<label>
							Adresse mail <input type="text" name="mail" id="mail" placeholder="exemple@gmail.com" required> 
						</label>
					</fieldset>

					<fieldset class="account_info">
						<label> 
							Mot de passe <input type="password" name="mdp" id="password" placeholder="*****" required> 
						</label>
					</fieldset>

					<fieldset class="account_info">
						<input type="submit" name="remember" value="Se connecter" id="button">
					</fieldset>
				</form>

				


	   		</section>
		</div>

	    <?php include("footer.php"); ?>


	</body>

</html>

</html>
