<!DOCTYPE html>

<html>

	<head>
		<title>Profil</title>
		<link rel="stylesheet" href="CSS/profil.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<body>
		<?php include("header.php"); 
		
		//Connexion à la BDD
			
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
			die('erreur:'.$e -> getMessage()); //Affiche un message en cas d'erreur
		}
		if (isset($_GET['searchid'])) {  //Si l'utilisateur a effectué une recherche
			$currentid = $_GET['searchid'];
		} else {
			$currentid = $_SESSION['id'];
		}
		$req = $bdd -> query("SELECT id,nom,prenom,mail,adresse,phone FROM compte WHERE id='$currentid'");
		$req -> execute(array('id' => $_SESSION['id']));
		$profil = $req->fetch();


		?>
		<div class="affichage">
			<div class="menuProfil1">
				<a href="profil.php?searchid=<?php echo $_SESSION['id'] ?>">USER</a>
				<a href="tests.php">TESTS</a>
				
				<form class="menuinput" action="SearchProfile.php">
		  			<input type="search" name="searchtext" placeholder="Recherche..." id ="search-bar-profile">	
					<button type="submit" id="search-button"><i class="fa fa-search"></i></button>
		  		</form>
			</div>
			<?php if ($req->rowCount() > 0) {  ?>
			<div class="infos">
				<div class="col-2-2">
					<img id="profilephoto" src="Media/Emptyprofile.png">
				</div>
				<div>
					<p><strong>Nom:</strong> <?php echo $profil['nom']?></p>
					<p><strong>Prénom:</strong>  <?php echo $profil['prenom']?> </p>
					<p><strong>Adresse Mail:</strong> <?php echo $profil['mail']?></p>
					<p><strong>Adresse:</strong> <?php echo $profil['adresse']?></p>
					<p><strong>Numéro:</strong> <?php echo $profil['phone']?></p>
				</div>
			</div>
			<?php } else { //L'utilisateur a tapé l'ID d'un utilisateur qui n'existe pas ?>
			<div class="infos">
				<img src="Media/error.jpg" id="errorimage">
				<h1>ERREUR: Cet utilisateur n'existe pas</h1>
			</div>
			<?php } ?>
			<?php
			if (($profil['id'] == $_SESSION['id'])) { //on cache les boutons si l'utilisateur regarde le profil d'une autre personne	?>
			<div class="menuProfil2">
				<a href="modifINFO.php">MODIFIER MES INFORMATIONS PERSONNELLES</a>
				<a href="modifMDP.php">MODIFIER MON MOT DE PASSE</a>
			</div>
			<?php } ?>
		</div>


		<?php include("footer.php"); ?>  	
	</body>

</html>
