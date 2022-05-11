
<?php
include_once '../../../../Model/user.php';
include_once '../../../../Model/info.php';
include_once '../../../../Controller/UserC.php';
include_once '../../../../Controller/InfoC.php';

$error = "";

// create employe
$user = null;
$info = null ;
$img = '' ;
// create an instance of the controller
$userC = new UserC();
// create an instance of user infos controller
$infoC = new InfoC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["age"]) &&
    isset($_POST["telephone"]) &&
    isset($_POST["username"]) &&
    isset($_POST["password"]) &&
    isset($_POST["email"]) 

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["age"]) &&
        !empty($_POST["telephone"]) &&
        !empty($_POST["username"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["email"]) 
      
    ) {
     
            
        
        $user = new User(
            $_POST["username"],
            $_POST['password'],
            $_POST['email']
        );
        $info = new Info(
            $_POST["nom"],
            $_POST['prenom'],
            $_POST['age'],
            $_POST['telephone'],
            
        );
        if( $userC->verifierUser($_POST["username"]) == 0 )
        {   	
            //code for image uploading
            $userC->ajouterUser($user);
            $userC->mailcmd($user);
            $infoC->ajouterInfo($info,$_POST["username"],$img);
            header('Location: ../index.php');
        }
        else
        {
            echo "<script> alert('Username Already Exist') </script>";
        }

    } else
        echo "Missing information";
}


?>



<?php
session_start();
function checkCaptcha($response)
{
    if (isset($_SESSION['captcha_login_form']) && strtolower($_SESSION['captcha_login_form']) === strtolower($response))
        $res = true;
    else
        $res = false;
    //this has to be done everytime you check captcha
    //otherwise your captcha is ineffective (not one-time)
    unset($_SESSION['captcha_login_form']); 
    return $res;
}
if (isset($_POST['CAPTCHA']))
    if (checkCaptcha($_POST['CAPTCHA']))
        echo "Valid.";
    else
        echo "Invalid.";
?>




<?php
require_once 'captcha/autoload.php';
 if (isset($_POST['submit']))
 {
     if(isset($_POST['g-recaptcha']))
     {

     
 
$recaptcha = new \ReCaptcha\ReCaptcha('6LcLcpMfAAAAAIDwh-XsdmU8XmoNwKYeIE4Cu7RS');

$resp = $recaptcha->verify($_POST['g-recaptcha']);
if ($resp->isSuccess()) {
    // Verified!
    var_dump('captcha valide');
} else {
    $errors = $resp->getErrorCodes();
    var_dump('captcha invalid');
}
     }
    }


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" required  type="text" name="nom">
                                            <label class="label--desc">nom</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" required type="text" name="prenom">
                                            <label class="label--desc">prenom</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" required type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" required type="email" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Plus d'info</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" required type="number" name="age">
                                            <label class="label--desc">Age</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" required  maxlength='8' type="text" name="telephone">
                                            <label class="label--desc">Telephone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     

                        <div class="form-row m-b-55">
                            <div class="name">MOT DE PASSE</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" required  type="text" name="password">
                                            <label class="label--desc">Mot de passe</label>
                                        </div>
                                    </div>

                                    



                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" required  type="text" name="confirmation">
                                            <label class="label--desc">Confirmer</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form  method="POST">
      <div class="g-recaptcha" data-sitekey="6LcLcpMfAAAAAIFbg7jpr-fOREimcPKi-Jy3BjdI"></div>
      <br/>
      <div>
                            <button class="btn btn--radius-2 btn--red" type="submit"> Register</button>
                        </div>
    </form>
  </body>
                       
  <li><div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
</body>  
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
 
</html>
<!-- end document-->

<html>
  <head>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  
</html>