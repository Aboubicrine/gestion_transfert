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
        L'Universit?? Assane SECK de Ziguinchor recrute pour le compte de l'UFR des Sciences Economiques et Sociales, un enseignant- chercheur.<br>
        Profil recherch??:<br>
        Etre titulaire d'un doctorat en Sciences de Gestion
        Avoir une exp??rience dans le domaine du tourisme et de l'h??tellerie de pr??f??rence
        Disposer de solides aptitudes p??dagogiques et une capacit?? ?? enseigner ?? tous les niveaux d'??tudes   Etre en mesure d'encadrer des travaux de recherche

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
      Chef de division de la Comptabilit?? et du suivi budg??taire.
      Rectorat de l???Universit?? Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activit??s de la division ; engager, liquider, mandater les d??penses des fournisseurs, ordonnancer les autres d??penses du Rectorat et soumettre ?? la signature du DFC, du SG et du Recteur ; Transmettre les mandats ?? l???Agence comptable pour r??glement ; Participer ?? l?????laboration du budget jusqu????? son adoption par le C.A. 
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
      Chef de division de la Comptabilit?? et du suivi budg??taire.
      Rectorat de l???Universit?? Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activit??s de la division ; engager, liquider, mandater les d??penses des fournisseurs, ordonnancer les autres d??penses du Rectorat et soumettre ?? la signature du DFC, du SG et du Recteur ; Transmettre les mandats ?? l???Agence comptable pour r??glement ; Participer ?? l?????laboration du budget jusqu????? son adoption par le C.A. 
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
      Chef de division de la Comptabilit?? et du suivi budg??taire.
      Rectorat de l???Universit?? Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activit??s de la division ; engager, liquider, mandater les d??penses des fournisseurs, ordonnancer les autres d??penses du Rectorat et soumettre ?? la signature du DFC, du SG et du Recteur ; Transmettre les mandats ?? l???Agence comptable pour r??glement ; Participer ?? l?????laboration du budget jusqu????? son adoption par le C.A. 
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
      Chef de division de la Comptabilit?? et du suivi budg??taire.
      Rectorat de l???Universit?? Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activit??s de la division ; engager, liquider, mandater les d??penses des fournisseurs, ordonnancer les autres d??penses du Rectorat et soumettre ?? la signature du DFC, du SG et du Recteur ; Transmettre les mandats ?? l???Agence comptable pour r??glement ; Participer ?? l?????laboration du budget jusqu????? son adoption par le C.A. 
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
      Chef de division de la Comptabilit?? et du suivi budg??taire.
      Rectorat de l???Universit?? Assane SECK de Ziguinchor (UASZ).
      Depuis 08.2018
      Coordonner les activit??s de la division ; engager, liquider, mandater les d??penses des fournisseurs, ordonnancer les autres d??penses du Rectorat et soumettre ?? la signature du DFC, du SG et du Recteur ; Transmettre les mandats ?? l???Agence comptable pour r??glement ; Participer ?? l?????laboration du budget jusqu????? son adoption par le C.A. 
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
      Dans le but d'??largir sa carte universitaire et de d??sengorger les universit??s publiques existantes (notamment l'universit?? Cheikh-Anta-Diop de Dakar), les autorit??s s??n??galaises ont d??cid??, depuis le d??but des ann??es 2000, d'ouvrir de nouveaux ??tablissements d'enseignement sup??rieur.
      Initialement pr??vu pour ??tre un Centre universitaire r??gional (CUR), le projet d'implantation d'un ??tablissement ?? Ziguinchor s'est transform?? en la cr??ation d'une universit?? compl??te ?? la suite d'une d??cision du pr??sident Abdoulaye Wade.
      C'est ainsi que l'universit?? de Ziguinchor a ??t?? p??dagogiquement ouverte au cours du mois de f??vrier 2007. En 2013, l'??tablissement a ??t?? renomm?? en hommage ?? Assane Seck, un universitaire et homme politique s??n??galais.
        .</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">l'excelence ma ref??rence </small>
    </div>
    
  </div>

  <div class="card">
    <img src="image/uasz.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Organisation</h4>
      <p class="card-text">
      L'UASZ est compos??e de quatre unit??s de formation et de recherche, de deux ??coles doctorales et de plusieurs laboratoires de recherche :<br>
UFR des sciences ??conomiques et sociales<br>
UFR des sciences et technologies<br>
UFR des lettres, arts et sciences humaines<br>
UFR des sciences de la sant?? <br>
??cole doctorale Sciences, Technologies et Ing??nierie<br>
??cole doctorale Espaces, Soci??t??s et Humanit??s<br>
Laboratoire de g??ographie et environnement<br>
Laboratoire de chimie et physique des mat??riaux<br>
Laboratoire de math??matiques et applications<br>
Laboratoire d'oc??anographie, des sciences de l'environnement et du climat<br>
Laboratoire d'agroforesterie et d'??cologie<br>
Laboratoire de g??ographie et d'environnement<br>
        </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">l'excelence ma r??f??rence</small>
    </div>
  </div>
  <div class="card">
    <img src="image/uasz.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Objectifs</h4>
      <p class="card-text"> 
. Les objectifs strat??giques de l???Universit?? Assane Seck de Ziguinchor sont :<br>
**<b>Former</b>  des cadres sup??rieurs qualifi??s du S??n??gal et des autres pays africains, principalement de la sous-r??gion, dans des fili??res correspondantes aux besoins de l?????conomie locale, r??gionale et nationale ;<br>
**<b>D??velopper</b> une recherche scientifique de qualit?? en ad??quation avec les probl??matiques locales et nationales ;<br>
**<b>Privil??gier</b> la bonne gouvernance universitaire pour une utilisation optimale des ressources humaines, mat??rielles et financi??res de l???institution ;<br>
**<b>Utiliser</b> les technologies de l???information et de la communication pour am??liorer ses performances dans l???enseignement, la recherche et la gestion<br>

      </p>
    </div>
    <div class="card-footer">
      <small class="text-muted" href="clients.php">l'excelence ma r??f??rence</small>
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

