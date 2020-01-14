<!DOCTYPE html>
			
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Connexion</title>
		<link rel="stylesheet" href="CSS/modifNFO.css">
	</head>

	<body>
		<?php include("header.php"); ?>

		<?php if ( !( isset($_SESSION['typeUtilisateur']) && ($_SESSION['typeUtilisateur'] = 1 ||  $_SESSION['typeUtilisateur'] = 0 || $_SESSION['typeUtilisateur'] = 2) ) ) { //on ne peut entrer sur le BO que si on en a lautoristion
			header("Location: index.php");
		} ?>

	    <div id="modif">
	  		<section>

	  			<form action="modifINFOtest.php" id="login" method="post">
	  				<legend>Modification infos</legend>
		  			<fieldset>

		  				<div class="labelInput">

		  					<label> Nouveau nom </label>
							<input type="text" name="nom" placeholder="Dupont">

						</div>

						<div class="labelInput">

							<label> Nouveau prenom </label>
							<input type="text" name="prenom" placeholder="tintin"> 
		  					
		  				</div>
							
					</fieldset>

					<fieldset>

						<div class="labelInput">
							<label> Nouveau mail </label>
							<input type="text" name="mail" placeholder="tintin.dupont@yopmail.com">
						</div>
						
						<div class="labelInput">
							<label> Nouveau telephone </label>
							<input type="number" name="phone" placeholder="06">
						</div>

					</fieldset>

					<fieldset>

						<div class="labelInput">
							<label> Nouveau pays </label>
							<input type="text" name="pays" placeholder="france">
						</div>

						<div class="labelInput">
							<label> Nouvelle ville </label>
							<input type="text" name="ville" placeholder="paris">
						</div>

						<div class="labelInput">
							<label> Code postal </label>
							<input type="number" name="zip" placeholder="92">
						</div>

						<div class="labelInput">
							<label> Nouvelle adresse </label>
							<input type="text" name="adresse" placeholder="2 rue de la pompe">
						</div> 
						
					</fieldset>

						<?php if (isset($_COOKIE['infos'])) {?>
							<legend><?= $_COOKIE['infos']; ?> </legend>
							
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