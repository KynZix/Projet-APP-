<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Psitech</title>
		<link rel="stylesheet" href="CSS/backOffice.css">
	</head>

	<body>
		<?php include("header.php");?>
		<?php if ( !isset($_SESSION['typeUtilisateur']) || $_SESSION['typeUtilisateur'] != 0 ) { //on ne peut entrer sur le BO que si on en a lautoristion
			header("Location: index.php"); 
		} ?>

		<?php if (isset($_POST['action'])) {//action demandée

			$action = $_POST['action'];

			if ($action == "annuler" && isset($_COOKIE['action']) && isset($_COOKIE["arrayChangementsSerialise"])  && $_COOKIE['action'] != 'annuler'){ //on veut annuler

				$AnciennesValeurs = unserialize($_COOKIE["arrayChangementsSerialise"]);
				$actionPrecedente = $_COOKIE["action"];

					
				if ($actionPrecedente == 'delete') {
					$req = $bdd->prepare('INSERT INTO compte (id, mail, mdp, birthday, phone, nom, prenom, genre, pays, ville, ZIP, adresse, adresse2, typeUtilisateur) VALUES(:id, :mail, :mdp, :birthday, :phone, :nom, :prenom, :genre, :pays, :ville, :ZIP, :adresse, :adresse2, :typeUtilisateur)');
						
				}
				else {
					$req = $bdd->prepare('UPDATE compte SET 
						id = :id,
						mail = :mail,
						mdp = :mdp,
						birthday = :birthday,
						phone = :phone,
						nom = :nom,
						prenom = :prenom,
						genre = :genre,
						pays = :pays,
						ville = :ville,
						ZIP = :ZIP,
						adresse = :adresse,
						adresse2 = :adresse2,
						typeUtilisateur = :typeUtilisateur
						WHERE id = :id');
				}
				foreach ($AnciennesValeurs as $key => $value) {
					if (!is_null($value['mail'])) {
						$req -> execute(array(
							'id' => $value['id'],
							'mail' => $value['mail'],
							'mdp' => $value['mdp'],
							'birthday' => $value['birthday'],
							'phone' => $value['phone'],
							'nom' => $value['nom'],
							'prenom' => $value['prenom'],
							'genre' => $value['genre'],
							'pays' => $value['pays'],
							'ville' => $value['ville'],
							'ZIP' => $value['ZIP'],
							'adresse' => $value['adresse'],
							'adresse2' => $value['adresse2'],
							'typeUtilisateur' => $value['typeUtilisateur']
						));
					}
				}

			echo "action faite: ".$action." ".$actionPrecedente;
			setcookie("action", $action, time() + 7*24*60*60);

			}
			else if ($action == "delete" || $action == "utilisateur" || $action == "gestionnaire" || $action == "admin") {//si autre action que annuler tests pour eviter erreurs

				if($action == "delete"){//on prepare la commande pour supprimer les comptes

					$req = $bdd->prepare('DELETE FROM compte WHERE id = :id');
				}
				else if ($action == "utilisateur") {//commande pour rendre utilisateur

					$req = $bdd->prepare('UPDATE compte SET typeUtilisateur = 2 WHERE id = :id');
				}
				else if ($action == "gestionnaire") {//gestionnaire

					$req = $bdd->prepare('UPDATE compte SET typeUtilisateur = 1 WHERE id = :id');
				}
				else if ($action == "admin") {//admin

					$req = $bdd->prepare('UPDATE compte SET typeUtilisateur = 0 WHERE id = :id');
				}
				
				$arrayChangements = array();

				$req2 =$bdd -> prepare('SELECT * FROM compte WHERE id = :id');

				foreach ($_POST as $idKey => $value) {

					$req2 -> execute(array('id' => $idKey));
					$arrayChangement = $req2 -> fetch();
					$arrayChangements[] = $arrayChangement;

					$req -> execute(array('id' => $idKey));
				}

			$arrayChangementsSerialise = serialize($arrayChangements);

			echo "action faite: ".$action;
			setcookie("action", $action, time() + 7*24*60*60);
			setcookie("arrayChangementsSerialise", $arrayChangementsSerialise, time() + 7*24*60*60);

			} 
		}?>

		<?php $users = $bdd->query('SELECT * FROM compte ORDER BY id DESC LIMIT 0,20') ?>


		<form method="post" action="backOfficeComptes.php">

			<?php while ( $user = $users->fetch() ) { ?>

				<div>
					<?php if ($_SESSION['id'] != $user['id']) { ?>
						<input type="checkbox" <?= 'name='.$user['id'];?> > <label> <?=$user['nom']?> <?=$user['prenom']?> <?=$user['typeUtilisateur']?> </label>
					<?php } ?>
					
				</div>

			<?php } ?>


			<br/>
	       	<select name="action">
	           	<option value="utilisateur">Rendre utilisateur</option>
	           	<option value="gestionnaire">Rendre gestionnaire</option>
	           	<option value="admin">Rendre admin</option>
	           	<option value="annuler">Annuler</option>
	           	<option value="delete">Supprimer</option>
	       	</select>

			<input type="submit" value="envoyer" />
		</form>

		<a href="register.php?>"> enregister nouveau compte </a> </li>

        <?php include("footer.php"); ?>
	</body>

</html>