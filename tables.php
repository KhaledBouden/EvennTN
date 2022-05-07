
<?php
include 'C:\xampp\htdocs\Produit_backend\ProduitController.php';
require_once 'C:\xampp\htdocs\Produit_backend\produit.php';
include 'C:\xampp\htdocs\Produit_backend\cmdController.php';
$ProduitC=new ProduitC();
$produitc1=new ProduitC();
$produitc2=new ProduitC();
$ProduitCQR=new ProduitC();

$listeProduit=$ProduitC->afficherProduit(); 

session_start(); 
$error = "";
  
    // create " produit"
    $produit = null;
    // create an instance of the controller
    
	//creating a "produit"
    
    if (
		isset($_POST["Prix"]) &&		
        isset($_POST["Quantite"]) &&
		isset($_POST["Nom"])
        
        
    ) {
        
        if (
            !empty($_POST["Prix"]) && 
			!empty($_POST["Quantite"]) &&
            !empty($_POST["Nom"])
			
        ) {
            $produit = new Produit(
				$_POST['Prix'],
                $_POST['Quantite'],
                $_POST['Nom']
	
            );
            $produitc1->ajouterProduit($produit);
            
            header('Location:tables.php');  
        }
        else
            $error = "Missing information";
    }
    if (
		
        isset($_POST["Prix2"]) &&		
        isset($_POST["Quantite2"]) &&
		isset($_POST["Nom2"])&&
        isset($_POST["id2"]) )
       {
          if (
            !empty($_POST["Prix2"]) && 
			!empty($_POST["Quantite2"]) &&
            !empty($_POST["Nom2"])&&
            !empty($_POST["id2"]) 
          ) {
        //echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
              $produit = new Produit(
                $_POST['Prix2'],
                $_POST['Quantite2'], 
				$_POST['Nom2'],
                $_POST['id2']
               
              );
              //var_dump($evenement);
        
              $produitc2->modifierProduit($produit, $_POST['id2']);
              header('Location:tables.php');
          }
          else
              $error = "Missing information";
      }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/7cd498be8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      
    <title>SB Admin 2 - Tables</title>

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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                    
            <img class="w-50" src="img/rounded.png" alt="Image">
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0">
           


           

           
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table    "></i>
                    <span>Tables</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="login.html"><i class="fa-solid fa-calendar-minus"></i>Evenements</a>
                        
                        <a class="collapse-item" href="forgot-password.html"><i class="fa-solid fa-user"></i>Utilisatuers</a> 
                        <a class="collapse-item" href="tables.php"><i class="fa-solid fa-bag-shopping"></i>Produits</a> 
                       
                        
                        
                        
                        <a class="collapse-item " href="404.html"><i class="fa-solid fa-tags"></i>Offres</a>
                        <a class="collapse-item" href="blank.html"><i class="fa-solid fa-clipboard-list"></i>Forum</a>
                        <a class="collapse-item" href="tables-cmd.php"><i class="fa-solid fa-dollar-sign"></i>commandes</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="FEproduit.php">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span>Produits</span></a>
            </li>
            


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                            

                        
                                <!-- Counter - Messages -->
                            
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Table Produits</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Quantite</th>
                                            <th>CRUD</th>
                                            <th>QR</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Quantite</th>
                                            <th>CRUD</th>
                                            <th>QR</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                  foreach($listeProduit as $Produit){
                  ?>
                                        <tr>
                                        <td><?php echo $Produit['id']; ?></td>
                                        <td><?php echo $Produit['Nom']; ?></td>
                                        <td><?php echo $Produit['Prix']; ?></td>
                                        <td><?php echo $Produit['Quantite']; ?></td>
                                        
                                            <td><a href="modifierProduit.php?id=<?php echo $Produit['id']; ?>" class="btn btn-success btn-circle">
                                            <i class="fa-solid fa-pen"></i>
                  </a>
                                            

                                            <a href="supprimerProduit.php?id=<?php echo $Produit['id']; ?>" class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            </td>
                                            <td><?php $ProduitCQR->qrpr($Produit['id'],$Produit['Nom'],$Produit['Prix'],$Produit['Quantite']);?> </td>
                                            
                                        </tr>
                                        <?php } ?>

                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal fade" id="purchaseTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
          <div class="modal-content" >
            <div style="display: flex; flex-direction: column;">
                <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Informations de produit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body" style="display: flex;">
                    <form method ="POST" action="" >
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="Nom" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="Prix">Prix</label>
                        <input type="text" class="form-control" id="Prix" name="Prix" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Quantite">Quantite</label>
                      <input type="text" class="form-control"  id="Quantite" name="Quantite" >
                    </div>
                    
                   
                    <div class="form-row">
                      <div class="form-group col-md-9">
                      
                       
                       
                      </div>
                      
                      
                      <div style="display: flex; flex-direction: column;padding-left: 5px;width: 100%; ">
                       
                        <div style="display: flex; justify-content: space-around;">
                      <div class="form-group col-md-5" style="padding: 0;">
                       
                      </div>
                      <div class="form-group col-md-5" style="padding: 0;">
                        
                       
                      </div>
                    </div>  
                    </div>
                    </div>
                    <a id="err" style="color:red">
                    <?php echo $error; ?>
                   
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" onclick="verif();" name="submit" class="btn btn-primary">Confirmer</button>
                </div>
                </form> 
            </div>
                <img class="card-img-top" src="img/p1.png" alt="">
          </div>
         
        </div>
      </div>
      <div class="d-flex justify-content-end">
                            <small type="button" class="btn btn-lg  btn-primary" data-toggle="modal" data-target="#purchaseTicket">
                            <i class="fa-solid fa-plus"></i> Ajouter un Produit
                            </small>
                        </div>
                        <div class="modal fade" id="purchaseTicket2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            
          <div class="modal-content" >
            <div style="display: flex; flex-direction: column;">
                <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Informations de produit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <!--start here-->
                <div class="modal-body" style="display: flex;">
                    <form method ="POST" action="" >
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" name="Prix2" id="Prix"  value="<?php echo $produit['Prix']; ?>" hidden>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="Prix">Prix</label>
                        <input type="text" class="form-control" name="Quantite2" id="Quantite"  value="<?php echo $produit['Quantite']; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="Quantite">Quantite</label>
                      <input type="text" class="form-control" name="Nom2" id="Nom"  value="<?php echo $produit['Nom']; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="id">id</label>
                      <input type="text" class="form-control"  id="id2" name="id"value="<?php echo $produit['Nom']; ?>" >
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-9">
                      
                       
                       
                      </div>
                      
                      
                      <div style="display: flex; flex-direction: column;padding-left: 5px;width: 100%; ">
                       
                        <div style="display: flex; justify-content: space-around;">
                      <div class="form-group col-md-5" style="padding: 0;">
                       
                      </div>
                      <div class="form-group col-md-5" style="padding: 0;">
                        
                       
                      </div>
                    </div>  
                    </div>
                    </div>
                    
                   
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit"  name="submit" class="btn btn-primary">Confirmer</button>
                </div>
                </form> 
            </div>
                <img class="card-img-top" src="img/p1.png" alt="">
          </div>
         
        </div>
      </div>
                                    <!-- The Modal -->
      
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>