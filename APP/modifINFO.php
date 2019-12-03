<!DOCTYPE html>
			
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

	  			<form action="modifINFOtest.php" id="login" method="post">
	  				<legend>Modification infos</legend>
		  			<fieldset>
						<label>
							nouveau nom <input type="text" name="nom" placeholder="Dupont"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							nouveau prenom <input type="text" name="prenom" placeholder="tintin"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							nouveau mail <input type="text" name="mail" placeholder="tintin.dupont@yopmail.com"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							nouveau telephone <input type="number" name="phone" placeholder="06"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							nouveau pays <input type="text" name="pays" placeholder="france">
						</label>
					</fieldset>

					<fieldset>
						<label> 
							nouvelle ville <input type="text" name="ville" placeholder="paris">
						</label>
					</fieldset>

					<fieldset>
						<label> 
							code postal <input type="number" name="zip" placeholder="92">
						</label>
					</fieldset>

					<fieldset>
						<label> 
							nouvelle adresse <input type="text" name="adresse" placeholder="2 rue de la pompe"> 
						</label>
					</fieldset>

					<fieldset class="validif">
						<input type="submit" name="validation" value="changer">
					</fieldset>

				</form>

	   		</section>
		</div>

	    <?php include("footer.php"); ?>


	</body>

</html>