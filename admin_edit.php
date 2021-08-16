<?php

require 'connect.php';


if(isset($_POST['badili'])){

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $role = $_POST ['role'];
    $password = $_POST['password'];
    $info = $_POST['id'];


    $sql = "UPDATE user SET  fname='$firstname', lname='$lastname', email='$email',username='$username',role='$role',password='$password' WHERE user_id='$info'";

   
if(mysqli_query($db, $sql)){

    header("location:admin.php");

}
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IS-RMS | BADILI TAARIFA </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=BenchNine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Menu-Icon.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body id="page-top"  class="#bg-gradient-primary">
<div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>is-RMS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active active" href="admin.php"><i class="fa fa-home"></i><span>Nyumbani</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="logout.php"><i class="fas fa-sign-out-alt"></i>Toka</a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link active" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>

                            </li>
                            <ul class="navbar-nav flex-nowrap ms-auto">
                        <img class="default" src="assets\img\avatars\rms1.png" width="120px" height="75px">
                        </ul>
                        </ul>
                    </div>
                </nav>
        <body class="#bg-gradient-primary">
        <div class="container-fluid">
                    <h3 class="text-uppercase text-center text-dark mb-1" style="color: rgb(0,0,0);filter: blur(0px) contrast(149%);"><strong>ADMIN</strong></h3>
                    <div class="card shadow" style="border-radius: 4px;border-width: 0px;border-color: rgb(0,0,0);">
                        <div class="card-header py-3">
                        <h2 class="text-center text-dark m-0 fw-bold">IKUTI'S SMART RESIDENCIAL INFORMATION MANAGEMENT SYSTEM (IS-RMS)</h2>
                        </div>
                        <div class="card-body" style="color: rgb(0,0,0);background: var(--bs-table-striped-bg);">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                                </div>
                            </div>


    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4" style="color: rgb(0,0,0);filter: blur(0px) contrast(149%);">BADILI TAARIFA</h4>

                          </div>
                            <div><br></div>
                            <?php
                                        require 'connect.php';
                                        $user_id = $_GET['id'];
                                        $s = mysqli_query($db, "SELECT  * FROM user WHERE user_id='$user_id'");

                                        while($data = mysqli_fetch_array($s)){
                                         
                                            $firstname = $data['fname'];
                                            $lastname = $data['lname'];
                                            $email = $data['email'];
                                            $username = $data['username'];
                                            $role = $data['role'];
                                            $password = $data['password'];
                            ?>
                            <form class="user" method="POST" action="" id="form">
                                <div class="row mb-3">
                                   
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label" for="" style="color: rgb(0,0,0);">JINA LA KWANZA :</label>
                                        <input value ="<?php echo $data['fname']; ?>" class="border-dark shadow-lg form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="" style="color: rgb(0,0,0);">JINA LA MWISHO :</label>
                                        <input  value ="<?php echo $data['lname']; ?>" class="border-dark shadow-lg form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="" style="color: rgb(0,0,0);">BARUA PEPE :</label>
                                    <input  value ="<?php echo $data['email']; ?>" class="border-dark shadow-lg form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="row mb-3">

                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="form-label" for="" style="color: rgb(0,0,0);">JINA LA MTUMIAJI :</label>
                                    <input  value ="<?php echo $data['username']; ?>" class="border-dark shadow-lg form-control form-control-user" type="text" id="username" placeholder="Username" name="username" value="" required>
                                </div>

                                <div class="col-sm-6">
                                    <label class="form-label" for="" style="color: rgb(0,0,0);">JUKUMU :</label>
                                    <select value="<?php echo $data['role']; ?>" class="border-dark shadow-lg  border rounded-pill border-dark shadow-lg form-select form-select-lg" name="role" required >
                                            <optgroup class="text-dark" label="Select Role">
                                                <option value="Admin">Admin</option>
                                                <option value="Local Chairman">Mwenyekiti</option>
                                            </optgroup>
                                        </select>
                                </div>
                                </div>  
                                <div class="text-break" style="margin: 3px; display:none">
                                 <input type="text" name="id" value="<?php echo $_GET['id'] ?>">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="form-label" for="" style="color: rgb(0,0,0);">NENO SIRI:</label>
                                        <input value ="<?php echo $data['password']; ?>" class="border-dark shadow-lg form-control form-control-user" type="text" id="examplePasswordInput" placeholder="Password" name="password" required>
                                      </div>
                                     
                                <div class="col-sm-6">
                                
                                      <br>
                                   <button class="btn btn-primary d-block btn-user w-100 border-dark shadow-lg form-control form-control-user" type="submit" name="badili">Badili taarifa</button></div>
                                </div>
                                <?php
                                 }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    
</body>

</html>
