<?php
	include 'C://xampp/htdocs/validation/Controller/offreC.php';
	include 'C://xampp/htdocs/validation/Controller/commandeC.php';
	$offreC=new offreC();

	$listeoffre=$offreC->afficherListeoffre(); 
    $error = "";

                // create commande
                $commande = null;


                // create an instance of the controller
                $commandeC = new commandeC();
                if (		
                    isset($_GET["date"]) &&
                    isset($_GET["prenom"]) &&
                    isset($_GET["nom"]) &&
                    isset($_GET["numero_carte"])
                    
                ){
                   
                    if (
                        !empty($_GET["date"]) &&
                        !empty($_GET["prenom"]) &&
                        !empty($_GET["nom"]) &&
                        !empty($_GET["numero_carte"])
                       
                    ) {
                       
                        $commande = new commande(
                            $_GET['id_commande'], 
                            $_GET['id_offre'],
                            $_GET['date'], 
                            $_GET['prix_offre']
            
                        );
                        $commandeC->ajoutercommande($commande);
                        header('Location:service.php');
                        echo("commande");
                     
                    }
                    else
                        $error = "Missing information";
                }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafetyFirst - Security Guard Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<div class="col-xs-2" align="center">
<br>
<a href="agenda/calendrier.html"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg></a>

 </div>
 
  

<body class="bg-white" >



    <!-- Services Start -->
    
    
    <div class="container pt-5">
        
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Nos offres</h5>
            <h1 class="m-0">La liste de nos offres</h1>
        </div>
        <div class="row pb-3">
        <?php
				foreach($listeoffre as $offre){
			?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/service-<?php echo $offre['id_offre']; ?>.jpg" alt="" height="195" width="100">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0"><?php echo $offre['nom_offre']; ?></h6>
                    </div>
                    <div class="card-footer">
				      prix :<?php echo $offre['prix_offre']; ?> </br>
                      date début :<?php echo $offre['dateDeb_offre']; ?></br>
				      date expiration : <?php echo $offre['dateExp_offre']; ?></br>

                    </div>
                    <!-- ajouter commande -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajoutercommande">
  Commander
</button>

<!-- Modal -->
<div class="modal fade" id="ajoutercommande" tabindex="-1" role="dialog" aria-labelledby="passer une commande" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Commande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="modifier" action="" method="GET">
                 <div class="p-2"><label for="prenom">prenom</label>
                 <input class="form-control" name="prenom" id="prenom">
             </div>
             <div class="p-2"><label for="nom">nom</label>
                 <input class="form-control" name="nom" id="nom">
             </div>
             <div class="p-2"><label for="numero carte">numero carte</label>
                 <input class="form-control" name="numero_carte" id="numero_carte" type="number">
             </div>
             <div class="p-2"><label for="date">date</label>
                 <input class="form-control" name="date" id="date" type="date">
             </div>
             <input  name="id_offre" id="id_offre" type="hidden" value="<?php  echo($offre["id_offre"]); ?>">
             <input  name="prix_offre" id="prix_offre" type="hidden" value="<?php echo($offre["prix_offre"]); ?>">
    
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">annuler</button>
        <button type="submit" class="btn btn-primary" id="commander">commander</button>
      </div>
      </form>
    </div>
  </div>
</div>
                 </div> 
                    
              
            </div>
            <?php
				}
			?>
          </div>




          <div class="d-flex flex-column text-center mb-5">
            <a class="btn btn-light" href="affichercommande2.php">Mes commandes</a>       
            </div>
  
   
    <!-- buttons end-->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <div class="row pt-5">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-user-shield mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">250</h4>
                <h6 class="text-white m-0">Nos employées</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-users mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">1500</h4>
                <h6 class="text-white m-0">satisfait</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-shield-alt mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">10000</h4>
                <h6 class="text-white m-0">commandes par jour</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-award mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">25</h4>
                <h6 class="text-white m-0">Offres par jour</h6>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Testimonial Start -->
    <div class="container-fluid p-0">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h5 class="text-primary mb-3">Feedback</h5>
                <h1 class="m-0">l'avis de nos clients</h1>
                
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        J'ai passé le meilleurs vacanses cette années j'ai payé présque rien
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Aziz</h6>
                            <p class="m-0">Professeur</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                       Lorsque mon fils ma monté se site j'ai lui dit c'est pas possible d'avoir de offres aussi abordable 
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">mourad</h6>
                            <p class="m-0">inférmié</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Offres abordable dans des endroits magnifiques
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Taher</h6>
                            <p class="m-0">Coursier</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                    J'ai vu les offres j'ai testé je suis satsifait tout simplement
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">khaled</h6>
                            <p class="m-0">ingénieur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!--  <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>   -->
   


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- notification -->
    
    <script src="js/verif.js"></script>
    <script src="js/notification.js"></script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>
  <script src="//code.tidio.co/vmughjwmvamfyb7rh4yfc0t03zqxlas8.js" async></script>
<div id="google_translate_element"></div>
</body>

</html>