

<?php

include "C://xampp/htdocs/validation/config.php";
   // include "C://wamp64/www/solis/config.php";
 // include '../../Controller/InfoC.php';


 use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 

if (isset($_POST["email"]))
{
    $email=$_POST["email"] ;
}

function mailcmd2($email){
    $mail = new PHPMailer; 
    

    
    
    
    
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'khaledturki20182017@gmail.com';   // SMTP usern

$mail->Password = 'khaled2018turki2017';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('khaledturki20182017@gmail.com', 'eventn'); 
$mail->addReplyTo('khaledturki20182017@gmail.com', 'eventn'); 
 
// Add a recipient 
$mail->addAddress($email); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
$mail->isHTML(true); 
// Mail subject 
$mail->Subject = 'Bienvenue Chez  Eventn'; 

// Mail body content 
$bodyContent = '<html><body>';
$bodyContent .= '<h1 style="color:#f40;">  votre mot de passe est   : </h1>'; 
$bodyContent .= '<h4 style="color:#dc143c;"> Khaled  </h4> '; 
$bodyContent .=  '<h4 style="color:#dc143c;"> Votre email est  : </h4> '; 

$bodyContent .=   $email ; 
$bodyContent .= '<h4 style="color:#dc143c;"> http://localhost/validation/Views/Front/signup-form-15 : </h4> '; 
$bodyContent .= '<html><body>';
$mail->Body    = $bodyContent; 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 
     }

?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Sign Up 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">

	</head>
	<body>
        
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> Recover your password  </h2>
                   
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="mb-4">Recover your password </h3>
				  <form class="user" method="post" action="" id="form">

                                        <div class="form-group">
                                            <input type="text" required class="form-control form-control-user"
                                                id="email" name="email" 
                                                placeholder="Enter email...">
                                        </div>
                                        

                                     
                                   

                                       
                                        <button type="submit" name="login_submit" id="login"  class="btn btn-primary btn-user btn-block"> Login </button>
                                            
                                        </a>
                                        <hr>
                                    </form>
                                  
                                    <?php
                                           mailcmd2($email) ;        
                                    ?>

                                     

                    
	          
              
</body>
	        </div>
            
				</div>
			</div>
		</div>
        
	</section>

    
    
   
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <script src="verif.js"></script>

	</body>
</html>