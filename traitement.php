<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>transfert</title>

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



<div class="clear"></div>
<?php 
if (isset($_GET['cat_delete']) ) {

$cat_id = $_GET['cat_delete'];

 $stmt_delete = $connect->prepare("DELETE FROM clients WHERE clients.id_clients=:id_clients");
  $stmt_delete->bindParam (':id_clients' , $id_clients , PDO::PARAM_STR );
  $stmt_delete->execute();

  if (isset($stmt_delete)) {
    echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'><p>vous avez supprimé avec succés</p></div><br><br>"; 
    echo '<script type="text/javascript"> window.location.href += "#success"; </script>';
    echo "<meta http-equiv='refresh' content='5; url = clients.php' />";
  }
  
}


 ?>
<?php

   echo"il fait  "; 
$date = gmdate("H\hi"); 
echo $date; // aller je le laisse pour le plaisir de tjs savoir l'heure
 echo"la liste des candidats selectionné sont:";
?>
    <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Numero</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Email</th>
            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find_class = $connect->prepare("SELECT * FROM clients");
  $stmt_find_class->execute();

  while ($find_class_row = $stmt_find_class->fetch()) {
      $fetch_class_numeric = $find_class_row ['id_clients'];
      $fetch_class_name = $find_class_row ['nom_clients'];
      $fetch_class_pname = $find_class_row ['prenom_clients'];
      $fetch_class_sname = $find_class_row ['sexe_clients'];
     $fetch_class_adrname = $find_class_row ['adr_clients'];



?>
            <tr>
              <td><?php echo $fetch_class_numeric;  ?></td>
              <td><?php echo $fetch_class_name;  ?></td>
              <td><?php echo $fetch_class_pname;  ?></td>
              <td><?php echo $fetch_class_sname;  ?></td>
              <td><?php echo $fetch_class_adrname;  ?></td>
              <td><a href="?cat_delete=<?PHP echo $fetch_class_numeric; ?>"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-pencil large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>        
                           
           </div>




  </body>
</html>
