

<head>
	<link rel="stylesheet" href="CSS\footer.css">
</head>


<footer class="group">
        <div class="footer">

          <div class="footer_menu">

            <div class="Company">
              <h1>Psitech</h1>
              <div class="Company_menu">
                <a href="about.php"><p>A propos de nous</p></a>
                <a href="components.php"><p>jsp koi mettre</p></a>

                <p>
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
                
              </div>
            </div>

            <div class="Support">
              <h1>Support</h1>
              <div class="Support_menu">
                <a href="instructions.php"><p>Instructions</p></a>
                <a href="FAQ.php"><p>FAQ</p></a>
                <a href="contactus.php"><p>Nous contacter @:</p></a>
              </div>
            </div>

            <div class="Other_stuff">
              <h1>Other stuff</h1>
              <div class="Other_stuff_menu">
                <a href="terms.php"><p>Conditions générales & mentions légales</p></a>
                <a href="privacy"><p>Politique de confidentialité</p></a>
                <a href="language.php"><p>Changer de langue</p></a>
              </div>
            </div>

          </div>

          <div class="footer_follow">
            <h1>Follow us!</h1>
            <div class="follow_icons">
              <a href="#"><img src="Media\facebook.png" id="Follow"></a>
              <a href="#"><img src="Media\instagram.png" id="Follow"></a>
              <a href="#"><img src="Media\linkedin.png" id="Follow"></a>
              <a href="#"><img src="Media\twitter.png" id="Follow"></a>
            </div>
          </div>

        </div>
        <div class="footer_logo">
        <p class="copyright">&copy; Psitech</p>
          <img src="Media/logoapp.png" id="footer_logo">
        </div>
        
</footer>