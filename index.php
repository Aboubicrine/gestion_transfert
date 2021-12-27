<?PHP 
require 'connect.php'; 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" />

    <title>site de transfert d'argent</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   

    
     <link rel="stylesheet" href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/Normalize.css" rel="stylesheet">
     <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   

      <script src="js/jquery-1.11.3.min.js"></script>

        
  </head>
<body>

<?php include 'nav.php'; ?> 


<div class="container main" style="margin-top: 100px;">



<div class="row">

<?php 

  $stmt_count_produit = $connect->prepare("SELECT * FROM `clients`");
  $stmt_count_produit->execute();
  $count_produit= $stmt_count_produit->rowCount();

  



   ?>
<div class="col-md-12" id="status">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
          <i class="fa fa-warehouse"><marquee><img src="image/uasz.jpg" width="150%"> <img src="image/uasz.jpg" alt="image" width="143%"></marquee></i>
            <div class="count"><?php echo $count_produit; ?></div>
            <div class="title">Nombre de depot Effectuez </div>  
          </div>   
        </div>
       
</div>
 <div class="clear"></div><br>


    <div class="col-md-4">
      <img src="image/uasz2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Enseignant Chercheur</h4>
      <p class="card-text">
        L'Université Assane SECK de Ziguinchor recrute pour le compte de l'UFR des Sciences Economiques et Sociales, un enseignant- chercheur.<br>
        Profil recherché:<br>
        Etre titulaire d'un doctorat en Sciences de Gestion
        Avoir une expérience dans le domaine du tourisme et de l'hôtellerie de préférence
        Disposer de solides aptitudes pédagogiques et une capacité à enseigner à tous les niveaux d'études   Etre en mesure d'encadrer des travaux de recherche

        .</p>
    </div>
      <a href="clients!.php">
          <div class="link">
            <i class="fa fa-gg-circle"></i>
            <div class="clear"></div><span>En Savoir plus </span>
         </div>
      </a>
    </div>
    


     <div class="col-md-4">
      <img src="image/uasz2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Gestionnaire de projet</h4>
      <p class="card-text">
      Chef de division de la Comptabilité et du suivi budgétaire.
      Rectorat de l’Université Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activités de la division ; engager, liquider, mandater les dépenses des fournisseurs, ordonnancer les autres dépenses du Rectorat et soumettre à la signature du DFC, du SG et du Recteur ; Transmettre les mandats à l’Agence comptable pour règlement ; Participer à l’élaboration du budget jusqu’à son adoption par le C.A. 
        .</p>
    </div>
       <a href="clients!.php">
          <div class="link">
            <i class="fa fa-gg-circle"></i>
            <div class="clear"></div><span>En Savoir plus </span>
         </div>
      </a>
    </div>


    
   <div class="col-md-4">
      <img src="image/uasz2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Gestionnaire de projet</h4>
      <p class="card-text">
      Chef de division de la Comptabilité et du suivi budgétaire.
      Rectorat de l’Université Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activités de la division ; engager, liquider, mandater les dépenses des fournisseurs, ordonnancer les autres dépenses du Rectorat et soumettre à la signature du DFC, du SG et du Recteur ; Transmettre les mandats à l’Agence comptable pour règlement ; Participer à l’élaboration du budget jusqu’à son adoption par le C.A. 
        .</p>
    </div>
       <a href="clients!.php">
          <div class="link">
            <i class="fa fa-gg-circle"></i>
            <div class="clear"></div><span>En Savoir plus </span>
         </div>
      </a>
    </div>



    <div class="col-md-4">
      <img src="image/uasz2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Gestionnaire de projet</h4>
      <p class="card-text">
      Chef de division de la Comptabilité et du suivi budgétaire.
      Rectorat de l’Université Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activités de la division ; engager, liquider, mandater les dépenses des fournisseurs, ordonnancer les autres dépenses du Rectorat et soumettre à la signature du DFC, du SG et du Recteur ; Transmettre les mandats à l’Agence comptable pour règlement ; Participer à l’élaboration du budget jusqu’à son adoption par le C.A. 
        .</p>
    </div>
       <a href="clients!.php">
          <div class="link">
            <i class="fa fa-gg-circle"></i>
            <div class="clear"></div><span>En Savoir plus </span>
         </div>
      </a>
    </div>
    


     <div class="col-md-4">
      <img src="image/uasz2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Gestionnaire de projet</h4>
      <p class="card-text">
      Chef de division de la Comptabilité et du suivi budgétaire.
      Rectorat de l’Université Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activités de la division ; engager, liquider, mandater les dépenses des fournisseurs, ordonnancer les autres dépenses du Rectorat et soumettre à la signature du DFC, du SG et du Recteur ; Transmettre les mandats à l’Agence comptable pour règlement ; Participer à l’élaboration du budget jusqu’à son adoption par le C.A. 
        .</p>
    </div>
       <a href="clients!.php">
          <div class="link">
            <i class="fa fa-gg-circle"></i>
            <div class="clear"></div><span>En Savoir plus </span>
         </div>
      </a>
    </div>

    
     <div class="col-md-4">
      <img src="image/uasz2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Gestionnaire de projet</h4>
      <p class="card-text">
      Chef de division de la Comptabilité et du suivi budgétaire.
      Rectorat de l’Université Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activités de la division ; engager, liquider, mandater les dépenses des fournisseurs, ordonnancer les autres dépenses du Rectorat et soumettre à la signature du DFC, du SG et du Recteur ; Transmettre les mandats à l’Agence comptable pour règlement ; Participer à l’élaboration du budget jusqu’à son adoption par le C.A. 
        .</p>
    </div>
       <a href="clients!.php">
          <div class="link">
            <i class="fa fa-gg-circle"></i>
            <div class="clear"></div><span>En Savoir plus </span>
         </div>
      </a>
    </div>
       
