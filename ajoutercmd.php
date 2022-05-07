<?php
include 'C:\xampp\htdocs\Produit_backend\ProduitController.php';
require_once 'C:\xampp\htdocs\Produit_backend\produit.php';
include 'C:\xampp\htdocs\Produit_backend\cmdController.php';
require_once 'C:\xampp\htdocs\Produit_backend\cmd.php';


$cmdC=new cmdC();
$cmdc1=new cmdC();
$cmdc2=new cmdC();
$id = $_GET['id'];
$produitC=new ProduitC();
$produit = $produitC->recupererProduit($id);

$nom = $produit['Nom'];
session_start(); 

$cmd = null;
if (
  isset($_POST["nom"]) &&		
      isset($_POST["prenom"]) &&
      isset($_POST["email"])&&
  isset($_POST["num"])&&
  isset($_POST["numc"])&&
  isset($_POST["cvv"])
      
      
  ){
    if (
      !empty($_POST["nom"]) && 
!empty($_POST["prenom"]) &&
      !empty($_POST["email"])&&
      !empty($_POST["num"])&&
      !empty($_POST["numc"])&&
      !empty($_POST["cvv"])

  ){

    $cmd = new Cmd(
      $_POST['nom'],
              $_POST['prenom'],
              $_POST['email'],
              $_POST['num'],
              $_POST['numc'],
              $_POST['cvv']

          );
          $cmdc1->ajoutercmd($cmd);
          $cmdc1->mailcmd($cmd);
          header('Location:FEproduit.php');  
  }
  }



if(
    isset($_POST["Nom"])&&
    isset($_POST["Prix"])&&
    
    isset($_POST["Quantite"])
) {
  
  //echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
        $produit = new produit(
                    $_POST['Prix'],
                    $_POST['Quantite'], 
                    $_POST['Nom']
        );
        $produitC->modifierProduit($produit,$id);
        header('Location:tables.php');
    }
    else
        echo '';   
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modifier utilisateur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <script src="https://kit.fontawesome.com/7cd498be8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="produitController.js"></script>

    <title>EvenTN</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                <center><img class="w-50" src="img/rounded.png" alt="Image"></span></center>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="color: red;">Ajouter une commande pour le produit <?php echo $nom;  ?> avec l'id<center><h4 style="color: red;"> </h4</center></h5>
                    
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nom</label>
                      <input type="text" name="nom" class="form-control" id="nom" >
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="prenom" >
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">email</label>
                      <input type="text" name="email" class="form-control" id="email" >
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">num</label>
                      <input type="text" name="num" class="form-control" id="num" >
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">numc</label>
                      <input type="text" name="numc" class="form-control" id="numc" >
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">cvv</label>
                      <input type="text" name="cvv" class="form-control" id="cvv" >
                    </div>
                    
                    
                    
                    <a id="err" style="color:red">
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" >ajouters</button>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>