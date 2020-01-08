<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Ajouter un test</title>
		<link rel="stylesheet" href="CSS/register.css">
	</head>

	<body> 

		<?php include("header.php"); ?>
		
	    <div>
	  		<section>
	  			<form name="inscription" method="post" action="ajoutTestTest.php">
			  		<legend><p>Ajout d'un test</p></legend>

			  			<fieldset>
							<label>
								<p>Mail de la personne examine</p>
								<input type="text" name="mail" placeholder="mail" 
								<?php 
								if (isset($_COOKIE["mail"])) {
								echo "value=".$_COOKIE["mail"];
								} ?>
								required>
							</label>
							<?php 
							if (isset($_COOKIE["mail"])) {
							echo "<legend>mail erroné</legend>";
							} ?>

							
						</fieldset>

						<fieldset>
							<label>
								<p>resultat</p>
								<input type="number" name="resultat" placeholder="resultat"
								<?php 
								if (isset($_COOKIE["resultat"])) {
								echo "value=".$_COOKIE["resultat"];
								} ?>
								required>
							</label>
						</fieldset>

			  			<fieldset>
							<label>
								<p>score</p>
								<input type="number" name="score" placeholder="score"
								<?php 
								if (isset($_COOKIE["score"])) {
								echo "value=".$_COOKIE["score"];
								} ?>
								required>
							</label>
						</fieldset>

						<fieldset>
							<label>
								<p>Date du test</p>
								<input type="date" name="date"
								<?php 
								if (isset($_COOKIE["date"])) {
								echo "value=".$_COOKIE["date"];
								}
								else{
									echo "value=date('Y-m-d')";
								}?>>
							</label>
						</fieldset>	

					<fieldset>
						<input type="submit" name="submit" value="rajouter">
					</fieldset>

				</form>

	   		</section>


		</div>
		<footer>
			<?php include("footer.php"); ?>
		</footer>
	  	

	</body>

</html>
