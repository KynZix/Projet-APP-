<!DOCTYPE html>

<html lang="fr">

	<head>
		<title>Psitech</title>
		<link rel="stylesheet" href="CSS/main.css">
	</head>

	<body>  

	   <?php include("header.php"); ?>

	   <div class="group"> <!-- body -->
	  		<section>

            <?php include("diapo.php");?>
      <p><video width=100% height= 600 controls>
      	<source src="Media/videotest.mp4" type="video/mp4">
      	Votre navigateur ne supporte pas ce type de video.
      </video>
  	  </p>
      <p>
      	<div id="conteneur">
      		<div class="element">
      			<img src="Media/think.png" style="width: 200px;height: 500px;"> 
      			<h1>
      				<div>
      				Facile à utiliser
      				</div>
      				<div>
      				À la portée de tous 
      				</div>
      				<div>
      				Personnalisable 
      				</div>
      			</h1>
      		</div>
      		<div class="element"><img src="Media/image1.jpg"></div>
      	</div>
      </p>
      <p><div id="conteneur">
      	<div class="element2"><img src="Media/image1.jpg"></div>
      		<div class="element2">
      			<img src="Media/think.png" style="width: 200px;height: 500px;"> 
      			<h1>
      				<div>
      				Facile à utiliser
      				</div>
      				<div>
      				À la portée de tous 
      				</div>
      				<div>
      				Personnalisable 
      				</div>
      			</h1>
      		</div>
      	</p>
      
      <p>f</p>
	   	</section>
		</div>
		
		<!-- footer -->	
	  	<?php include("footer.php"); ?>

	</body>

</html>