<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
               
                    <h3 class="text-primary"><i class="fa  me-2"></i>Midadcom</h3>
                
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Fatima zahra</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                   <div class="nav-item dropdown">
      
                    </div>
                    <a href="element.php" class="nav-item nav-link"><img  class="fa fa-tachometer-alt me-2" src="img/i.png" alt="" style="width: 40px; height: 40px;"></i>G.Commande</a>
                    <a href="form.php" class="nav-item nav-link"><img  class="fa fa-tachometer-alt me-2" src="img/pngtree-delivery-checklist-icon-for-your-project-png-image_1548703.jpg" alt="" style="width: 40px; height: 40px;"></i>G.Fournisseur</a>
                    <a href="table.php" class="nav-item nav-link"><img  class="fa fa-tachometer-alt me-2" src="img/stock.png" alt="" style="width: 40px; height: 40px;"></i>G.Stock</a>                   
                    <a href="livreur.php" class="nav-item nav-link"><img  class="fa fa-tachometer-alt me-2" src="img/pngtree-delivery-order-with-scooter-boy-vector-illustration-png-image_3462656.jpg" alt="" style="width: 40px; height: 40px;"></i>G.livraison</a>

                </div>
            </nav>
        </div>


        <div class="content">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa "></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
         
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Fatima zahra</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                         
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>

                            <?php

                if(isset($_POST["dispaly"])){
                include("Connection.php");
                $sql = "select*from client where Id_client='".$_POST["dispaly"]."'";
           
                $res = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_assoc($res)) {
                $idc= $row["Id_client"] ;
                $nomc= $row["Nom_Prenom"] ; 
                    $Adressec= $row["Adresse"];
                    $Telc=$row["Tél"];
                $Mailc= $row["Mail"]; 
                $typec= $row["type_client"];
                   
                }}
                ?>

            <?php
            include("Connection.php");
            if (isset($_POST['valider'])) {
                if(isset($_POST['nom'])){
                    if(!empty($_POST['nom'])){ 
                try {
                    $Nom = $_POST['nom'];
                    $Adresse=$_POST['adresse'];
                    $Tel=$_POST['tel'];
                    $Mail=$_POST['mail'];
                    $type_client = $_POST['type'];
                   
                    $sql = "Insert into client
                   ( `Nom_Prenom`, `Adresse`, `Tél`, `Mail`, `type_client`)
                    Values('$Nom','$Adresse','$Tel','$Mail','$type_client') ";
                   
                    if (mysqli_query($conn, $sql)) {
                        echo "ligne inserted successfully";
                    }
                } catch (Exception $e) {
                    echo "<script>alert('" . $e->getMessage() . "')</script>";
                }}}
            }

            
            ?>
            
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Supplier Form</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                <style>
                    .Container{
                        margin: 30px;
                    }
                   
                </style>
            </head>
            <body>
           
                <div class="Container mt-5">
                    <h2 class="text-center text-primary m-5">Gestion client</h2>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                
              <input type="hidden" <?php if(isset($idc)){echo "value='$idc'";} ?>  name="idc">
            <div class="form-group row">
                <label for="nom" class="col-sm-2 col-form-label" >Nom:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nom" name="nom" <?php if(isset($nomc)){
                                echo "value='$nomc'" ;}?>> 
                </div>
            </div>  
            <div class="form-group row">
                <label for="adresse" class="col-sm-2 col-form-label">Adresse:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="adresse" name="adresse" <?php if(isset($Adressec)){
                                echo "value='$Adressec'" ;}?>> 
                </div>
            </div>
            <div class="form-group row">
                <label for="tel" class="col-sm-2 col-form-label">Tel:</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="tel" name="tel" <?php if(isset($Telc)){
                                echo "value='$Telc'" ;}?>> 
                </div>
            </div>
            <div class="form-group row">
                <label for="mail" class="col-sm-2 col-form-label">Mail:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="mail" name="mail" <?php if(isset($Mailc)){
                                echo "value='$Mailc'" ;}?>> 
                </div>
            </div>
           
          <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label" >Type client:</label>
                <div class="col-sm-10">
                    <select class="col-sm-2 col-form" id="" name="type">
                        <option>Select a type_client</option>
                      <option value="individual" <?php if(isset($typec)){ if($typec =="individual"){
                                echo "selected" ;}}?>>Individual</option>
                      <option value="bussiness" <?php if(isset($typec)){if($typec =="bussniss"){
                                echo "selected" ;}}?>>bussiness</option>
                    </select>
                </div>
            </div>
            
                        <div class="form-group row">
                            <label for></label>
                            <br>
                            <style>
                
                                .container {
                                    margin-top: 30px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                  
                                }
                                .btn-container {
                                    margin: 10px;
                                  }
                                .btn-valider {
                                    background-color: #428bca;
                                    color: #fff;
                                    border: none;
                                    border-radius: 3px;
                                    padding: 10px 20px;
                                    font-size: 18px;
                                    cursor: pointer;
                                    transition: background-color 0.3s;
                                    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
                                    overflow: hidden;
                                    position: relative;
                                }
                        
                                .btn-valider:hover {
                                    background-color: #3071a9;
                                }
                        
                                .btn-valider:hover:before {
                                    width: 300px;
                                    height: 300px;
                                    opacity: 1;
                                }
                        .btn-valider{
                            margin: 10px;
                        }
                                
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <button type="submit" name="valider" class="btn btn-valider">Valider</button>    
                                <button type="submit"  name="modifier" class="btn btn-valider">Modifier</button>
                               
                        
                            </div>
                        
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        </body>
                        <br> 
                        <?php
    include("Connection.php");
    if(isset($_POST["supp"]))
    {
        $sql3= "Delete from client where Id_client=".$_POST["supp"];
            
                        if (mysqli_query($conn,$sql3) ) {
                            echo "Row deleted successfully";
                        } 
                        
    }
    
    ?>   
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <style>
                .container {
                    margin-top: 30px;
                }
                </style>
                <br>
                <?php
            include("Connection.php");
            if (isset($_POST['modifier'])) {
                try {
                            $Nom = $_POST['nom'];
                            $Adresse=$_POST['adresse'];
                            $Tel=$_POST['tel'];
                            $Mail=$_POST['mail'];
                            $type_client = $_POST['type'];
                            
$sql="UPDATE `client` SET `Nom_Prenom`='$Nom',`Adresse`='$Adresse',`Tél`='$Tel',`Mail`='$Mail',`type_client`='$type_client' WHERE Id_client=".$_POST["idc"]."'";                   
                    if (mysqli_query($conn, $sql)) {
                        echo "<script>alert('ligne Updated successfully')</script>";
                    }
                
                } catch (Exception $e) {
                    echo "<script>alert('" . $e->getMessage() . "')</script>";
                }
            }
           
            
            ?>
                <body>
                            <div class="container">
                                <div class="container-fluid pt-4 px-4">
                                    <div class="bg-light text-center rounded p-4">
                                    
                                        <div class="table-responsive">
                                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                    <tr class="text-dark">
                                                        
                                    
                                        
                                            <th>Id client</th>
                                            <th>Nom_Prenom</th>
                                            <th>Adresse</th>
                                            <th>Tél</th>
                                            <th>Mail</th>
                                            <th>type_client</th>
                                            <th>Modifier</th>
                                            <th>supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                     <?php

                                include("Connection.php");
                                $sql = "select*from client";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo "<tr ><td>". $row["Id_client"] . "</td><td>" . $row["Nom_Prenom"] . 
                                    "</td><td>" . $row["Adresse"]. "</td><td>" . $row["Tél"]. 
                                    "</td><td>" . $row["Mail"]. "</td><td>" . $row["type_client"].
                                    "</td><td><button type='submit' name='dispaly' value='".$row["Id_client"]."'>selectioner pour modifier</button>". 
                                      "</td><td><button type='submit' name='supp' value='".$row["Id_client"]."'>supprimer</button></td></tr>";"";
                                }  
                                ?>
                                
                            
                              
                                    </tbody>
                                </table>
                            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="https://midadcom.ma/">Midadcom.ma</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By Fatima zahra
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>