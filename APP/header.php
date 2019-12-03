<?php session_start(); ?>
<head>
	<link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
	<nav class="group">
		<div class="preheader">
			<div>
				<a href="index.php">
					<img src="Media/logoapp.png" id="logo">
				</a>
			</div>
			<div>
				<p id="user">
		          <strong> 
		            <?php
		            if (isset($_SESSION['mail']) and isset($_SESSION['mdp']) and isset($_SESSION['typeUtilisateur'])) {
		              echo 'YOU :'.$_SESSION['mail'].'---'.$_SESSION['mdp'].'---'.$_SESSION['typeUtilisateur'];
		            }
		            else {
		              echo "YOU : GUEST";
		            }
		            ?>
		          </strong>
		        </p>
			</div>	
				
		</div>

		
		<div>
			
		

		<ul class="menuoptions"> 
			<div class="menu1">	   
				<li class="dropdown" id="menu1">
					<button class="menubtn" id="leftbutton">À propos</button>
		  			<div class="dropdown-content" id="menu-content1">
						<a href="index.php">Accueil</a>
		 				<a href="about.php">À propos de nous</a>
		 				<a href="terms.php">Mentions légales</a>
		  			</div>
		  		</li>
				<li class="dropdown" id="menu2">
		  			<button class="menubtn" id="leftbutton">Support</button>
		  			<div class="dropdown-content" id="menu-content2">
		 				<a href="privacy.php">Règlement</a>
		 				<a href="FAQ.php">FAQ</a>
		 				<a href="contactus.php">Nous Contacter</a>
		  			</div>
		  		</li>
		  		

				<li class="dropdown" id="menu3">
		  				<?php 
				  		//on affiche les variables de session deja existants
						if (isset($_SESSION['mail'])) { ?>
								<button class="menubtn" id="leftbutton">Mon Compte</button>
								<div class="dropdown-content" id="menu-content3">
		 							<a href="profil.php">Profil</a>
									<a href="logout.php">Se déconnecter</a>
		  						</div>
						<?php 
						}
						else{ ?>
  							<button class="menubtnsingle" id="rightbutton">
  								<a href="login.php">Login</a>
							</button> 	
						<?php 
						}
						?>
		  				
		  			</button> 	
		  		</li>

		  		
  				<?php 
		  		//on affiche les variables de session deja existants
				if (isset($_SESSION['mail'])) {
					if ($_SESSION['typeUtilisateur']<=1) { ?>
						<li class="dropdown" id="menu3">
  									<button class="menubtnsingle" id="rightbutton">
  										<a href="register.php">Créer un compte</a>
									</button> 	
					  	</li>
				<?php 	}
					
				}
				?>
		  		

			</div>
			<div class="menu2">
		  		<form class="menuinput" action="FAQ.php">
		  			<input type="search" name="searchtext" placeholder="Recherche..." id ="search-bar">	
					<button type="submit" id="search-button"><i class="fa fa-search"></i></button>
		  		</form>
			</div>

			
		</ul>
	</nav>
</header>
