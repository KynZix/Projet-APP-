<!DOCTYPE html>

<html>

	<head>
		<title>Psitech info utilisateur</title>
		<link rel="stylesheet" href="CSS/profil.css">
	</head>

	<body>
		<?php include("header.php"); ?>

		<div class="affichage">
			<div class="menuProfil1">
				<a href="user.php">USER</a>
				<a href="tests.php">TESTS</a>
			</div>
			<div class="infos">
				<p>nom</p>
				<p>prenom</p>
				<p>mail</p>
				<p>adresse</p>
				<p>numero de tel</p>
			</div>
			<div class="menuProfil2">
				<a href="modifInfos.php">MODIFIER INFOS</a>
				<a href="modifMDP.php">MODIFIER MOT DE PASSE</a>
			</div>
		</div>


		<?php include("footer.php"); ?>  	
	</body>

</html>