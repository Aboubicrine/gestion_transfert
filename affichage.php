<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>Affichage</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   

    
     <link rel="stylesheet" href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/Normalize.css" rel="stylesheet">
     <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">


   

      <script src="js/jquery-1.11.3.min.js"></script>

    

     
        
  </head>
<body>


<?php 
require 'connect.php';
include 'nav.php'; ?> 




<div class="container mainbg">
<br><a class="return" href="index.php"><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>

    <h1 class="h1_title">Affichage des informations</h1>
    <hr> <br>
    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">
<?PHP if (isset($_GET['id_malade']) ){ ?>
      <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="operation_clients" type="text" placeholder="rechercher un clients" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>adresse</th>
            <th>Tel</th>
            <th>nin</th>
           <!-- <th colspan="2">Operation</th>-->
          </tr>
<?php 
  $code=$_GET['id_clients'];
  $stmt_find = $connect->prepare("SELECT * FROM `gestion_transfert`.`clients` WHERE `id_clients` = $code");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom=$find_row['nom_clients'];
      $fetch_prenom = $find_row ['prenom_clients'];
      $fetch_sexe = $find_row ['sexe_clients'];
	  $fetch_adresse= $find_row['adr_clients'];
	  $fetch_tel_clients=$find_row['tel_clients'];
	  $fetch_nin_clients=$find_row['nin_clients'];
	 
     



?>
            <tr>
              <td><?php echo $fetch_nom;  ?></td>
              <td><?php echo $fetch_prenom;  ?></td>
              <td><?php echo $fetch_sexe; ?></td>
              <td><?php echo $fetch_adresse; ?></td>
              <td><?php echo $fetch_tel; ?></td>
              <td><?PHP echo $fetch_nin; ?></td>
              
             <?PHP echo $fetch_class_numeric; ?>
            
<?php }
 ?>
                 
        </tr>        
      </table> 
<?PHP
}else if(isset($_GET['id_clients']))
{
?>
    <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="operation_clients" type="text" placeholder="Rechercher un client" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>TELEPHONE</th>
            <th>NIN</th>
        
           
          </tr>
<?php 
 $code=$_GET['id_clients'];
  $stmt_find = $connect->prepare("SELECT * FROM `gestion_transfert`.`clients` WHERE `id_clients` = $code");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom_clients=$find_row['nom_clients'];
      $fetch_prenom_clients = $find_row ['prenom_clients'];
      $fetch_sexe_clients = $find_row ['sexe_clients'];
	  $fetch_adr_clients= $find_row['adr_clients'];
	  $fetch_tel_clients=$find_row['tel_clients'];
	  $fetch_nin_clients=$find_row['nin_clients'];
	  
?>
            <tr>
              <td><?php echo $fetch_nom_clients;  ?></td>
              <td><?php echo $fetch_prenom_clients;  ?></td>
              <td><?php echo $fetch_adr_clients; ?></td>
              <td><?php echo $fetch_tel_clients; ?></td>
              <td><?PHP echo $fetch_nin_clients; ?></td>
             </tr>    
             <?PHP echo $fetch_class_numeric; ?>
            
<?php } ?>
                 
         
      </table>           
  <?PHP } ?>
  </div>


<br>
          
        
                           
           




  </body>
</html>
