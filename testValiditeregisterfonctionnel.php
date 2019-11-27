

<?php
        if(isset($_POST['valider'])){
        	$Nom = $_POST['Nom'];
        	$Prenom = $_POST['Prenom'];
        	$Sexe = $_POST['Sexe'];
        	$Pays = $_POST['Pays'];
        	$Ville = $_POST['Ville'];
        	$Code_postal = $_POST['Code Postal'];
        	$Adresse = $_POST['Adresse'];
        	$Complement_d_adresse = $_POST['Complement d adresse'];
        	echo 'Bonjour '. $Nom . ' ' . $Prenom.'de '. $Pays.'<br/>Bienvenue sur le site de Psytech !';
        	}
        ?>
<?php  


// On commence par récupérer les champs  mis dans le formulaire register
if(isset($_POST['Nom']))      $nom=$_POST['Nom']; 
else      $Nom=""; 


if(isset($_POST['Prenom']))      $Prenom=$_POST['Prenom']; 
else      $Prenom=""; 

if(isset($_POST['Sexe']))      $rue=$_POST['Sexe']; 
else      $Sexe=""; 

if(isset($_POST['Pays']))      $commune=$_POST['Pays']; 
else      $Pays=""; 


if(isset($_POST['Ville']))      $choix=$_POST['Ville']; 
else      $Ville=""; 



if(isset($_POST['Code_postal']))      $num=$_POST['Code_postal']; 
else      $Code_postal=""; 



if(isset($_POST['Adresse']))      $ville=$_POST['Adresse']; 
else      $Adresse=""; 



if(isset($_POST['Complement_d_adresse']))      $code=$_POST['Complement_d_adresse']; 
else      $Complement_d_adresse=""; 






// On vérifie si les champs sont vides car cela ne sert à rien d'envoyer des données vide dans le base de données 
if(empty($Nom)  OR empty($Prenom) OR empty($Sexe)OR empty($Pays)OR empty($Ville) 
OR empty($Code_postal)OR empty($Adresse) OR empty($Complement_d_adresse) 
    {  
    echo '<font color="red">Attention, tous les champs ne sont pas renseignés !</font>';  
    }  



// Aucun champ n'est vide, on peut enregistrer dans la table  
{ 
       // connexion à la base 
$connexion = mysql_connect("localhost.localdomain", "root", "") or die ("message d'erreur : ".mysql_error($connexion));  
//$db = mysql_select_db("XXXX");   
      
    // on écrit la requête sql 
        $sql = "CREATE DATABASE  IF NOT EXISTS infos_tbl(
id INTEGER PRIMARY KEY,
nom VARCHAR(128) NOT NULL,
Prenom VARCHAR(128) NOT NULL,
Sexe TEXT NOT NULL,
Pays VARCHAR(128) NOT NULL DEFAULT ="France",
Ville VARCHAR(128) NOT NULL DEFAULT ="Paris",
Code_postal INTEGER NOT NULL,
Adresse TEXT NOT NULL,
Complement_d_adresse TEXT NOT NULL) ";
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());



    $sql = "INSERT INTO infos_tbl(id, nom, Prenom, Sexe, Pays, Ville, Code_postal, Adresse,Complement_d_adresse)  
VALUES('','$Nom','$Prenom','$Sexe','$Pays','$Ville','$Code_postal','$Adresse','$Complement_d_adresse')";  
      
    // on insère les informations du formulaire dans la table ou on affiche s'il y a une erreur dans les requètes
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());  

     

    mysql_close();  // on ferme la connexion  
     } 

      
      

?>