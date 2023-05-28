<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 30px;
        }

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

        .btn-valider {
            margin: 10px;
        }
    </style>
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
                    <h3 class="text-primary"><i class="fa fa- me-2"></i>Midadcom</h3>
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
            include("Connection.php");
            if (isset($_POST['valider'])) {
                try {
                    $Nom = $_POST['nom'];
                    $type_produit = $_POST['type'];
                    $Date = $_POST['date'];
                    $Stock_Min = $_POST['stockmin'];
                    $Prix = $_POST['prix'];
                    $Qte_entre = $_POST['qtee'];
                    $Qte_sortie = $_POST['qtes'];
                    $Reste = (int)$Qte_entre-(int)$Qte_sortie;
                    
                    $fournisour = $_POST['fournisseur'];
                    $sql = "Insert into produit
                   ( `Nom`, `Prix`, `Qte_entrée`, `Qte_Sortie`, `Id_fournisseur`, `type_produit`, `Stock_Min`, `Date`,`Reste`)
                    Values('$Nom','$Prix ','$Qte_entre','$Qte_sortie','$fournisour','$type_produit','$Stock_Min','$Date','$Reste') ";

                    if (mysqli_query($conn, $sql)) {
                        echo "ligne inserted successfully";
                    }
                } catch (Exception $e) {
                    echo "<script>alert('" . $e->getMessage() . "')</script>";
                }

                
              if (isset($_POST['supprimer'])) {
                $sql1 = "Delete from produit where Id_produit=$idp";
        
                    if ($conn->query($sql1) === TRUE) {
                        echo "Row deleted successfully";
                    } else {
                        echo "Error deleting row: " ;
                    }
                    
                    
                    $conn->close();
            }}
            ?>
           

<?php

if(isset($_POST["dispaly"])){
include("Connection.php");
$typep="";
$sql = "select*from produit where Id_produit='".$_POST["dispaly"]."'";
$res = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($res)) {
   $idp= $row["Id_produit"] ;
   $nomp= $row["Nom"] ; 
    $prixp= $row["Prix"];
    $qteep=$row["Qte_entrée"];
   $qtesp= $row["Qte_Sortie"]; 
   $restep= $row["Reste"];
     $idfournisseurp= $row["Id_fournisseur"];
    
    $typep=  $row["type_produit"];
    $stockmp=$row["Stock_Min"];
    $datep= $row["Date"];
      
}}
?>

            <div class="Container m-5">
                <h2 class="text-center text-primary m-5" >Gestion Stock</h2>
                <form method="Post" action="">
