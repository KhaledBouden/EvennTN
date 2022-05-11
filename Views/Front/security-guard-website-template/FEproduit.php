<?php

include 'C:\xampp\htdocs\validation\Controller\ProduitController.php';
require_once 'C:\xampp\htdocs\validation\Model\produit.php';
include 'C:\xampp\htdocs\validation\Controller\cmdController.php';









$produitc3=new ProduitC();
$cmdC=new cmdC();
$cmdC1=new cmdC();
$listeProduitFE=$produitc3->afficherProduit(); 

$cmd = null;
$Produit= null;


if (
    
    isset($_POST["nom"]) &&	
   
    isset($_POST["prenom"]) &&
    isset($_POST["email"])&&
    isset($_POST["num"])&&
    isset($_POST["numc"])&&
    isset($_POST["cvv"])

    
    
){
if( 
    !empty($_POST["nom"]) &&
   	
    !empty($_POST["prenom"]) &&
    !empty($_POST["email"])&&
    !empty($_POST["num"])&&
    !empty($_POST["numc"])&&
    !empty($_POST["cvv"])
){
    $cmd = new cmd(
        
        $_POST["nom"] ,
        		
        $_POST["prenom"] ,
        $_POST["email"],
        $_POST["num"],
        $_POST["numc"],
        $_POST["cvv"]
    );
        $cmdC1->ajoutercmd($cmd);
        header('Location:FEproduit.php');  
}
else 
$error = "Missing information";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eventn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <script src="https://kit.fontawesome.com/7cd498be8c.js" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link href="img/eventsmlAsset 2.png" rel="icon">

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
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <!--<p class="mr-2 mb-2 mb-lg-0 text-white">Opening Hours:</p>
                    <span class="mb-2 mb-lg-0 text-white">8.00AM - 9.00PM</span>-->
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <p class="m-0 mr-1 text-white">Follow Us:</p>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <img class="w-20" src="img/eventsmlAsset 2.png" alt="Image">
                    <!--<h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">Safety</span>First</h1>-->
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <p></p>
                        <h6>Our Office</h6>
                        <p class="m-0">123 Street, NY, USA</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <p></p>
                        <h6>Email Us</h6>
                        <p class="m-0">EvenTn@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <p></p>
                        <h6>Call Us</h6>
                        <p class="m-0">+216 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!--Tnoval-->

    <!--noval-->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <!--<h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>-->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                <a href="account.php" class="nav-item nav-link active">Profils</a>
                <a href="FEproduit.php" class="nav-item nav-link">Produits</a>
                 <a href="about.html" class="nav-item nav-link">Evenements</a>
                <a href="ajouter.php" class="nav-item nav-link">Reclamation</a>
                <a href="service.html" class="nav-item nav-link">Offres</a>
                <a href="service.html" class="nav-item nav-link">forum</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Team Start -->
    
    <div class="container pt-5 pb-3">
        <input type="text" class="form-control" id="inputLastName" placeholder="Rechercher...">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Liste des produit</h5>
            <h1 class="m-0">Choisir et acheter un produit</h1>
        </div>
        <div class="">
         <?php
                  foreach($listeProduitFE as $Produit){               ?>     
            <div class="">
            
                <div class="row  align-items-center">
                    <div class="col-6 text-right">
                        <h6><?php echo $Produit['Nom']; ?> </h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2"><?php echo $Produit['Prix']; ?> TND</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2"><?php echo $Produit['Quantite'];  ?> En Stock</h6>
                       
                        <div class="d-flex justify-content-end">
                        <a href="ajoutercmd.php?id=<?php echo $Produit['id']; ?>" class="btn btn-lg  btn-primary">
                        <i class="fa fa-shopping-cart mr-2"></i>Acheter</a>
                           
                                
                                
                            
                        </div>
                        <p></p>
                        <a href="../../back/tables.php"><h6 class="text-primary font-weight-normal mb-2"  > <i class="fa-solid fa-user"></i> Admin</h6></a>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/p1.png" alt="Image">
                    </div>
                </div>
            </div>
           

            
           
           
        </div>
    </div>
    <?php } ?>
    <!-- Team End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <div class="row pt-5">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-user-shield mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">250</h4>
                <h6 class="text-white m-0">Our Staff</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-users mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">1500</h4>
                <h6 class="text-white m-0">Happy Client</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-shield-alt mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">10000</h4>
                <h6 class="text-white m-0">Project Complete</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-award mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">25</h4>
                <h6 class="text-white m-0">Award Winning</h6>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <!-- <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <h5 class="text-primary mb-3">Why Choose Us?</h5>
                <h1 class="mb-4">Top Level Security</h1>
                <img class="img-thumbnail mb-4 p-3" src="img/feature.jpg" alt="Image">
                <p>
                    Ea tempor ipsum kasd clita. Sea diam amet et rebum sit stet, vero sea est diam et sit ea sit et ea no
                </p>
                <a href="" class="btn btn-lg btn-primary mt-2">Learn More</a>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-policeman font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">High Security</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-bodyguard font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Trained Guards</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-approved font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Govt Approved</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-medal font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Award Winning</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-helmet font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Latest Equipments</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-surveillance font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">24/7 Support</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
               
                <img class="w-50" src="img/rounded.png" alt="Image">
                <p class="m-0"></p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Liens Rapides</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Acceuil</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Profile</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Produits</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Evenements</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>forum</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>offre</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Liens populaires</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Acceuil</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Profile</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Produits</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Evenements</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>forum</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>offre</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Contact</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">EvenTN</a>. All Rights Reserved. 
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">Designed by CyberArchitects</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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