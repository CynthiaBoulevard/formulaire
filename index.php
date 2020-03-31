<html>


    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>


    <body>

   

    
    <form method="POST" action="accueil.php">
<center>
<input type="text" name="nom*" size="20" value="nom" maxlength="35">
<input type="text" name="prenom*" size="20" value="prenom" maxlength="35"><br>
<input type="text" name="email*" size="20" value="email" maxlength="70"> 
<input type="text" name="titre*" size="20" value="titre du site" maxlength="70"> 
<input type="text" name="url*" size="20" value="url du site" maxlength="255"><br>
<input type="submit" value="Envoyer" name="envoyer">
</center>



</form>



<?php
  

  // On commence par récupérer les champs
  if(isset($_POST['nom']))      $nom=$_POST['nom'];
  
  
  if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
  

  if(isset($_POST['email']))      $email=$_POST['email'];
    

  if(isset($_POST['titre']))      $titre=$_POST['titre'];

  
  if(isset($_POST['url']))      $url=$_POST['url'];

  
  // On vérifie si les champs sont vides
  if(empty($nom) OR empty($prenom) OR empty($email) OR empty($titre) OR empty($url))
      {
      echo 'veuillez bien remplir tous les champs ';
      }
  
  // Aucun champ n'est vide, on peut enregistrer dans la table
  else     
      {
  
         // connexion à la base
  $db = mysqli_connect("localhost","root","Current-Root-Password","Test")  or die('Erreur de connexion '.mysql_error());
  // sélection de la base  
  
   echo "test";
    
      // on écrit la requête sql
      $sql = "INSERT INTO new_table( nom ,prenom ,email ,titre ,url ) VALUES('$nom','$prenom','$email','$titre','$url')"; 
      // on insère les informations du formulaire dans la table
      mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
  
      // on affiche le résultat pour le visiteur
      echo 'Vos infos on été ajoutées.';

      mysqli_close($db);  // on ferme la connexion
      } 
  ?>
  


    </body>
</html>