<input type="hidden" name="idp" <?php if(isset($idp)){
                                echo "value='$idp'" ;}?>>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label">Nom:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control " id="nom" name="nom" <?php if(isset($nomp)){
                                echo "value='$nomp'" ;}?>> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fournisseur" class="col-sm-2 col-form-label">Type Produit:</label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 col-form" id="" name="type">
                                <option>Select type</option>
                     
                             <option value="A4 80G" <?php if(isset($typep)){ if($typep=="A4 80G"){
                                echo "selected" ;}}?> >Papier A4 80G</option>


                                <option value="A4 90G" <?php    if(isset($typep)){ if($typep=="A4 90G"){
                                echo "selected" ;}}?>>Papier A4 90G</option>
                                <option value="A4 115G" <?php if(isset($typep)){ if($typep=="A4 115G"){
                                echo "selected" ;}}?>>Papier A4 115G</option>
                                <option value="A4 135G  (B)"<?php if(isset($typep)){ if($typep=="A4 135G  (B)"){
                                echo "selected" ;}}?>>Papier A4 135G (B)</option>
                                <option value="A4 135G  (M)" <?php if(isset($typep)){ if($typep=="A4 135G  (M)"){
                                echo "selected" ;}}?>>Papier A4 135G (M)</option>
                                <option value="A4 200G" <?php  if(isset($typep)){if($typep=="A4 200G"){
                                echo "selected" ;}}?>>Papier A4 200G</option>
                                <option value="A4 250G" <?php  if(isset($typep)){if($typep=="A4 250G"){
                                echo "selected" ;}}?>>Papier A4 250G</option>
                                <option value="A4 300G" <?php  if(isset($typep)){if($typep=="A4 300G"){
                                echo "selected" ;}}?>>Papier A4 300G</option>
                                <option value="A4 350G" <?php  if(isset($typep)){if($typep=="A4 350G"){
                                echo "selected" ;}}?>>Papier A4 350G</option>
                                <option value="A4 Sublimation" <?php  if(isset($typep)){if($typep=="A4 Sublimation"){
                                echo "selected" ;}}?>>Papier A4 Sublimation</option>
                                <option value="A4 Adhésif" <?php  if(isset($typep)){if($typep=="A4 Adhésif"){
                                echo "selected" ;}}?>>Papier A4 Adhésif</option>
                                <option value="A3 80G" <?php  if(isset($typep)){if($typep=="A3 80G"){
                                echo "selected" ;}}?>>Papier A3 80G</option>
                                <option value="A3 90G" <?php  if(isset($typep)){if($typep=="A3 90G"){
                                echo "selected" ;}}?>>Papier A3 90G</option>
                                <option value="A3 115G" <?php  if(isset($typep)){if($typep=="A3 115G"){
                                echo "selected" ;}}?>>Papier A3 115G</option>
                                <option value="A3 135G" <?php  if(isset($typep)){if($typep=="A3 135G"){
                                echo "selected" ;}}?>>Papier A3 135G</option>
                                <option value="A3 200G" <?php  if(isset($typep)){if($typep=="A3 200G"){
                                echo "selected" ;}}?>>Papier A3 200G</option>
                                <option value="A3 250G" <?php  if(isset($typep)){if($typep=="A3 250G"){
                                echo "selected" ;}}?>>Papier A3 250G</option>
                                <option value="A3 300G (M)" <?php  if(isset($typep)){if($typep=="A3 300G (M)"){
                                echo "selected" ;}}?>>Papier A3 300G (M)</option>
                                <option value="A3 300G (B)" <?php  if(isset($typep)){if($typep=="A3 300G (B)"){
                                echo "selected" ;}}?>>Papier A3 300G (B)</option>
                                <option value="A3 350G" <?php  if(isset($typep)){if($typep=="A3 350G"){
                                echo "selected" ;}}?>>Papier A3 350G</option>
                                <option value="A3 Adhésif" <?php  if(isset($typep)){if($typep=="A3 Adhésif"){
                                echo "selected" ;}}?>>Papier A3 Adhésif</option>
                                <option value="A3 Multitransp" <?php  if(isset($typep)){if($typep=="A3 Multitransp"){
                                echo "selected" ;}}?>>Papier A3 Multitransp</option>
                                <option value="duplex 450G 72x102" <?php  if(isset($typep)){if($typep=="duplex 450G 72x102"){
                                echo "selected" ;}}?>>duplex 450G 72x102</option>
                               <option value="Boite rectangulaire" <?php  if(isset($typep)){if($typep=="Boite rectangulaire"){
                                echo "selected" ;}}?>>Boite rectangulaire 25*11*5</option>
                               <option value="Boite rectangulaire" <?php  if(isset($typep)){if($typep=="Boite rectangulaire"){
                                echo "selected" ;}}?>>Boite rectangulaire 10.5*7.5*5</option>
                                <option value="Boite rectangulaire" <?php  if(isset($typep)){if($typep=="Boite rectangulaire"){
                                echo "selected" ;}}?>>Boite rectangulaire 25*16*4.5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fournisseur" class="col-sm-2 col-form-label">Fournisseur:</label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 col-form" id="" name="fournisseur">
                                <option>Select a fournisseur</option>
                                <?php

                                include("Connection.php");
                                $sql = "select*from fournisseur";
                                $res = mysqli_query($conn, $sql);
                                $t="";
                                while ($row = mysqli_fetch_assoc($res)) {
                                    if($row["Id_fournisseur"]==$idfournisseurp){
                                        $t="selected";
                                    }
                                    echo "<option value='" . $row["Id_fournisseur"] . "' $t>" . $row["Nom_Prenom"] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <a href="form.php" class="btn btn-link">Nouveau Fournisseur</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="date" name="date" <?php if(isset($datep)){
                                echo "value='$datep'" ;}?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stock_min" class="col-sm-2 col-form-label" >Stock Min:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stock_min" name="stockmin" <?php if(isset($stockmp)){
                                echo "value='$stockmp'" ;}?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Qte_entre" class="col-sm-2 col-form-label">Qte Entrée:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="qtee" name="qtee" <?php if(isset($qteep)){
                                echo "value='$qteep'" ;}?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Qte_sortie" class="col-sm-2 col-form-label">Qte Sortie:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Qte_sortie" name="qtes" <?php if(isset($qtesp)){
                                echo "value='$qtesp'" ;}?>>
                        </div>
                        <?php
            include("Connection.php");
            if (isset($_POST['modifier'])) {
                try {
           
                    
                    $Nom = $_POST['nom'];
                    $type_produit = $_POST['type'];
                    $Date = $_POST['date'];
                    $Stock_Min = $_POST['stockmin'];
                    $Prix = $_POST['prix'];
                    $Qte_entre = $_POST['qtee'];
                    $Qte_sortie = $_POST['qtes'];
                    $Reste = $_POST['reste'];
                    $fournisour = $_POST['fournisseur'];

                    $sql = "Update produit set Nom='$Nom',Prix='$Prix',Qte_entrée='$Qte_entre',Qte_Sortie='$Qte_sortie', 
                    Reste=Reste+Qte_entrée-Qte_Sortie,Id_fournisseur='$fournisour',type_produit='$type_produit',Stock_Min='$Stock_Min',Date='$Date'
                    where Id_produit='".$_POST["idp"]."'";




                  
                    if (mysqli_query($conn, $sql)) {
                        echo "ligne updated successfully";
                    }
                
                } catch (Exception $e) {
                    echo "<script>alert('" . $e->getMessage() . "')</script>";
                }
            }
            
            ?>
                    </div>
                    <div class="form-group row">
                        <label for="Qte_entre" class="col-sm-2 col-form-label">Reste:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Qte_entre" name="reste" <?php if(isset($restep)){
                                echo "value='$restep'" ;}?>>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prix" class="col-sm-2 col-form-label">Prix:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prix" name="prix" <?php if(isset($prixp)){
                                echo "value='$prixp'" ;}?>>
                        </div>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                    <div class="container">
                        <button type="submit" name="valider" class="btn btn-valider">Valider</button>
                        <button type="submit" name="modifier" class="btn btn-valider">Modifier</button>
                

                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                    <br>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                    <style>
                                .container {
                                    margin-top: 30px;
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <div class="container-fluid pt-4 px-4">
                                    <div class="bg-light text-center rounded p-4">
                                        <div class="table-responsive">
                                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                    <tr class="text-dark">
                                                        
                                    
                                        
                                            <th>Id produit</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Qte entree</th>
                                            <th>Qte sortie</th>
                                            <th>Reste</th>
                                            <th>id fournisseur</th>
                                            <th>type Produit</th>
                                            <th>Stock min</th>
                                            <th>Date</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <?php
            include("Connection.php");
    if(isset($_POST["supp"]))
    {
        $sql3= "Delete from produit where Id_produit=".$_POST["supp"];
            
                        if (mysqli_query($conn,$sql3) ) {
                            echo "Row deleted successfully";
                        } 
                        
    }
    
    ?>
                                    <tbody>



                                     <?php

                                include("Connection.php");
                                $sql = "select*from produit";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo "<tr ><td>". $row["Id_produit"] . "</td><td>" . $row["Nom"] . 
                                    "</td><td>" . $row["Prix"]. "</td><td>" . $row["Qte_entrée"]. 
                                    "</td><td>" . $row["Qte_Sortie"]. "</td><td>" . $row["Reste"].
                                     "</td><td>" . $row["Id_fournisseur"]. "</td><td>" .
                                      $row["type_produit"]. "</td><td>" . $row["Stock_Min"]. 
                                      "</td><td>" . $row["Date"].
                                      "</td><td><button type='submit' name='dispaly' value='".$row["Id_produit"]."'>selectioner pour modifier</button>". 
                                      "</td><td><button type='submit' name='supp' value='".$row["Id_produit"]."'>supprimer</button></td></tr>";"";
                                }
                                ?>
                                 <?php

if(isset($_POST["dispaly"])){
include("Connection.php");
$sql = "select*from produit where Id_produit='".$_POST["dispaly"]."'";
$res = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($res)) {
   $idp= $row["Id_produit"] ;
   $nomp= $row["Nom"] ; 
    $prixp= $row["Prix"];
    $qteep=$row["Qte_entrée"];
   $qtesp= $row["Qte_Sortie"]; 
   $restep= $row["Reste"];
     $idfournisseurp= $row["Id_fournisseur"];
    
    $typep=  $row["type_produit"];
    $stockmp=$row["Stock_Min"];
    $datep= $row["Date"];
      
}}
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