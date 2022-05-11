<?php
	include 'C://xampp/htdocs/validation/Controller/offreC.php';
	$offreC=new offreC();
	$listeoffre=$offreC->afficherListeoffre(); 

    
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
    <link href="http://localhost/web/front office/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="http://localhost/web/front office/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost/web/front office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/web/front office/css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
  


    <!-- Services Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Nos offres</h5>
            <h1 class="m-0">La liste de nos offres</h1>
        </div>
        <div class="card-group">
         
            <?php
				foreach($listeoffre as $offre){
			?>
                <div class="card mb-2 p-3">
                    
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0"><?php echo $offre['nom_offre']; ?></h6>
                    </div>
                    <div class="card-footer">
				      prix :<?php echo $offre['prix_offre']; ?> 
                      <br>
                      date début :<?php echo $offre['dateDeb_offre']; ?>
                      <br>
				      date expiration : <?php echo $offre['dateExp_offre']; ?>
                      <br>
                      <div class="row">
                      <div class="col-xs-6">
                      <form method="GET" action="modifieroffre.php">
						<input class="btn btn-info" type="submit" name="Modifier" value="Modifier">
						<input type="hidden" name="id_offre" id=id_offre value=<?PHP echo $offre['id_offre']; ?>>
					</form>
                      </div>
                      <div class="col-xs-6">
                      <a class="btn btn-danger" href="supprimeroffre.php?id_offre=<?php echo $offre['id_offre']; ?>">Supprimer</a>
                      </div>
                </div>

                    

                    </div>
                   
                <?php
				}
			?>
            </div>
            <div class="row" align="center">
                <div class="col-xs-4">
                       <a class="btn btn-success" href="ajouteroffre.php" role="button">Ajouter</a>
                       <a class="btn btn-dark" href="backoffice/index.html" role="button">retour</a>
                                        
                 </div>
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
                        <img class="img-thumbnail bg-light rounded-circle" src="http://localhost/web/front office/img/testimonial-1.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
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
                        <img class="img-thumbnail bg-light rounded-circle" src="http://localhost/web/front office/img/testimonial-2.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
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
                        <img class="img-thumbnail bg-light rounded-circle" src="http://localhost/web/front office/img/testimonial-3.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
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
                        <img class="img-thumbnail bg-light rounded-circle" src="http://localhost/web/front office/img/testimonial-4.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/web/front office/lib/easing/easing.min.js"></script>
    <script src="http://localhost/web/front office/lib/waypoints/waypoints.min.js"></script>
    <script src="http://localhost/web/front office/lib/counterup/counterup.min.js"></script>
    <script src="http://localhost/web/front office/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="http://localhost/web/front office/mail/jqBootstrapValidation.min.js"></script>
    <script src="http://localhost/web/front office/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="http://localhost/web/front office/js/main.js"></script>
</body>

</html>