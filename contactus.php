<!DOCTYPE html>

<html>

	<head>
		<title>Contact</title>
		<link rel="stylesheet" href="CSS/contact.css">
	</head>

	<body>  
		<!-- comment -->
		

		<body>
			<header>
				<?php include("header.php"); ?>
			</header>
			<div class="header">
				<h1>Nous contacter </h1>
			</div>
			
			
			<!-- Ce n'est pas la version définitive ! , c'est juste un aperçu de ce que pourrait être notre page contact us -->
			<!-- De toute façon il ne marche pas puisque les données ne sont transmises/stockées nulle part -->
			<div class="contact">
				<form action="contact.php" method="post">					
				  <div class="elem-group">
				    <label for="name">Votre nom</label>
				    <input type="text" id="name" name="visitor_name" placeholder="Votre nom" pattern=[A-Z\sa-z]{3,20} required>
				  </div>
				  <div class="elem-group">
				    <label for="email">Votre e-mail</label>
				    <input type="email" id="email" name="visitor_email" placeholder="votre@email.com" required>
				  </div>
				  <div class="elem-group">
				    <label for="title">Raison du ticket</label>
				    <input type="text" id="title" name="email_title" required placeholder="J'ai oublié mon mot de passe et mon nom d'utilisateur" pattern=[A-Za-z0-9\s]{8,60}>
				  </div>
				  <div class="elem-group">
				    <label for="message">Votre message</label>
				    <textarea id="message" name="visitor_message" placeholder="Votre message ici." required></textarea>
				  </div>
				  <button type="submit">Envoyer le message</button>
				</form>
			</div>
			<footer>
				<?php include("footer.php"); ?>
			</footer>
		</body>
	
	    


	</body>

</html>
