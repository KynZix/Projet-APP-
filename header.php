
<head>
	<link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			</div>
			<div class="menu2">	  	  	
		  		<form class="search-bar"  id="leftbutton" action="FAQ.php">
		  			<input type="search" name="search-text" placeholder="Recherche..." id ="search-bar">	
					<button type="submit" id="search-button"><i class="fa fa-search"></i></button>
		  		</form>
			</div>
		</ul>
	</nav>
</header>
