<?php
	include 'C://xampp/htdocs/validation/Controller/commandeC.php';
	$commandeC=new commandeC();
	$listecommande=$commandeC->afficherListecommandevendu(); 
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

<body class="bg-white">
<table class="table table-striped table-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prix</th>
      <th scope="col">date deb</th>
      <th scope="col">date exp</th>
    </tr>
  </thead>
  <tbody>
  <?php
    	foreach($listecommande as $offre){
			?>
     
    <tr>
      <th scope="row"><?php echo($offre['id_offre'] )?></th>
      <td><?php echo($offre["nom_offre"]) ?></td>
      <td><?php echo($offre["prix_offre"]) ?></td>
      <td><?php echo($offre["dateDeb_offre"]) ?> </td>
      <td><?php echo($offre["dateExp_offre"]) ?> </td>
      
    </tr>
    </div>
        </div>

    <?php } 
    
    ?>
  </tbody>
</table>


<div align="center">
    <a class="btn btn-dark" href="affichercommande.php">retour</a>
 </div>





         


            
   


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


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
</body>

</html>