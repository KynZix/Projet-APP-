<?php session_start(); ?>
<head>
	<link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
	<nav class="group">
		<a href="index.php">
			<img src="Media/logoapp.png" id="logo">
		</a>
		<div>
			
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
		 				<a href="about.php">À propos de nous</a>
		 				<a href="terms.php">Mentions légales</a>
		  			</div>
		  		</li>
				<li class="dropdown" id="menu2">
		  			<button class="menubtn" id="leftbutton">Support</button>
		  			<div class="dropdown-content" id="menu-content2">
		 				<a href="privacy.php">Règlement</a>
		 				<a href="FAQ.php">FAQ</a>
		 				<a href="contactus.php">Nous Contactez</a>
		  			</div>
		  		</li>
		  		

				<li class="dropdown" id="menu3">
		  			<button class="menubtnlog" id="rightbutton">
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
		  		<form class="menuinput" action="FAQ.php">
		  			<input type="search" name="searchtext" placeholder="Recherche..." id ="search-bar">	
					<button type="submit" id="search-button"><i class="fa fa-search"></i></button>
		  		</form>
			</div>

			
		</ul>
	</nav>
</header>
