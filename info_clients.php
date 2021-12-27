<!DOCTYPE html>
<html>
  <head>
   
    <title>information du clients</title> 
        
  </head>
<body>

<?php 
mysql_connect("localhost","root","")or die("Erreur");
mysql_select_db("gestion_transfert")or die("la base est introuvable");
if ($_POST){
   $_nom = $_POST['nom'];
   $_prenom = $_POST['prenom'];
   if(!empty($nom) AND !empty($prenom)){
    mysql_query('INSERT INTO 'Ajouter' (Nom, Prenom) VALUES ("'.$nom.'","'.$prenom.'")') or die('Erreur:'.mysql_error());
      echo"ok!";
   }else echo"erreur de remplissage";
}
 ?> 

    <h1 class="h1_title">Ajouter les Infos du clients</h1>
    <hr> <br>
      <form  action="" method="post">
              <label class="">Nom :</label><input name="nom" type="text"/><br>
               <label class="">Prenom :</label><input name="prenom" type="text"/><br>
                <button type="submit" name="submit">Ajouter</button>     
      </form>
  </body>
</html>
