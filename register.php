<?php
require 'connect.php';

if(isset($_POST['register'])){

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $role = $_POST ['role'];
    $password = $_POST['password']; 
    $password2 = $_POST['password2'];

    if($password==$password2){

        $sql = "SELECT username FROM user WHERE username='$username'";
        $result = mysqli_query($db, $sql);
        if(mysqli_num_rows($result)>0){
            echo 
            "<script>alert('Username Exists!');</script>";
        }else{
            $sql = "INSERT INTO user (fname, lname, email, username, role, password) VALUES (' $firstname', '$lastname','$email', '$username','$role','$password')";
            if(mysqli_query($db, $sql)){
                echo "<script>alert('Registration Completed!');</script>";
                header("location:login.php");
            }
        }
    } else{

?>

<script>
alert("Passwords do not match!");
</script>
<?php

}

}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IS-RMS | REGISTER </title>
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

<body class="#bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <!-- <h4 class="text-dark mb-4" style="font-size: 36px;color: rgb(1,1,1);">REGISTER&nbsp;</h4> -->
                                <div class="text-left">
                                <div class="text-left">
                                      <img class="default" src="assets\img\avatars\rms1.png" title="">
                                    </div>
                                    <br>
                                      <img class="default" src="assets\img\avatars\2.png" title="Court of arms">
                                     </div>
                                   
                                   

                            </div>
                            <div><br></div>
                            <form class="user" method="POST" action="" id="form">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="border-dark shadow-lg form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name" required></div>
                                    <div class="col-sm-6"><input class="border-dark shadow-lg form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="last_name" required></div>
                                </div>
                                <div class="mb-3"><input class="border-dark shadow-lg form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email" required></div>
                                <div class="row mb-3">

                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="border-dark shadow-lg form-control form-control-user" type="text" id="username" placeholder="Username" name="username" value="" required></div>

                                <div class="col-sm-6"><select class="border-dark shadow-lg  border rounded-pill border-dark shadow-lg form-select form-select-lg" name="role" required>
                                            <optgroup class="text-dark" label="Select Role">
                                                <option value="Admin">Admin</option>
                                                <option value="Local Chairman">Mwenyekiti</option>
                                            </optgroup>
                                        </select></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="border-dark shadow-lg form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password" required></div>
                                    <div class="col-sm-6"><input class="border-dark shadow-lg form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password2" required></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit" name="register">Register Account</button>
                            </form>
                            <div class="text-center"></div>
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
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
