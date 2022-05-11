<?php


include_once 'C:/xampp/htdocs/G.Events/Controller/eventsC.php';
include_once 'C:/xampp/htdocs/G.Events/Controller/categoryC.php';

	




  $error = "";
  $event=null;
	$eventsC=new eventsC();
	$event=$eventsC->recupererevents($_GET['id_ev']); 
    // create category
    $category = null;

    // create an instance of the controller
    $categoryC = new categoryC();
    $eventCategory=$categoryC->recuperercategory($event['category']);
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EvenTn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />
    
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
    <style>.inputContainer i {
        display: flex;
     }
     .inputContainer {
        display: flex;
        align-items: center;
     }
     .marker {
  background-image: url('img/mapbox-icon.png');
  background-size: cover;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  cursor: pointer;
}
     </style>
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
                    <a href="events1.php" class="nav-item nav-link active">Events</a>

                    <a href="guard.html" class="nav-item nav-link">Guards</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h5 class="text-primary mb-3">Event Detail</h5>
                    <h1 class="mb-3"><?php echo $event['nom_ev']; ?></h1>
                    <div class="d-index-flex mb-2">
                        
                        <span class="mr-3"><?php echo $eventCategory['name'] ?></span>
                      
                    </div>
                </div>

                <div class="mb-5">
                <?php echo'<img class="img-thumbnail mb-4 p-3" src="../security-guard-website-template/img/'.$event['image_ev'].'" alt="image" >'  ?>

                    <p><?php echo $event['descrip_ev']; ?></p>
                    <p><?php echo $event['descrip_lieu']; ?></p>
                 
                  
                </div>
                
             
               

            
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="d-flex flex-column text-left mb-4" style="height: 8.45rem;justify-content: center;">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-lg px-4 btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    <i class="fa fa-shopping-cart mr-2"></i>Buy Ticket
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <div class="inputContainer" style="border: 1px solid #ced4da;">
                       
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
                
            </div>
                <div class="col-12 p-0">
                    <div id='map' style='width: 400px; height: 300px;'></div>
                    <script>
                         async function fetchCoordinates(){

                            let location = " <?php echo $event['lieu'];?>"
                            console.log(location)
                            let response = await fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${location}.json?limit=1&access_token=pk.eyJ1IjoieW91c3NlZjA3MDQiLCJhIjoiY2wyNnR3Mjd3MDBkNjNtcHV6ZGN5bmtwMiJ9.wpKzg_Ev2g6Y0W-GnWtPJg`)

                        //  let response = await fetch('https://api.mapbox.com/geocoding/v5/mapbox.places/de kuip%20rotterdam.json?limit=1&access_token=pk.eyJ1IjoieW91c3NlZjA3MDQiLCJhIjoiY2wyNnR3Mjd3MDBkNjNtcHV6ZGN5bmtwMiJ9.wpKzg_Ev2g6Y0W-GnWtPJg')
                          let data =await response.json()
                          let coordinates = data.features[0].geometry.coordinates
                          console.log(coordinates)

                          
                          mapboxgl.accessToken = 'pk.eyJ1IjoieW91c3NlZjA3MDQiLCJhIjoiY2wyNnR3Mjd3MDBkNjNtcHV6ZGN5bmtwMiJ9.wpKzg_Ev2g6Y0W-GnWtPJg';
                     
                        var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: coordinates,
                        zoom:15
                        
                      })
                      // create a HTML element for each feature
                        const el = document.createElement('div');
                        el.className = 'marker';

  // make a marker for each feature and add to the map
                        new mapboxgl.Marker(el).setLngLat(coordinates).addTo(map);
                          return coordinates
                      }
                      
                      fetchCoordinates()
                     

                     
                     
                    </script>
                   <!--    <iframe style="width: 100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               -->
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