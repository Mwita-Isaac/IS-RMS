<?php

require 'connect.php';


if(isset($_POST['ongeza'])){

 $nambali = $_POST['nambali'];
 $jina = $_POST['jina'];

 $sql = "SELECT nyumba_no FROM data WHERE nyumba_no=' $nambali'";
 $result = mysqli_query($db, $sql);
 if(mysqli_num_rows($result)>0){
     echo 
     '<script>alert("Nambari '."'".$nambali."'".' tayari ipo!");</script>';}                      

    else{
    $sql = "INSERT INTO data (nyumba_no, maarufu) VALUES ('$nambali','$jina')";

if(mysqli_query($db, $sql)){

    header("location:mtaa.php");
}

    }
        } 
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IS-RMS | ONGEZA MAKAZI</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=BenchNine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Menu-Icon.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>is-RMS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="mtaa.php"><i class="fa fa-home"></i><span>Nyumbani</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="addkaya.php"><i class="fas fa-table"></i><span>Ongeza Makazi</span></a></li>  
                   <li class="nav-item"><a class="nav-link active" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Toka</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                       
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <img class="default" src="assets\img\avatars\rms1.png" width="120px" height="75px">
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    
                    <div class="card shadow" style="border-radius: 12px;"></div>
                </div>
                <div class="container">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                    <h2 class="text-center text-dark mb-4" style="color: rgb(0,0,0);filter: blur(0px) contrast(149%);"><strong>ONGEZA MAKAZI</strong></h2>
                    <form class="text-center" data-bss-hover-animate="#bounce" style="text-align: left;" method="post">
                        <div class="d-inline-flex mb-3">
                            <div style="margin: 3px;"><label class="form-label" for="" style="color: rgb(0,0,0);margin: 3px;">NAMBARI YA NYUMBA:</label>
                            <input class="form-control border-dark shadow-lg  form-control-lg" type="text" id="" style="width: 500px;margin: 3px;" name="nambali" required autofocus></div>
                            <div class="text-break" style="margin: 3px;"><label class="form-label" for="" style="color: rgb(0,0,0);">JINA MAARUFU</label>
                            <input class="form-control  border-dark shadow-lg form-control-lg" type="text" id="" style="width: 500px;" name="jina" required ></div>
                        </div>
                        <div class="text-center border rounded mb-3" style="width: 371px;padding: -3px; ">
                            <div class="row" style="width: 500px; ">
                                <div class="col text-center">
                                
                                    <button class="btn btn-primary btn-lg d-block w-100" type="submit" style="text-align: center; " name="ongeza">ONGEZA MAKAZI</button>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="bg-dark sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © IS - RMS 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
