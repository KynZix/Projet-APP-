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

			if ($action == "annuler" && isset($_COOKIE['action']) && $_COOKIE['action'] != 'annuler'){ //on veut annuler

				$AnciennesValeurs = unserialize($_COOKIE["arrayChangementsSerialise"]);
				$actionPrecedente = $_COOKIE["action"];

					
				if ($actionPrecedente == 'delete') {
					$req = $bdd->prepare('INSERT INTO FAQ (id, question, reponse) VALUES(:id, :question, :reponse)');
						
				}
				else {
					$req = $bdd->prepare('UPDATE compte SET 
						id = :id,
						question = :question,
						reponse = :reponse
						WHERE id = :id');
				}
				foreach ($AnciennesValeurs as $key => $value) {
					if (!is_null($value['reponse'])) {
						$req -> execute(array(
							'id' => $value['id'],
							'question' => $value['question'],
							'reponse' => $value['reponse']
						));
					}
				}
			echo "action faite: ".$action . " " . $actionPrecedente;
			setcookie("action", $action, time() + 7*24*60*60);
			}
			else{
				if($action == "delete"){//on prepare la commande pour supprimer les comptes

					$FAQsuppression = $bdd->prepare('DELETE FROM Faq WHERE id = :id');

					$arrayChangements = array();
					$infosActuelles =$bdd -> prepare('SELECT * FROM FAQ WHERE id = :id');

					foreach ($_POST as $idKey => $value) {//on recupere les infos qui sont stockés avant de les supprimer puis on supprime

						$infosActuelles -> execute(array('id' => $idKey));
						$arrayInfos = $infosActuelles -> fetch();
						$arrayChangements[] = $arrayInfos;

						$FAQsuppression -> execute(array('id' => $idKey));
					}
				}
				if($action == "modifier"){//on prepare la commande pour supprimer les comptes

					$FAQmodification = $bdd->prepare('UPDATE Faq SET question = :question, reponse = :reponse WHERE id = :id');

					$arrayChangements = array();
					$infosActuelles =$bdd -> prepare('SELECT * FROM FAQ WHERE id = :id');

					foreach ($_POST as $idKey => $value) {//on recupere les infos qui sont stockés avant de les modifier

						echo "idkey: ".$idKey."<br/>";
						echo "value: ".$value."<br/>";
					}
				}
				
			$arrayChangementsSerialise = serialize($arrayChangements);

			echo "action faite: ".$action;
			setcookie("action", $action, time() + 7*24*60*60);
			setcookie("arrayChangementsSerialise", $arrayChangementsSerialise, time() + 7*24*60*60);

			} 
		}?>


		<?php $FAQ = $bdd->query('SELECT * FROM faq ORDER BY id DESC LIMIT 0,20') ?>

		<form method="post" action="backOfficeFAQ.php">

			<?php while ( $QR = $FAQ ->fetch() ) { ?>

				<div>
					<input type="checkbox" <?= 'name='.$QR['id'];?> >
					<textarea rows="1" cols="60" <?= 'name=question'.$QR['id'];?> > <?= $QR['question']; ?> </textarea> 
					<textarea rows="1" cols="60" <?= 'name=reponse'.$QR['id'];?> > <?= $QR['reponse']; ?> </textarea> 
				</div>

			<?php } ?>


			<br/>
	       	<select name="action">
	           	<option value="delete">Supprimer</option>
	           	<option value="modifier">Modifier</option>
	           	<option value="annuler">Annuler</option>
	       	</select>

			<input type="submit" value="envoyer" />
		</form>

        <?php include("footer.php"); ?>
	</body>

</html>

