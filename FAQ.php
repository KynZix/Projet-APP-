<!DOCTYPE html>

<html>

	<head>
		<title>FAQ</title>
		<link rel="stylesheet" href="CSS/faq.css">
	</head>

	<body>  
	<?php include("header.php"); ?>
	<p>
		<div id="conteneur">
			<div class="element1">
				<!-- Cette partie sert à positionner la FAQ et la recherche -->
					<h1>FAQ</h1> 
					<form action="faq.php" method = "post">
						Search : <input type="text" name="question" /><br/>
					<input type="submit" name="submit">
					</form>
			</div>
			<div class="element2">
				<!-- Ici on va avoir les questions/réponses -->
				<h6>Comment faire pour avoir un compte?</h6>
			</div>
			<div class="element2">
				Je sais comment le faire ! 
			</div>
			
		</div>
	</p>	

		



	<?php include("footer.php"); ?>
	    


	</body>

</html>