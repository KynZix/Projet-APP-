
<head>
	<link rel="stylesheet" href="CSS/header.css">
</head>

<header>
	<nav class="group">
		<a href="index.php">
			<img src="Media/logoapp.png" id="logo">
		</a>
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
		 				<a href="contactus.php#">Nous Contactez</a>
		  			</div>
		  		</li>
				<li class="dropdown" id="menu3">
		  			<button class="menubtn" id="rightbutton">
		  				<a href="login.php">Login</a>
		  			</button>
		  		</li>
		  		<li class="dropdown" id="menu4">
					<button class="menubtn"id="rightbutton">Langue</button>
			      <div class="dropdown-content" id="menu-content4">
						<a href="#">Francais</a>
						<a href="#">Anglais</a>
					</div>
				</li>
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
