<?php

include_once 'C:/xampp/htdocs/G.Events/Controller/eventsC.php';

include_once 'C:/xampp/htdocs/G.Events/Controller/categoryC.php';




 

  $error = "";
  $events=null;
	$eventsC=new eventsC();
	$listeevents=$eventsC->afficherevents(); 

    // create product
    $category = null;

    // create an instance of the controller
    $categoryC = new categoryC();
    $listecategory=$categoryC->affichercategory();
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EvenTn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/eventnicon.png" rel="icon">

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
                    <img class="w-20" src="img/eventnicon.png" alt="Image">

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
                    <a href="events.html" class="nav-item nav-link active">Events</a>
                    <a href="guard.html" class="nav-item nav-link">Guards</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <li> <a  class="nav-item nav-link">Translate</a>
                    
                                               <ul class="submenu">
                                               <div id="google_translate_element"></div>
                                                <script type="text/javascript">
                                                function googleTranslateElementInit() {
                                                  new google.translate.TranslateElement({pageLanguage: 'hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                                }
                                                </script>
                                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                                 </ul>

                                             </li>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
   <!-- Modal -->
   <div class="modal fade" id="purchaseTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        
      <div class="modal-content" >
        <div style="display: flex; flex-direction: column;">
            <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body" style="display: flex;">
                <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputFirstName">FirstName</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="enter your firstname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputLastName">LastName</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="enter your lastname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Phone Number</label>
                  <input type="tel" class="form-control" id="inputPhoneNumber" placeholder="enter your phone number">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-9">
                    <label for="inputCity">Card Info</label>
                    <div class="inputContainer" style="border: 1px solid #ced4da; display: flex;align-items: center;">
                       
                        <input type="text" class="form-control" id="inputCity" style="border: 0;">
                        <i class="fa fa-credit-card ml-2 mr-2" aria-hidden="true"></i>

                    </div>
                   
                  </div>
                  
                  <div class="form-group col-md-3">
                    <label for="inputZip">CVV</label>
                    <input type="password" class="form-control" id="inputZip">
                  </div>
                  <div style="display: flex; flex-direction: column;padding-left: 5px;width: 100%; ">
                    <p  >Expire</p>
                    <div style="display: flex; justify-content: space-around;">
                  <div class="form-group col-md-5" style="padding: 0;">
                    <label for="inputMonth">Month</label>
                    <select id="inputMonth" class="form-control">
                      <option selected>Choose...</option>
                      <option>1 - January</option>
                      <option>2 - February</option>
                      <option>3 - March</option>
                      <option>4 - April</option>
                      <option>5 - May</option>
                      <option>6 - June</option>
                      <option>7 - July</option>
                      <option>8 - August</option>
                      <option>9 - September</option>
                      <option>10 - October</option>
                      <option>11 - November</option>
                      <option>12 - December</option>
                      
                    </select>
                  </div>
                  <div class="form-group col-md-5" style="padding: 0;">
                    <label for="inputYear">Year</label>
                    <select id="inputYear" class="form-control">
                      <option selected>Choose...</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                      <option>4 - April</option>
                      <option>5 - May</option>
                      <option>6 - June</option>
                      <option>7 - July</option>
                      <option>8 - August</option>
                      <option>9 - September</option>
                      <option>10 - October</option>
                      <option>11 - November</option>
                      <option>12 - December</option>
                      
                    </select>
                  </div>
                </div>  
                </div>
                </div>
                
               
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
            <img class="card-img-top" src="img/blog-1.jpg" alt="">
      </div>
     
    </div>
  </div>

    <!-- Detail Start -->
    <div class="container py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Browse Events</h5>
            <h1 class="m-0">find the perfect event</h1>
        </div>
        <div class="row" style="justify-content: space-between;">
           
            <div class="col-lg-9" style="display: flex; justify-content:space-around ;flex-wrap: wrap;">
            <?php
                                                            foreach($listeevents as $events){
                                                           
                                                        ?>
                                                    
                                                    <div class="col-lg-5 mb-4" >
                    <div class="card mb-2 p-3">
                    <?php echo'<img class="card-img-top" src="../security-guard-website-template/img/'.$events['image_ev'].'"width="480;" height="300" alt="image" >'  ?>

                        <div class="card-body bg-secondary d-flex align-items-center p-0" style="height: 3rem; justify-content: center;">
                            <h6 class="card-title text-white text-truncate m-0 "> <?php echo $events['nom_ev']; ?></h6>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <div class="d-flex mb-2"> 
                                <span style="background-color: bisque; border-style: solid;border-radius: 3rem; padding: 0 1rem;"><?php 
                                 $eventCategory = null;

                                 // create an instance of the controller
                                
                                 $eventCategory=$categoryC->recuperercategory($events['category']);
                                 echo $eventCategory['name']
                                ?></span>
                            </div>
                            <p class="m-0"> <?php echo $events['descrip_ev']; ?></p>
                            <div class="d-flex mb-2" style="justify-content: space-between; margin-top: 1rem; align-items: center;">
                                <small class="mr-3"><i class="fa fa-info-circle text-primary"></i> <a href=<?php echo 'eventDetail.php?id_ev='.$events['id_ev']; ?>> Event Details</a></small>
                                <small type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                                    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
                                </small>
                                  
                                 
                                  <!--balise link  <a> -->
                         
                            </div>
                        </div>
                    </div>    
                </div>
                                                    <?php } ?>
                <!--  <div class="col-lg-5 mb-4" >
                    <div class="card mb-2 p-3">
                        <img class="card-img-top" src="img/afro.jpg" alt="">
                        <div class="card-body bg-secondary d-flex align-items-center p-0" style="height: 3rem; justify-content: center;">
                            <h6 class="card-title text-white text-truncate m-0 ">Afro Nation Portugal 2022</h6>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <div class="d-flex mb-2"> 
                                <span style="background-color: green; border-style: solid;border-radius: 3rem; padding: 0 1rem;">Music Event</span>
                            </div>
                            <p class="m-0">Afro Nation Portugal is an Afrobeats, hip-hop, R&B, dancehall, amapiano and Afrohouse festival that is held every summer on the beautiful Praia da Rocha beach, south of Portimão.</p>
                            <div class="d-flex mb-2" style="justify-content: space-between; margin-top: 1rem; align-items: center;">
                                <small class="mr-3"><i class="fa fa-info-circle text-primary"></i> <a href="eventDetail.html"> Event Details</a></small>
                                <small type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                                    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
                                </small>
                                  
                                 
                            
                         
                            </div>
                        </div>
                    </div>    
                </div>
               
                <div class="col-lg-5 mb-4" >
                    <div class="card mb-2 p-3">
                        <img class="card-img-top" src="img/afro.jpg" alt="">
                        <div class="card-body bg-secondary d-flex align-items-center p-0" style="height: 3rem; justify-content: center;">
                            <h6 class="card-title text-white text-truncate m-0 ">Afro Nation Portugal 2022</h6>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <div class="d-flex mb-2"> 
                                <span style="background-color: green; border-style: solid;border-radius: 3rem; padding: 0 1rem;">Music Event</span>
                            </div>
                            <p class="m-0">Afro Nation Portugal is an Afrobeats, hip-hop, R&B, dancehall, amapiano and Afrohouse festival that is held every summer on the beautiful Praia da Rocha beach, south of Portimão.</p>
                            <div class="d-flex mb-2" style="justify-content: space-between; margin-top: 1rem; align-items: center;">
                                <small class="mr-3"><i class="fa fa-info-circle text-primary"></i> <a href="eventDetail.html"> Event Details</a></small>
                                <small type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                                    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
                                </small>
                                  
                                 
                               
                         
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-lg-5 mb-4" >
                    <div class="card mb-2 p-3">
                        <img class="card-img-top" src="img/ohmyfestival.jpg" alt="">
                        <div class="card-body bg-secondary d-flex align-items-center p-0" style="height: 3rem; justify-content: center;">
                            <h6 class="card-title text-white text-truncate m-0 ">Oh My! Festival 2022</h6>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <div class="d-flex mb-2">
                                <span style="background-color: darkorchid; border-style: solid;border-radius: 3rem; padding: 0 1rem;">Music Event</span>
                            </div>
                            <p class="m-0">It's Europe's largest urban music festival taking place over a single day at Almere Beach near Amsterdam. Divided into four stages, Oh My! showcases the best of national and international hip-hop talent.</p>
                            <div class="d-flex mb-2" style="justify-content: space-between; margin-top: 1rem; align-items: center;">
                                <small class="mr-3"><i class="fa fa-info-circle text-primary"></i> <a href="eventDetail.html"> Event Details</a></small>
                                <small type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                                    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
                                </small>
                                  
                                
                                
                         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4" >
                    <div class="card mb-2 p-3">
                        <img class="card-img-top" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-secondary d-flex align-items-center p-0" style="height: 3rem; justify-content: center;">
                            <h6 class="card-title text-white text-truncate m-0 ">Diam amet eos at no eos</h6>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <div class="d-flex mb-2"> 
                                <span style="background-color: cadetblue; border-style: solid;border-radius: 3rem; padding: 0 1rem;">Web Design</span>
                            </div>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                            <div class="d-flex mb-2" style="justify-content: space-between; margin-top: 1rem; align-items: center;">
                                <small class="mr-3"><i class="fa fa-info-circle text-primary"></i> <a href="eventDetail.html"> Event Details</a></small>
                                <small type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                                    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
                                </small>
                                  
                                 
                                 
                         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-4" >
                    <div class="card mb-2 p-3">
                        <img class="card-img-top" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-secondary d-flex align-items-center p-0" style="height: 3rem; justify-content: center;">
                            <h6 class="card-title text-white text-truncate m-0 ">this is title</h6>
                        </div>
                        <div class="card-footer py-3 px-4">
                            <div class="d-flex mb-2"> 
                                <span style="background-color: bisque; border-style: solid;border-radius: 3rem; padding: 0 1rem;">Web Design</span>
                            </div>
                            <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                            <div class="d-flex mb-2" style="justify-content: space-between; margin-top: 1rem; align-items: center;">
                                <small class="mr-3"><i class="fa fa-info-circle text-primary"></i> <a href="eventDetail.html"> Event Details</a></small>
                                <small type="button" class="btn btn-sm  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                                    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
                                </small>
                                  
                                 
                             
                         
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

            <div class="col-lg-3 mt-5 mt-lg-0">
             
                <div class="mb-5">
                    <h4 class="mb-4">Categories</h4>
                    <ul class="list-group">
                    <?php
                                                            foreach($listecategory as $category){
                                                           
                                                        ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <!--<i class="fa fa-music" aria-hidden="true"></i>-->
                            <?php echo $category['name']; ?>
                             <!--<span class="badge badge-primary badge-pill">150</span>-->
                        </li> 
                        <?php } ?>
                         <!--<li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Development
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Online Marketing
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Keyword Research
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email Marketing
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>-->
                    </ul>
                </div>
              
               
              
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <img class="w-50" src="img/eventn2.png" alt="Image">  
                
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
</body>

</html>