+<?php
session_start();
include_once '../../../Model/user.php';
include_once '../../../Controller/UserC.php';
//include_once '../../Controller/InfoC.php';
//include_once "C://wamp64/www/solis/config.php";
include_once "C://xampp/htdocs/validation/config.php";
$error = "";



$message="";
$userC = new UserC();
//$infoC = new InfoC();
if (isset($_POST["username"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["username"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["username"],$_POST["password"]);
         $_SESSION['e'] = $_POST["username"];

        if($message!='pseudo ou le mot de passe est incorrect'){
         $usr = $userC->recupererUserUsername($_POST["username"]);
     $info = $userC->recupererUserInfo($_POST["username"]);
         $_SESSION['email'] = $usr["email"];
        $_SESSION['nom'] = $info["nom"];
          $_SESSION['prenom'] = $info["prenom"];
         $_SESSION['age'] = $info["age"];
         $_SESSION['telephone'] = $info["telephone"];
            if($message=='2'){ 
           header('Location: ../back/index.php');} else if ($message=='1'){
            header('Location:../security-guard-website-template/account.php');
           }
                
        }
           else
           {
               echo "<script> alert('wrong informations!') </script>";
           }
           
       } else
           echo "Missing informations";
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

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Bienvenue  Chez  EvenTN </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="mb-4">Sign Up</h3>
				  <form class="user" method="post" action="" id="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="username" name="username" 
                                                placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <button type="submit" name="login_submit" class="btn btn-primary btn-user btn-block"> Login </button>
                                            
                                        </a>
                                        <hr>
                                    </form>

                    
	          <p class="text-center">Already have an account? <a href="colorlib-regform-5/index.php">Sign In</a></p>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

