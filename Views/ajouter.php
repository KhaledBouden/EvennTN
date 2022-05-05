
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>

<?php
include '../Controller/reclamationcc.php';
include '../model/reclamationn.php';
 include_once '../config.php'; 
   $error = "";
    // create adherent
    $reclamation = null;
    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
         
		isset($_POST["date"]) &&		
        isset($_POST["objet"]) &&
		isset($_POST["description"])  
         
    ) {
        if (
            
			!empty($_POST['date']) &&
            !empty($_POST["objet"]) && 
			!empty($_POST["description"]) 
        ) {
            $reclamation = new reclamation(
                 
				$_POST['date'],
                $_POST['objet'], 
				$_POST['description'] 
            );
            $reclamationC->ajouterreclamation($reclamation);
           // header('Location:afficherListereclamation.php');
        }
        else
            $error = "Missing information";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>reclamation</title>
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
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <p class="mr-2 mb-2 mb-lg-0 text-white">Opening Hours:</p>
                    <span class="mb-2 mb-lg-0 text-white">8.00AM - 9.00PM</span>
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
                    <h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">EVENT</span>N</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Our Office</h6>
                        <p class="m-0">123 Street, NY, USA</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">info@example.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="guard.html" class="nav-item nav-link">Guards</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="ajouter.php" class="nav-item nav-link active">Reclamation</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
 
 
<div class="container-fluid ">
        <div class="d-flex flex-column text-center mb-0">
            <h5 class="text-primary mb-0">Bienvenue</h5>
            <h1 class="m-0">Espace Reclamation </h1>
        </div>
  
 
        
        <div class="row">
            <div class="col-12 p-2">
                 <iframe  async style="width: 100%; height: 400px;" src= https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13200.433545758657!2d10.190405227943439!3d36.89598523732991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7454c6ed51%3A0x683b3ab5565cd357!2sEsprit%20Pr%C3%A9pa!5e0!3m2!1sfr!2stn!4v1651679125361!5m2!1sfr!2stn   style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
 
           




    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-0">Contact Us</h5>
            <h1 class="m-0">Contact For Any Query</h1>
        </div>
        <div class="row">
            
            <div class="col-12">
                <div class="contact-form bg-white">
                    <div id="success"></div>
                    <form  action=" " method="POST"   >
                    
                    <table class="table " border="4" align="center">
                 
				<tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td><input type="date" name="date" id="date" required="date?"></td>
                </tr>
                <tr>
                    <td>
                        <label for="objet">objet:  </label>
                    </td>
                    <td><input type="text" name="objet" id="objet"  required="objet?" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label  for="description" >description: </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description" required="description?">
                    </td>
                </tr>
                   
                <tr>
                    <td></td>
                    <td>
                        <input  id="a" name="a" style= "background-color:red; "   type="submit" value="Envoyer reclamation"> 
                         
 
 

                    </td>
 
                    <td>
                        <input style= "background-color:red; " type="reset"  value="Annuler" >
                    </td> 
                </tr>
                </table><a  href="backend/blank.php "  class="btn btn-primary" >Backend</a>
                <a   href="affichierrep.php "  class="btn btn-primary"   > Affichier les reponses</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 

    <?php

include_once "../Controller/reclamationcc.php";
include_once "../config.php";
include_once '../Model/reclamationn.php';
//include 'C:\wamp64\www\Controller/reclamationcc.php';
//require_once 'C:\xampp\htdocs\Produit_backend\produit.php';
   $reclamationC=new reclamationc();
   $listereclamation=$reclamationC->afficherreclamation(); 
?>
    <table class="table table-striped" border="1" align="center">
           <tr>
           <html> <style>  hr { border-top: 4px solid #095484;}</style><hr/>
               <th>id</th>
               <th>Date </th>
               <th>Objet  </th>
               <th>reponses  </th>
               <th>Supprimer</th>
               
           </tr>
           
           <?php
				foreach($listereclamation as $reclamation){
			?>

			 
				 <?php $a=$reclamation['id']; ?> 
				 <?php $b=$reclamation['date']; ?> 
				 <?php $c=$reclamation['objet']; ?> 
				 <?php $d=$reclamation['description']; ?> 
                         
           </tr>
           <?php
               }
           ?>
                <td><?php echo $a?></td>
               <td><?php echo $b?></td>
               <td><?php echo $c?></td>
               <td><?php echo $d?></td>
               <td>
					<a class="btn btn-primary" href="supprec.php?id=<?php echo $reclamation['id']; ?>">Supprimer</a>
                     
                      
               </td>
				 
  
       </table>
      <!-- <a  class="btn btn-primary" href="modiff.php?id=<?PHP echo $reclamation['id'];?>"> Modifier </a>-->
    <!-- Contact End -->
    <html> <style>  hr { border-top: 4px solid #095484;}</style><hr/>

    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ko', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- Footer Start -->
   



    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">

    <style type="text/css">
.centerImage
{
 text-align:center;
 display:block;
}
</style>
<center>
    <img src="pdpfb.jpg" class="centerImage"   height=300 alt="pic"> 
</center>

        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="display-5 text-primary">Gymnast</h1>
                <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
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
                    &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
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
    <script src="verif.js"></script>
</body>

</html>