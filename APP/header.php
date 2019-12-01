
<head>
	<link rel="stylesheet" href="CSS/header.css">
</head>

<header>
	<a href="index.php">
		<img src="Media/logoapp.png" id="logo">
	</a>
	<nav class="group">
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
		 				<a href="about.php">À propos</a>
		 				<a href="FAQ.php">FAQ</a>
		 				<a href="#">Nous Contactez</a>
		  			</div>
		  		</li>
		  		<li class="dropdown">
		  			<form class="menuinput"  id="leftbutton">
		  				<input type="search" name="search-website" value="Recherche..." id ="search-bar" style="background-image: url("Media/searchicon.png");">	
		  			</form>
		  		</li>	
			</div>
			<div class="menu2">	  	  		
				<li class="dropdown">
		  			<button class="menubtn" id="rightbutton">Forum</button>
		  		</li>
	
		  		<li class="dropdown">
		  			<button class="menubtn" id="rightbutton">
		  				<a href="login.php">Login</a>
		  			</button>
		  		</li>
		  		<li class="dropdown" id="menu3">
					<button class="menubtn"id="rightbutton">Langue</button>
			      <div class="dropdown-content" id="menu-content3">
						<a href="#">Francais</a>
						<a href="#">Anglais</a>
					</div>
				</li>
			</div>
		</ul>
	</nav>
</header>