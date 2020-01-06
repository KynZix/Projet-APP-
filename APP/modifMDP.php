<!DOCTYPE html>
			
<html>

	<head>
		<meta charset="utf-8"/>
		<title>Connexion</title>
		<link rel="stylesheet" href="CSS/modifMDP.css">
	</head>

	<body>
		<?php include("header.php"); ?>


	    <div class="group">
	  		<section>

	  			<form action="modifMDPtest.php" id="login" method="post">
	  				<legend>Modification mot de passe</legend>
	  				<hr/>
		  			<fieldset>
						<label>
							ancien mot de passe <input type="password" name="mdp" id="mdp" placeholder="**********" 
							<?php if (isset($_COOKIE['mdp'])) {
								echo 'value='.$_COOKIE['mdp'];
							} ?>
							required> 
						</label>
					</fieldset>

					<fieldset class="nouveauMDP">
						<label> 
							nouveau mot de passe <input type="password" name="nmdp1" id="nmdp" placeholder="**********" 
							<?php if (isset($_COOKIE['nmdp1'])) {
								echo 'value='.$_COOKIE['nmdp1'];
							} ?>
							required> 
						</label>
					</fieldset>

					<fieldset class="nouveauMDP">
						<label> 
							confirmation passe <input type="password" name="nmdp2" id="nmdp" placeholder="**********" 
							<?php if (isset($_COOKIE['nmdp2'])){
								echo 'value='.$_COOKIE['nmdp2'];
							} ?>
							required> 
						</label>
					</fieldset>

					<fieldset class="validif">
						<input type="submit" name="validation" value="changer" id="button">
					</fieldset>

					<?php if (isset($_COOKIE['nmdp2'])){
						if ($_COOKIE['nmdp1']==$_COOKIE['nmdp2']) {
							echo "<fieldset>mot de passe erroné</fieldset>";
						}
						else{
							echo "<fieldset>mettez le meme nouveau mot de passe</fieldset>";
						}
						
					} ?>

				</form>

	   		</section>
		</div>

	    <?php include("footer.php"); ?>


	</body>

</html>