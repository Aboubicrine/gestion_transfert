<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>Operations de clients</title>

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

    <h1 class="h1_title">Operations clients</h1>
    <hr> <br>

<?php 
if (isset($_POST['submit'])) {
   
  $procedure_compte=htmlspecialchars($_POST['procedure_compte']);
  $operation_clients=htmlspecialchars($_POST['operation_clients']);
  $clients_id_clients=htmlspecialchars($_POST['clients_id_clients']);
  $date_transaction=htmlspecialchars($_POST['date_transaction']);
  $frais_service =htmlspecialchars($_POST['frais_service']);
 
  
  
  
  $ins_procedure_compte=$connect->prepare("INSERT INTO `procedure_compte` (`id_clients`, `operation_clients`, `date_transaction`, `frais_service`, `clients_id_clients`) VALUES (NULL, :operation, :clients, :date, :frais, :clients)");
  $ins_procedure_compte->bindParam(':clients' ,$clients , PDO::PARAM_STR);
  $ins_procedure_compte->bindParam(':operation_clients' ,$operation_clients, PDO::PARAM_STR);
  $ins_procedure_compte->bindParam(':date' ,$date, PDO::PARAM_STR);
  $ins_procedure_compte->bindParam(':frais' ,$frais , PDO::PARAM_STR);
  $ins_procedure_compte->bindParam(':clients' ,$clients, PDO::PARAM_STR);
  $ins_procedure_compte->execute();
  
 

  if (isset($ins_procedure_compte)) {
    echo "<div class='alert alert-success center' style='width: 90%; margin: auto;'><p>Ajout avec sucees</p></div><br><br>"; 
  }

  else {
   echo "<div class='alert alert-danger center' style='width: 90%; margin: auto;'><p>Error d'ajout</p></div><br><br>";     
  }

echo "<meta http-equiv='refresh' content='5; url = reference_compte.php' />";

 } 

?>

    <div class="clear"></div>
    <div class="row col-md-10 col-md-offset-1">

<ul class="nav nav-tabs text-capitalize" role="tablist" style="background-color:#999; text-justify:!important; color:#FFF;">
        <li class="nav-item active">
          <a class="nav-link active" data-toggle="tab" href="#home" role="tab">consultez votre Compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Les virements Effectuez</a>
        </li>
         
  
        
</ul>
  <!------------------------------------les tab 1------------------------------------------------------------------------->    
 <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="home" role="tabpanel">
        <h1 class="h1 text-info">CONSULTEZ VOTRE COMPTE</h1>
        <br>
        <br>
        <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="operation_clients" type="text" placeholder="" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>depot</th>
            <th>transfert</th>
            <th>retrait</th>
        
            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `procedure_compte`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
      $fetch_clients = $find_row ['id_clients'];
      $fetch_clients = $find_row ['id_clients'];
	
	  $fetch_frais_service=$find_row['frais_service'];
	  $fetch_date_transaction=$find_row['date_transaction'];
     



?>
            <tr>
              <td><a  href="affichage.php?id_clients=<?PHP echo $fetch_clients; ?>" title="visualiser les infos des clients"><?php echo $fetch_clients;  ?><i class="glyphicon glyphicon-eye-open large"></i></a></td>
              <td><?php echo $fetch_clients;  ?><a href="affichage.php?id_clients=<?PHP echo $fetch_clients; ?>" title="visualiser les infos des clients"><i class="glyphicon glyphicon-eye-open large"></i></a></td>
            
              <td><?php echo $fetch_frais_service;  ?></td>
              <td><?php echo $fetch_date_transaction;  ?></td>
              <td><a href="clients.php" title="supprimer"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="clients.php" title="Modifier"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>
 </div>


 
 <!----------------------------------------tab2---------------------------------------------------------------------------->
        <div class="tab-pane" id="profile" role="tabpanel">
           <br/>
           <br>
           <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="operation_clients" type="text" placeholder="" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Clients</th>
            <th>Nom du clients</th>
            <th>date debut de transaction</th>
            <th>Frais de service</th>
            <th>Etat du compte</th>
            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `traitement`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	 
    $fetch_clients = $find_row ['nom_clients'];
    $fetch_date = $find_row ['date'];
	  $fetch_frais=$find_row['frais'];
	  $fetch_etat =$find_row['etat'];
