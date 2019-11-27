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
						Recherche : <input type="text" name="question" /><br/>
					<input type="submit" name="submit">
					</form>
			</div>
			<!-- 1ère question -->
			<div class="element2">
				<!-- Ici on va avoir les questions/réponses -->
				<span class="span1" tabindex="0">Comment faire pour avoir un compte?</span>
				<p class="text1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>
			<!-- 2ème question -->
			<div class="element2">
				<span class="span1" tabindex="0">Comment avoir un superpouvoir?</span>
				<p class="text2">Je sais pas . </p>
			</div>
			<!-- 3ème question -->
			<div class="element2">
				<span class="span1" tabindex="0">Comment fait Cyril pour être si beau ?</span>
				<p class="text3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>
			</div>
			<!-- 4ème question -->
			<div class="element2">
				<span class="span1" tabindex="0">Comment avoir 20/20?</span>
				<p class="text4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>
			</div>
			<!-- 5ème question -->
			<div class="element2">
				<span class="span1" tabindex="0">Comment être intelligent ?</span>
				<p class="text5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>
			</div>
		</div>
		<!-- 6ème question -->
			<div class="element2">
				<span class="span1" tabindex="0">Comment ne pas perdre ses cheveux ?</span>
				<p class="text6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>
			</div>
		</div>

		<!-- 7ème question -->
			<div class="element2">
				<span class="span1" tabindex="0">Comment faire si j'ai renversé du coca sur ma machine ?</span>
				<p class="text7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>
			</div>
		</div>
	</p>	

		



	<?php include("footer.php"); ?>
	    


	</body>

</html>