</div>
</div>		

<hr>

<div class="card-group">
  <div class="card">
    <img src="image/uasz.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Historique UASZ</h4>
      <p class="card-text">
      Dans le but d'élargir sa carte universitaire et de désengorger les universités publiques existantes (notamment l'université Cheikh-Anta-Diop de Dakar), les autorités sénégalaises ont décidé, depuis le début des années 2000, d'ouvrir de nouveaux établissements d'enseignement supérieur.
      Initialement prévu pour être un Centre universitaire régional (CUR), le projet d'implantation d'un établissement à Ziguinchor s'est transformé en la création d'une université complète à la suite d'une décision du président Abdoulaye Wade.
      C'est ainsi que l'université de Ziguinchor a été pédagogiquement ouverte au cours du mois de février 2007. En 2013, l'établissement a été renommé en hommage à Assane Seck, un universitaire et homme politique sénégalais.
        .</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">l'excelence ma reférence </small>
    </div>
    
  </div>

  <div class="card">
    <img src="image/uasz.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Organisation</h4>
      <p class="card-text">
      L'UASZ est composée de quatre unités de formation et de recherche, de deux écoles doctorales et de plusieurs laboratoires de recherche :<br>
UFR des sciences économiques et sociales<br>
UFR des sciences et technologies<br>
UFR des lettres, arts et sciences humaines<br>
UFR des sciences de la santé <br>
École doctorale Sciences, Technologies et Ingénierie<br>
École doctorale Espaces, Sociétés et Humanités<br>
Laboratoire de géographie et environnement<br>
Laboratoire de chimie et physique des matériaux<br>
Laboratoire de mathématiques et applications<br>
Laboratoire d'océanographie, des sciences de l'environnement et du climat<br>
Laboratoire d'agroforesterie et d'écologie<br>
Laboratoire de géographie et d'environnement<br>
        </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">l'excelence ma référence</small>
    </div>
  </div>
  <div class="card">
    <img src="image/uasz.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Objectifs</h4>
      <p class="card-text"> 
. Les objectifs stratégiques de l’Université Assane Seck de Ziguinchor sont :<br>
**<b>Former</b>  des cadres supérieurs qualifiés du Sénégal et des autres pays africains, principalement de la sous-région, dans des filières correspondantes aux besoins de l’économie locale, régionale et nationale ;<br>
**<b>Développer</b> une recherche scientifique de qualité en adéquation avec les problématiques locales et nationales ;<br>
**<b>Privilégier</b> la bonne gouvernance universitaire pour une utilisation optimale des ressources humaines, matérielles et financières de l’institution ;<br>
**<b>Utiliser</b> les technologies de l’information et de la communication pour améliorer ses performances dans l’enseignement, la recherche et la gestion<br>

      </p>
    </div>
    <div class="card-footer">
      <small class="text-muted" href="clients.php">l'excelence ma référence</small>
    </div>
  </div>
</div>



                           

<?php include 'footer.php'; ?>             

    <!-- Bootstrap & JavaScript
    ================================================== -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    
    <script src="js/ie10-viewport-bug-workaround.js"></script>



  </body>
</html>

