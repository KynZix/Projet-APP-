<!DOCTYPE html>
<html lang="fr">
<head>
	<title> Bienvenue</title>
	<link rel="stylesheet" href="CSS/main.css">
</head>
<body>
	<?php include("header.php"); ?>
	<section>

		<?php if ( !( isset($_SESSION['typeUtilisateur']) && ($_SESSION['typeUtilisateur'] = 1 ||  $_SESSION['typeUtilisateur'] = 0) ) ) { //on ne peut entrer sur le BO que si on en a lautoristion
			header("Location: index.php");
		} ?>

		<h1> Cr&eacute;ation du compte </h1>
		<p> Voici les informations saisies : </p>
		<p>
			<link rel = "stylesheet" href="CSS/saisie.css">

			<?php
				//on essaie e se connecter a la bdd, s'il y a une erreur on affiche juste une erreur au lieu d'afficher le lien vers la bdd par securité
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				catch(Exception $e)
				{
					die('erreur:'.$e -> getMessage());
				}
			?>
			<?php

			//fonction chargé de generer un mot de passe aleatoire temporaire
			function RandomString(int $nbrcaracteres)
		    {//créer une chaine de caractère aléatoir avec minuscules, majuscules, chiffres (parfait pour des mdp aléatoire)
		        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		        $randstring = "";
		        for ($i = 0; $i < $nbrcaracteres; $i++) {
		            $randstring .= $characters[rand(0, strlen($characters)-1)];
		        }
		        return $randstring;
		    }

			//on remplis les infos + eviter injection sql
			$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$genre = htmlspecialchars($_POST['genre']);
			$birthday = htmlspecialchars($_POST['birthday']);
			$mail = htmlspecialchars($_POST['mail']);
			$phone = htmlspecialchars($_POST['phone']);
			$pays = htmlspecialchars($_POST['pays']);
			$ville = htmlspecialchars($_POST['ville']);
			$ZIP = htmlspecialchars($_POST['ZIP']);
			$adresse = htmlspecialchars($_POST['adresse']);
			$mdp = RandomString(10);
			$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

			if(isset($_POST['adresse2']))
			{
				$adresse2 = htmlspecialchars($_POST['adresse2']);
			}
			else
			{
				$adresse2 = 'NR';
			}

			if(isset($_POST['typeUtilisateur']))
			{
				$typeUtilisateur = htmlspecialchars($_POST['typeUtilisateur']);
			}
			else
			{
				$typeUtilisateur = 2;
			}
			

			echo 'mail =', $mail, '='; 
			echo "<br>";
			echo 'birthday =', $birthday, '='; 
			echo "<br>";
			echo 'phone =', $phone, '='; 
			echo "<br>";
			echo 'nom =', $nom, '='; 
			echo "<br>";
			echo 'prenom =', $prenom, '='; 
			echo "<br>";
			echo 'genre =', $genre, '='; 
			echo "<br>";
			echo 'pays =', $pays, '='; 
			echo "<br>";
			echo 'ville =', $ville, '='; 
			echo "<br>";
			echo 'ZIP =', $ZIP, '='; 
			echo "<br>";
			echo 'adresse =', $adresse, '='; 
			echo "<br>";
			echo 'adresse2 =', $adresse2, '='; 
			echo "<br>";
			echo 'typeUtilisateur =', $typeUtilisateur, '='; 
			echo "<br>";
			echo 'MDP =', $mdp, '='; 
			echo "<br>";

			//on cherche le mail dans la base de donné
			$req1 = $bdd->prepare('SELECT mail FROM compte WHERE mail=:mail');
			$req1 -> execute(array('mail' => $mail));
			$mailBDD = $req1->fetch();

			//on test si mail est deja present pour eviter les erreurs
			if (isset($mailBDD['mail'])) {
				echo "<a href = \"register.php\">le mail est deja lié a un autre compte</a>";
				setcookie('nom',$nom,time() + 600);
				setcookie('prenom',$prenom,time() + 600);
				setcookie('mail',$mail,time() + 600);
				setcookie('genre',$genre,time() + 600);
				setcookie('birthday',$birthday,time() + 600);
				setcookie('phone',$phone,time() + 600);
				setcookie('pays',$pays,time() + 600);
				setcookie('ville',$ville,time() + 600);
				setcookie('ZIP',$ZIP,time() + 600);
				setcookie('adresse',$adresse,time() + 600);
				setcookie('typeUtilisateur',$typeUtilisateur,time() + 600);
				if(isset($adresse2))
				{
					setcookie('adresse2',$adresse2,time() + 600);
				}
				header('Location: register.php');
				
			}
			//s'il n'est pas present on ajoute les infos et on redirige a lindex
			else{

				//envoie de mail
	   			ini_set( 'display_errors', 1 );
	    		error_reporting( E_ALL );

				$motPasseProvisoire = $mdp;
	    		$subject = "Votre mot de passe provisoire pour vous connecter sur Psitech";
	 			$message = "Vous venez de vous inscrire sur le site de Psitech. Voici votre mot de passe provisoire : ".$motPasseProvisoire." \n Vous devrez le changer lors de la première connexion. \n L'équipe Psitech";

				if (mail($mail,$subject,$message)) {
					echo "L'email a été envoyé.";

					$req = $bdd->prepare(' INSERT INTO compte(mail, mdp, birthday, phone, nom, prenom, genre, pays, ville, ZIP, adresse, adresse2, typeUtilisateur) VALUES (:mail, :mdp, :birthday, :phone, :nom, :prenom, :genre, :pays, :ville, :ZIP, :adresse, :adresse2, :typeUtilisateur) ');

					$req -> execute(array(
					'mail' => $mail,
					'birthday'=> $birthday,
					'phone'=> $phone,
					'nom'=> $nom,
					'prenom'=> $prenom,
					'genre'=> $genre,
					'pays'=> $pays,
					'ville'=> $ville,
					'ZIP'=> $ZIP,
					'adresse'=> $adresse,
					'adresse2'=> $adresse2,
					'typeUtilisateur'=> $typeUtilisateur,		  
				    'mdp'=> $mdpHash));

					echo "<br>";
					echo 'Votre compte a été créé avec succès!';

					setcookie('nom',$nom,time() - 600);
					setcookie('prenom',$prenom,time() - 600);
					setcookie('mail',$mail,time() - 600);
					setcookie('genre',$genre,time() - 600);
					setcookie('birthday',$birthday,time() - 600);
					setcookie('phone',$phone,time() - 600);
					setcookie('pays',$pays,time() - 600);
					setcookie('ville',$ville,time() - 600);
					setcookie('ZIP',$ZIP,time() - 600);
					setcookie('adresse',$adresse,time() - 600);
					setcookie('typeUtilisateur',$typeUtilisateur,time() - 600);
					if(isset($adresse2))
					{
						setcookie('adresse2',$adresse2,time() - 600);
					}
				}
			} ?>

			</p>
		</section>
	<?php include("footer.php"); ?>
		
</body>