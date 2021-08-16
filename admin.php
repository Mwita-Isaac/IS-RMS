<?php
require 'connect.php';
session_Start();
//$_SESSION['userid'];
$login = $_SESSION['login'];
if(!isset($login)){
header("location:login.php");
}
$role = $_SESSION['role'];
if($role!='Admin'){

    echo '

      <script>

      function Redirect()
      {
          window.location="login.php";
      }
      setTimeout("Redirect()", 1000);
    </script>

    ';
}

    ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IS-RMS | ADMIN </title>
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

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>is-RMS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="ongeza_acc.php"><i class="fas fa-user-circle" ></i><span>Ongeza akaunti</span></a></li>
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
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <ul class="navbar-nav flex-nowrap ms-auto">
                        <img class="default" src="assets\img\avatars\rms1.png" width="120px" height="75px">
                        </ul>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-uppercase text-center text-dark mb-1" style="color: rgb(0,0,0);filter: blur(0px) contrast(149%);"><strong>ADMIN</strong></h3>
                    <div class="card shadow" style="border-radius: 12px;border-width: 1px;border-color: rgb(0,0,0);">
                        <div class="card-header py-3">
                        <h2 class="text-center text-dark m-0 fw-bold">IKUTI'S SMART RESIDENCIAL INFORMATION MANAGEMENT SYSTEM (IS-RMS)</h2>
                        </div>
                        <div class="card-body" style="color: rgb(0,0,0);background: var(--bs-table-striped-bg);">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">
                                        <tr class ="text-centre">
                                            <th class="text-centre">JINA LA KWANZA</th>
                                            <th class="text-centre">JINA LA MWISHO</th>
                                            <th class="text-centre">BARUA PEPE</th>
                                            <th class="text-centre">JINA LA MTUMIAJI</th>
                                            <th class="text-centre">JUKUMU</th>
                                            <th class="text-centre">NENOSIRI</th>
                                            <th class="text-centre">KITENDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php
                                        require 'connect.php';
                                        $s = mysqli_query($db, "SELECT  * FROM user");

                                        while($data = mysqli_fetch_array($s))

                                          {
                                        ?>
                                            <td><?php echo $data['fname']; ?></td>
                                            <td class="text-justify"><?php echo $data['lname']; ?></td>
                                            <td class="text-justify"><?php echo $data['email']; ?></td>
                                            <td class="text-justify"><?php echo $data['username']; ?></td>
                                            <td class="text-justify"><?php echo $data['role']; ?></td>
                                            <td class="text-justify"><?php echo $data['password']; ?></td>
                                            <td>
                                                <div class="text-justify">
                                                <a href="admin_edit.php?id=<?php echo $data['user_id'];?>" title="EDIT" class="btn btn-primary btn-lg btn-icon-split" data-bss-hover-animate="tada" style="margin: 4px;background: var(--bs-blue);text-shadow: 0px 0px;">
                                                    <span class="icon" style="height: 40px;width: 49.5px;">
                                                        <i class="fas fa-user-edit" style="width: 25px;height: 15px;"></i>
                                                    </span>
                                                </a>
                                                <a href="delete_acc.php?id=<?php echo $data['user_id'];?>" title="DELETE" class="btn btn-danger btn-lg btn-icon-split" data-bss-hover-animate="tada" role="button" style="margin: 4px;">
                                                    <span class="text-white icon" style="height: 40px;">
                                                      <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                          }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
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
