<?php
require 'connect.php';
session_Start();
//$_SESSION['userid'];
$login = $_SESSION['login'];
if(!isset($login)){
header("location:login.php");
}
$role = $_SESSION['role'];
if($role!='Local Chairman'){

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
    <title>IS-RMS | NYUMBANI</title>
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
                    <li class="nav-item"><a class="nav-link active active" href="mtaa.php"><i class="fa fa-home"></i><span>Nyumbani</span></a></li>
                   <li class="nav-item"><a class="nav-link active" href="addkaya.php"><i class="fas fa-table"></i><span>Ongeza Makazi</span></a></li>
                   <!-- <li class="nav-item"><a class="nav-link active" href="change.php"><i class="fas fa-table"></i><span>Badili Nenosiri</span></a></li> -->
                   <li class="nav-item"><a class="nav-link active" href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Toka</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-md-5 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" >
                            <div class="input-group">
                                <input class="bg-light form-control border-0 small" type="text" placeholder="Tafuta hapa....." name="search">
                                <button class="btn btn-primary py-0" type="submit" style="background: rgb(78, 115, 223);" name="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                        <img class="default" src="assets\img\avatars\rms1.png" width="120px" height="75px">
                        </ul>
                    </div>
                </nav>

               <div id="datas" class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-center text-white border rounded mb-0" style="color: rgb(0,0,0);background: #4e73df;width: 115.047px;"></h3><a class="btn btn-primary" role="button" href="addkaya.php"><i class="fa fa-plus"></i>&nbsp; Ongeza Makazi</a>
                    </div>
                    <div class="card shadow" style="border-radius: 12px;">
                        <div class="card-header py-3" style="background: var(--bs-white);">
                        <h2 class="text-center text-dark m-0 fw-bold" style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">IKUTI'S SMART RESIDENCIAL INFORMATION MANAGEMENT SYSTEM (IS-RMS)</h2>
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
                                        <tr>

                                            <th><br><strong>S/No</strong><br></th>
                                            <th class="text-center"><br>NAMBARI YA NYUMBA<br></th>
                                            <th class="text-center"><br>JINA MAARUFU<br></th>
                                            <th class="text-center"><br>KITENDO<br></th>
                                            <th class="text-center">TAZAMA</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">
                                        <tr style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">
                                        <?php
                                        require 'connect.php';
                                        $s = mysqli_query($db, "SELECT  * FROM data");
                                        $num = 1;

                                        while($data = mysqli_fetch_array($s))

                                            {
                                        ?>

                                            <td class=""><?php echo $num++; ?></td>
                                            <td class="text-center"><?php echo $data['nyumba_no']; ?></td>
                                            <td class="text-center"><?php echo mb_strtoupper($data['maarufu']); ?></td>
                                            <td class="text-center">
                                              <div>
                                              <a href="mtaa_edit.php?id=<?php echo $data['data_id'];?>" title="HARIRI" class="btn btn-primary btn-lg btn-icon-split" data-bss-hover-animate="" style="margin: 4px;background: var(--bs-blue);text-shadow: 0px 0px;">
                                                    <span class="icon" style="height: 40px;width: 49.5px;">
                                                        <i class="fas fa-user-edit" style="width: 25px;height: 15px;"></i>
                                                    </span>
                                                </a>
                                                <a href="delete_kaya.php?id=<?php echo $data['data_id'];?>" title="FUTA" class="btn btn-danger btn-lg btn-icon-split" data-bss-hover-animate="" role="button" style="margin: 4px;">
                                                    <span class="text-white icon" style="height: 40px;">
                                                      <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                </a>
                                                </div>
                                            </td>
                                            <td class="text-center"><b><a href="kaya1.php?id=<?php echo $data['data_id']; ?>" style="text-decoration:none"><span style="color: #fc0339;">TAZAMA </span></a></b></td>
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
                <?php
                if(isset($_POST['submit'])){
                    echo "<script>document.getElementById('datas').style.display = 'none';</script>";
                ?>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">

                    </div>
                    <div class="card shadow" style="border-radius: 12px;">
                        <div class="card-header py-3">
                        <h2 class="text-center text-dark m-0 fw-bold" style="color: rgb(0,0,0);filter: blur(0px) contrast(149%);">MATOKEO</h2>
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
                                        <tr>

                                            <th><br><strong>S/No</strong><br></th>
                                            <th class="text-center"><br>NAMBARI YA NYUMBA<br></th>
                                            <th class="text-center"><br>JINA MAARUFU<br></th>
                                            <th class="text-center"><br>KITENDO<br></th>
                                            <th class="text-center">TAZAMA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $search = $_POST['search'];
                                        $sql =  mysqli_query($db,"SELECT * FROM data WHERE maarufu LIKE '%$search%' OR nyumba_no LIKE '%$search%'");
                                        $num = 1;
                                            if(mysqli_num_rows($sql)>0){
                                                 while($g = mysqli_fetch_array($sql)) {

                                        ?>
                                        <tr style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">
                                            <td> <?php echo $num++;  ?> </td>
                                            <td class="text-center"><?php echo $g['nyumba_no']; ?></td>
                                            <td class="text-center"><?php echo mb_strtoupper($g['maarufu']); ?></td>
                                            <td class="text-center">
                                              <div>
                                              <a href="mtaa_edit.php?id=<?php echo $g['data_id'];?>" title="HARIRI" class="btn btn-primary btn-lg btn-icon-split" data-bss-hover-animate="tada" style="margin: 4px;background: var(--bs-blue);text-shadow: 0px 0px;">
                                                    <span class="icon" style="height: 40px;width: 49.5px;">
                                                        <i class="fas fa-user-edit" style="width: 25px;height: 15px;"></i>
                                                    </span>
                                                </a>

                                                <a href="delete_kaya.php?id=<?php echo $g['data_id'];?>" title="FUTA" class="btn btn-danger btn-lg btn-icon-split" data-bss-hover-animate="tada" role="button" style="margin: 4px;">
                                                    <span class="text-white icon" style="height: 40px;">
                                                      <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                </a>

                                                </div>
                                            </td>
                                            <td class="text-center"><a href="kaya1.php?id=<?php echo $g['data_id']; ?>" style="text-decoration:none"><span style="color: #fc0339;"><b>TAZAMA</b></span></a></td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                             else {
                                                echo   '<script>alert("No results found for  '."'" .$search. "'".' ");</script>';

                                            }
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
