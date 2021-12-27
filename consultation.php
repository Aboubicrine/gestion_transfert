<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>Consultez votre compte </title>

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

    <h1 class="h1_title">Consultez </h1>
    <hr> <br>

<?php 
if (isset($_POST['submit'])) {
   
  $clients=htmlspecialchars($_POST['clients']);
  $clients=htmlspecialchars($_POST['clients']);
  $procedure_compte=htmlspecialchars($_POST['procedure_compte']);
  $date=htmlspecialchars($_POST['date']);
  
  
  
  $ins_clients=$connect->prepare("INSERT INTO `etat_compte` (`id_clients`, `id_clients`, `clients_client`, ) VALUES (:clients, :clients, :procedure_compte, :date)");
  $ins_clients->bindParam(':clients' ,$clients , PDO::PARAM_STR);
  $ins_clients->bindParam(':client' ,$client, PDO::PARAM_STR);
  $ins_clients->bindParam(':procedure_compte' ,$procedure_compte, PDO::PARAM_STR);
  $ins_clients->bindParam(':date' ,$date, PDO::PARAM_STR);
  $ins_clients->execute();
  
 

  if (isset($ins_clients)) {
    echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'><p>Ajout avec sucees</p></div><br><br>"; 
  }

  else {
   echo "<div class='alert alert-danger center' style='width: 90%; margin: auto;'><p>Error d'ajout</p></div><br><br>";     
  }

echo "<meta http-equiv='refresh' content='5; url = consultation.php' />";

 } 

?>

    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

      <form id="formID" action="" method="post">
          
              <label class="">Nom du clients: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="clients" class="form-control validate[required]">
                  <option selected="selected" value="">Selectionnée</option>
<?php 
  $stmt_find_clients = $connect->query("SELECT * FROM `clients`");

  while ($find_clients_row = $stmt_find_clients->fetch()) {
	  $fetch_clients_code =$find_clients_row['id_clients'];
      $fetch_clients_name = $find_clients_row ['nom_clients'];
	  $fetch_clients_prenom= $find_clients_row ['prenom_clients'];

      echo '<option value="'.$fetch_client_code.'">'.$fetch_clients_name.' '.$fetch_clients_prenom.'</option>';

  } 

?>
                  </select>
              </div><br>
<label class="">Prenom du clients: <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="clients" class="form-control validate[required]">
                  <option selected="selected" value="">Selectionnée</option>
<?php 
  $stmt_find_clients = $connect->query("SELECT * FROM `clients`");

  while ($find_clients_row = $stmt_find_clients->fetch()) {
	  $fetch_clients_code =$find_clients_row['id_clients'];
      $fetch_clients_name = $find_clients_row ['nom_clients'];
	  $fetch_clients_prenom=$find_clients_row['prenom_clients'];

      echo '<option value="'.$fetch_clients_code.'">'.$fetch_clients_name.' '.$fetch_clients_prenom.'</option>';

  }
?>
                  </select>
              </div><br>
               <label class="">Operation : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label><br>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                  <textarea  class="form-control" name="procedure_compte">
                  </textarea>
              </div><br>
               
              <label class="">Date de validite : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">(*)</span></label><br>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="date" type="date" placeholder="" class="form-control validate[required]" />
              </div>
              <br>
              <br> 
              <button type="submit" name="submit" class="mybtn mybtn-success">Ajouter</button>     

          <hr id='success'>

      </form>
  
  </div>

<div class="clear"></div>
<?php 
if (isset($_GET['cat_delete']) ) {

$cat_id = $_GET['cat_delete'];

  $stmt_delete = $connect->prepare("DELETE FROM `categorie` WHERE `categorie`.`id_cat`=:id");
  $stmt_delete->bindParam (':id' , $cat_id , PDO::PARAM_STR );
  $stmt_delete->execute();

  if (isset($stmt_delete)) {
    echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'><p>vous avez supprimé avec succés</p></div><br><br>"; 
    echo '<script type="text/javascript"> window.location.href += "#success"; </script>';
    echo "<meta http-equiv='refresh' content='5; url = categorie.php' />";
  }
  
}


 ?>

    <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Transaction</th>
            <th>depot</th>
            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find_class = $connect->prepare("SELECT * FROM `categorie`");
  $stmt_find_class->execute();

  while ($find_class_row = $stmt_find_class->fetch()) {
      $fetch_class_numeric = $find_class_row ['id_cat'];
      $fetch_class_name = $find_class_row ['description'];
     



?>
            <tr>
              <td><?php echo $fetch_class_numeric;  ?></td>
              <td><?php echo $fetch_class_name;  ?></td>
              <td><a href="?cat_delete=<?PHP echo $fetch_class_numeric; ?>"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-pencil large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>

      <br>
        

</div>  
        
                           
           




  </body>
</html>
