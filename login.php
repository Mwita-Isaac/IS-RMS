<?php
session_Start();

require 'connect.php';

if(isset($_POST['login'])){

$name = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM user WHERE username ='$name' AND password ='$pass'";
$result = $db->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {


    $role =  $row['role'];
    $name = $row['fname'];
    $id= $row['user_id'];
    $_SESSION['user_id'] = $id;
    $_SESSION['login'] = 'yes';
    $_SESSION['role'] = $role;


if($role=='Admin'){

    echo '

      <script>
      alert("Welcome '.$name.'!");

      function Redirect()
      {
          window.location="admin.php";
      }
      setTimeout("Redirect()", 1000);
    </script>


    ';



}
else if($role=='Local Chairman'){

    echo '

      <script>
      alert("Welcome '.$name.'!");

      function Redirect()
      {
          window.location="mtaa.php";
      }
      setTimeout("Redirect()", 1000);
    </script>


    ';

}

  }
}

else {

    echo '
    <script>
    alert("Wrong Username or Password");
    </script>
    ';

      }
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IS-RMS | LOGIN  </title>
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
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center" style="border-width: 5px;">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- <h4 class="text-dark mb-4" style="color: rgb(0,0,0);font-size: 36px;font-family: BenchNine, sans-serif;">IS-RMS</h4> -->
                                     <div class="text-left">
                                     <div class="text-left">
                                      <img class="default" src="assets\img\avatars\rms1.png" title="">
                                    </div>
                                    <br> <img class="default" src="assets\img\avatars\2.png" title="Court of arms">
                                     </div>
                                   
                                    
                                   
                                   
                                      </div>
                                      <div><br></div>
                                      <form class="user" method="POST" action="">
                                        <div class="mb-3"><input class="border-dark shadow-lg form-control form-control-user" type="username"  id="username" aria-describedby="" placeholder="Username" name="username" style="border-style: solid;" required></div>
                                        <div class="mb-3"><input class="border-dark shadow-lg form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password" required></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary shadow-lg d-block btn-user w-100" type="submit" name="login">Login</button>
                                        <hr>
                                        <!-- <div class="text-center"></div>
                                        <div class="text-center"><a class="small" href="reset.php">Forgot your password? Reset here!</a></div> -->
                                    </form>

                            </div>
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
