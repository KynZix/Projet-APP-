<?php session_start(); ?>
<head>
	<link rel="stylesheet" href="CSS/header.css">
</head>

<header>
	<nav class="group">
		<a href="index.php">
			<img src="Media/logoapp.png" id="logo">
		</a>

		<p id="user">
          <strong> 
            <?php
            if (isset($_SESSION['mail']) and isset($_SESSION['motDePasse']) and isset($_SESSION['typeUtilisateur'])) {
              echo 'YOU :'.$_SESSION['mail'].'---'.$_SESSION['motDePasse'].'---'.$_SESSION['typeUtilisateur'];
            }
            else {
              echo "YOU : GUEST";
            }
            ?>
          </strong>
        </p>

		<ul class="menuoptions"> 
			<div class="menu1">	   
				<li class="dropdown" id="menu1">
					<button class="menubtn" id="leftbutton">À propos</button>
		  			<div class="dropdown-content" id="menu-content1">
						<a href="index.php">Accueil</a>
		 				<a href="#">Adresse</a>
		 				<a href="terms.php">Mentions légales</a>
		  			</div>
		  		</li>
				<li class="dropdown" id="menu2">
		  			<button class="menubtn" id="leftbutton">Support</button>
		  			<div class="dropdown-content" id="menu-content2">
		 				<a href="#">Guide d'utilisation</a>
		 				<a href="FAQ.php">FAQ</a>
		 				<a href="contactus.php">Nous Contactez</a>
		  			</div>
		  		</li>
		  		

				<li class="dropdown" id="menu3">
		  			<button class="menubtn" id="rightbutton">
		  				<?php 
				  		//on affiche les variables de session deja existants
						if (isset($_SESSION['mail'])) {
							echo "<a href=\"logout.php\">Logout</a>";
						}
						else{
							echo "<a href=\"login.php\">Login</a>";
						}
						?>
		  				
		  			</button> 	
		  		</li>

		  		
  				<?php 
		  		//on affiche les variables de session deja existants
				if (isset($_SESSION['mail'])) {
					if ($_SESSION['typeUtilisateur']<=1) {
						echo 	"<li class=\"dropdown\" id=\"menu3\">
  									<button class=\"menubtn\" id=\"rightbutton\">
  										<a href=\"register.php\">register</a>
									</button> 	
					  			</li>";
					}
					
				}
				?>
		  		

			</div>
			<div class="menu2">
		  		<form class="menuinput"  id="leftbutton" action="search.php">
		  			<input type="search" name="search-website" placeholder="Recherche..." id ="search-bar">	
					<button type="submit"><i class="search-button"></i></button>
		  		</form>
			</div>

			
		</ul>
	</nav>
</header>