?>
            <tr>
              <td><a href="affichage.php?id_clients=<?PHP echo $fetch_clients; ?>" title="visualiser les infos des clients"><?PHP echo $fetch_clients; 
              ?><i class="glyphicon glyphicon-eye-open large"></i></a></td>
              <td><?php echo $fetch_clients;  ?></td>
              <td><?php echo $fetch_date; ?></td>
              <td><?php echo $fetch_frais; ?></td>
              <td><?PHP echo $fetch_etat; ?></td>
              <td><a href="reference_compte.php" title="supprimer"> <i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="reference_compte.php" title="modifier"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>
        </div>
        
        <!------------------------------------------tab3---------------------------------------------------------------------->
         <div class="tab-pane" id="clients" role="tabpanel">
           <br/>
           <br>
           <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="clients" type="text" placeholder="" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>clients</th>
            <th>Operations</th>
            <th>date </th>
            <th>Frais </th>
            <th colspan="2">Compte</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `procedure_compte`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_clients=$find_row['clients_id_clients'];
      $fetch_operation_clients = $find_row ['operation_clients'];
	  $fetch_date_transaction= $find_row['date_transaction'];
	  $fetch_frais_service=$find_row['frais_service'];
	 


?>
            <tr>
              <td><a href="affichage.php?id_clients=<?PHP echo $fetch_clients; ?>" title="visualiser les infos des clients"><i class="glyphicon glyphicon-eye-open large"> <?PHP echo $fetch_malade; ?></i></a></td>
              <td><?php echo $fetch_type;  ?></td>
              <td><?php echo $fetch_operation_clients; ?></td>
              <td><?php echo $fetch_date_transaction; ?></td>
              <td><?php echo $fetch_frais_service; ?></td>
            
              <td><a href="#"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>
        </div>
      <!--------------------------------------------tab4---------------------------------------------------------------------->
         <div class="tab-pane" id="clients" role="tabpanel">
           <br/>
           <br>
           <form>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input name="clients" type="text" placeholder="Rechercher un clients" class="form-control validate[required]" />
               </div><br>
        </form>
        
          <table class="table table-striped table-bordered">
          <tr class="tr-table">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Tel</th>
            <th>Sommes</th>
            <th colspan="2">Operation Effectuez</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `clients`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom=$find_row['nom_clients'];
      $fetch_prenom = $find_row ['prenom_clients'];
	  $fetch_adresse= $find_row['adr_clients'];
	  $fetch_tel=$find_row['tel_clients'];
    $fetch_sexe=$find_row['sexe'];
	  $fetch_sommes=$find_row['sommes_clients'];
	  
?>
            <tr>
              <td><?php echo $fetch_nom;  ?></td>
              <td><?php echo $fetch_prenom;  ?></td>
              <td><?php echo $fetch_adresse; ?></td>
              <td><?php echo $fetch_tel; ?></td>
              <td><?php echo $fetch_sexe; ?></td>
              <td><?PHP echo $fetch_sommes; ?></td>
             
              <td><a href="#"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php } ?>
                 
        </tr>        
      </table>
        </div>
 <!--------------------------------------tab4-------------------------------------------------------------->
  <div class="tab-pane" id="clients" role="tabpanel">
           <br/>
           <br>
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
            <th>adresse</th>
            <th>sommes</th>
            <th colspan="2">Operation</th>
          </tr>
<?php 

  $stmt_find = $connect->prepare("SELECT * FROM `clients`");
  $stmt_find->execute();

  while ($find_row = $stmt_find->fetch()) {
	  $fetch_nom=$find_row['nom_clients'];
      $fetch_prenom = $find_row ['prenom_clients'];  
	  $fetch_adresse= $find_row['adr_clients'];
	  $fetch_sommes=$find_row['sommes_clients'];
	  
	 
     



?>
            <tr>
              <td><?php echo $fetch_nom;  ?></td>
              <td><?php echo $fetch_prenom;  ?></td>
              <td><?php echo $fetch_adresse; ?></td>
              <td><?php echo $fetch_sommes_clients; ?></td>
              
              
              <td><a href="#"><i class="glyphicon glyphicon-trash large" style="font-size:26px"></i></a></td>
               <td><a href="#"><i class="glyphicon glyphicon-edit large"></i></a></td> 
            
<?php }
 ?>
                 
        </tr>        
      </table>
        </div>
        
     </div>
   </div>
    
        <!--------------------------------------------------- fin tab---------------------------------------------------------------->
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
 <br>
        

</div>  
        
 <?php include 'footer.php'; ?>                           
 <script src="js/bootstrap.min.js"></script>          
<script src="js/popper.min.js"></script>
<script src="js/jquery-slim.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/util.js"></script>


  </body>
</html>
