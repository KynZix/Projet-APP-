<!DOCTYPE html>
			
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Connexion</title>
		<link rel="stylesheet" href="CSS/modifNFO.css">
	</head>

	<body>
		<?php include("header.php"); ?>


	    <div id="modif">
	  		<section>

	  			<form action="modifINFOtest.php" id="login" method="post">
	  				<legend>Modification infos</legend>
	  				<hr/>
		  			<fieldset>
						<label>
							Nouveau nom <input type="text" name="nom" placeholder="Dupont"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Nouveau prenom <input type="text" name="prenom" placeholder="tintin"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Nouveau mail <input type="text" name="mail" placeholder="tintin.dupont@yopmail.com"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Nouveau telephone <input type="number" name="phone" placeholder="06"> 
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Nouveau pays <input type="text" name="pays" placeholder="france">
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Nouvelle ville <input type="text" name="ville" placeholder="paris">
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Code postal <input type="number" name="zip" placeholder="92">
						</label>
					</fieldset>

					<fieldset>
						<label> 
							Nouvelle adresse <input type="text" name="adresse" placeholder="2 rue de la pompe"> 
						</label>
					</fieldset>

						<?php if (isset($_COOKIE['infos'])) {?>
							<legend>
								<?php echo $_COOKIE['infos']; ?>
							</legend>
						<?php setcookie("infos","",time()-200);} ?>

					<fieldset class="validif">
						<input type="submit" name="validation" value="Changer">
					</fieldset>

				</form>
				
	   		</section>
		</div>

	    <?php include("footer.php"); ?>


	</body>

</html>