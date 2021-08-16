<?php

require 'connect.php';
$namba=null;
$kaya_id=null;


if(isset($_POST['ongeza'])){

 $info = $_POST['id'];
 $chagua = $_POST['chagua'];
 $jina = $_POST['jina'];
 $hadhi = $_POST['hadhi'];
 $date = $_POST['date'];
 $act = $_POST['act'];
 $simu = $_POST['simu'];
 $email = $_POST['email'];
 $kayas = $_POST['kaya'];


$sql = "UPDATE info SET rt_type='$chagua', jina='$jina', hadhi='$hadhi', date='$date', act='$act', simu='$simu', email='$email' WHERE id='$info'";

if(mysqli_query($db, $sql)){
    header("location:kaya1.php?id=".$kayas);
}else{
    echo "fail".$info;
}
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IS-RMS | BADILI KAYA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Menu-Icon.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">

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
        </nav> </nav>
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
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                       
                    </div>
                    <div class="card shadow" style="border-radius: 12px;">
                        <div class="card-header py-3">
                            <h2 class="text-center text-dark m-0 fw-bold" style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">IKUTI'S SMART RESIDENCIAL INFORMATION MANAGEMENT SYSTEM (IS-RMS)</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <?php
                                        require 'connect.php';
                                        $data_id = $_GET['id'];
                                        $s = mysqli_query($db, "SELECT  * FROM data WHERE data_id='$data_id'");

                                        while($data = mysqli_fetch_array($s)){
                                          $namba = $data['nyumba_no'];
                                          $kaya_id = $data['data_id'];
                                    ?>
                                    <tr>
                                    <th class="table-dark text-center">NAMBARI YA MAKAZI  :  <span style="color: #03f0fc;"><?php echo$data['nyumba_no']; ?></span></th>
                                        <th class="table-dark text-center">JINA MAARUFU  :  <span style="color: #03f0fc;"><?php echo $data['maarufu']; ?></span></th>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                </tbody>
                            </table>

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
                                            <th class="text-center">S/No</th>
                                            <th class="text-center">NAMBARI YA MKAZI</th>
                                            <th class="text-center">AINA YA MKAZI</th>
                                            <th class="text-center">JINA LA MKAZI</th>
                                            <th class="text-center">HADHI YA MKAZI</th>
                                            <th class="text-center">TAREHE YA KUZALIWA</th>
                                            <th class="text-center">SHUGHULI YA KIJAMII</th>
                                            <th class="text-center">NAMBARI YA SIMU</th>
                                            <th class="text-center">BARUA PEPE</th>
                                            <th class="text-center">KITENDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require 'connect.php';
                                        $d = mysqli_query($db, "SELECT  * FROM info INNER JOIN data ON data.data_id=info.kaya_id WHERE kaya_id='$data_id'");
                                        $num = 1;

                                        while($g = mysqli_fetch_array($d))

                                    {
                                    ?>

                                        <tr style="color: rgb(0,0,0);background: var(--bs-light);filter: blur(0px) contrast(149%);">

                                            <td class="text-center"><?php echo $num; ?></td>
                                            <td class="text-center"><strong>IKUTI/<?php echo $g['nyumba_no'];?>-<?php echo $num++; ?></strong></td>
                                            <td class="text-center"><?php echo $g['rt_type']; ?></td>
                                            <td class="text-center"><?php echo $g['jina']; ?></td>
                                            <td class="text-center"><?php echo $g['hadhi']; ?></td>
                                            <td class="text-center"><?php echo $g['date']; ?></td>
                                            <td class="text-center"><?php echo $g['act']; ?></td>
                                            <td class="text-center"><?php echo $g['simu']; ?></td>
                                            <td class="text-center"><?php echo $g['email']; ?></td>
                                            <td>
                                                <div>
                                                <a href="kaya_edit.php?info=<?php echo $g['id'];?>&id=<?php echo $_GET['id'];?>" title="HARIRI" class="btn btn-primary btn-lg btn-icon-split" data-bss-hover-animate="tada" type="reset" style="margin: 4px;background: var(--bs-blue);text-shadow: 0px 0px;">
                                                    <span class="icon" style="height: 40px;width: 49.5px;">
                                                      <i class="fas fa-user-edit" style="width: 25px;height: 15px;"></i>
                                                    </span>
                                                  </a>
                                                  <a href="delete_user.php?id=<?php echo $g['id'];?>&page=<?php echo $_GET['id'];?>" title="FUTA" class="btn btn-danger btn-lg btn-icon-split" data-bss-hover-animate="tada" role="button" style="margin: 4px;">
                                                    <span class="text-white icon" style="height: 40px;">
                                                      <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                  </a>
                                                  <!-- <button title="PAKUA" class="btn btn-danger btn-lg btn-icon-split" data-bss-hover-animate="tada" type="submit" style="margin: 4px;background: rgb(0,133,133);border-style: hidden;">
                                                    <span class="text-white icon" style="height: 40px;border-color: rgb(255,255,255);">
                                                      <i class="fas fa-download"></i>
                                                    </span>
                                                  </button> -->
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
            <br>
            <br>
            <br>

            <div id="form_edit" class="container">
              <?php
              $info = $_GET['info'];
              $d = mysqli_query($db, "SELECT * FROM info WHERE id='$info'");
              while($g = mysqli_fetch_array($d)){
               ?>
                <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                <h3 class="text-center text-dark mb-4" style="color: rgb(0,0,0);filter: blur(0px) contrast(149%);"><strong>BADILI TAARIFA</strong></h3>
                <form class="text-center" data-bss-hover-animate="" style="text-align: left;" method="post">
                    <div class="d-inline-flex mb-3">
                        <div class="text-break" style="margin: 3px;">
                          <label class="form-label" for="" style="color: rgb(0,0,0);">NAMBARI YA MKAZI*:</label>
                          <input class="form-control form-control-lg border-dark shadow-lg" type="text" value="<?php echo $namba ?>" id="#" style="width: 500px;" name="nambali" required readonly>
                        </div>

                        <div class="text-break" style="margin: 3px; display:none">
                          <input type="text" name="kaya" value="<?php echo $kaya_id ?>">
                          <input type="text" name="id" value="<?php echo $_GET['info'] ?>">
                        </div>

                        <div style="margin: 3px;">
                          <label class="form-label" for="" style="color: rgb(0,0,0);margin: 3px;">AINA YA MKAZI*:</label>
                          <div class="col-sm-6">
                          <select value="<?php echo $g['rt_type'];   ?>" class="form-control form-control-lg border-dark shadow-lg form-select form-select-lg" style="width: 500px;margin: 3px; color: #fc0339;" name="chagua" required>
                                  <optgroup label="Changua aina ya mkazi" required>
                                      <option value="Kudumu">Kudumu</option>
                                      <option value=" Si wakudumu"> Si wakudumu</option>
                                  </optgroup>
                              </select></div></div>
                        </div>
                    <div class="d-inline-flex mb-3">
                        <div class="text-break" style="margin: 3px;">
                          <label class="form-label" for="" style="color: rgb(0,0,0);">JINA LA MKAZI*: <span style="color: #fc0339;">    Mfano  :- Mwalupogo Mwankenja </span></label>
                          <input value="<?php echo $g['jina']; ?>"  class="form-control form-control-lg border-dark shadow-lg" type="text" id="#" style="width: 500px; color: #fc0339;" name="jina" required>
                        </div>

                        <div class="text-break" style="margin: 3px;">
                          <label class="form-label" for="" style="color: rgb(0,0,0);">HADHI YA MKAZI*: <span style="color: #fc0339;">    Mfano  :- Baba </span></label>
                          <input value="<?php echo $g['hadhi']; ?>" class="form-control form-control-lg border-dark shadow-lg"  type="text" id="#" style="width: 500px; color: #fc0339;" name="hadhi" required>
                        </div>
                    </div>

                    <div class="d-inline-flex mb-3">
                        <div style="margin: 3px;">
                          <label class="form-label" for="email" style="color: rgb(0,0,0);margin: 3px;">TAREHE YA KUZALIWA*: <span style="color: #fc0339;">    Mfano  :- 8/30/2021 </span> </label>
                          <input value="<?php echo $g['date']; ?>" class="form-control form-control-lg border-dark shadow-lg" type="date" style="width: 500px; color: #fc0339;" name="date" required>
                        </div>
                        <div class="text-break" style="margin: 3px;">
                          <label class="form-label" for="" style="color: rgb(0,0,0);">SHUGHULI YA KIJAMII*: <span style="color: #fc0339;">    Mfano  :- Mwalimu </span></label>
                          <input value="<?php echo $g['act']; ?>" class="form-control form-control-lg border-dark shadow-lg" type="text" style="width: 500px; color: #fc0339;" name="act" required>
                        </div>
                    </div>

                    <div class="d-inline-flex mb-3">
                        <div style="margin: 3px;">
                          <label class="form-label" for="email" style="color: rgb(0,0,0);margin: 3px;">NAMBARI YA SIMU*: <span style="color: #fc0339;">    Mfano  :- 0717523339 </span></label>
                          <input value="0<?php echo $g['simu']; ?>" required class="form-control form-control-lg border-dark shadow-lg" type="text" id="#" style="width: 500px;margin: 3px; color: #fc0339;" name="simu" required>
                        </div>
                        <div class="text-break" style="margin: 3px;">
                          <label class="form-label" for="" style="color: rgb(0,0,0);">BARUA PEPE*: <span style="color: #fc0339;">    Mfano  :- isrms@email.com </span></label>
                          <input value="<?php echo $g['email']; ?>" required class="form-control form-control-lg border-dark shadow-lg" type="#" id="#" aria-describedby="#" style="width: 500px; color: #fc0339;" name="email" required>
                        </div>
                    </div>
                    <div class="border rounded-pill mb-3" style="width: 371px;">
                        <div class="row" style="width: 500px;">
                            <div class="col text-center">
                              <button class="btn btn-primary btn-lg d-block w-100" type="submit" name="ongeza">BADILI</button>
                            </div>
                            <div class="col text-right">
                            <a class="btn btn-primary btn-lg d-block w-100"  role="button" href="hamisha.php?info=<?php echo $_GET['info'];?>&id=<?php echo $_GET['id'];?>">HAMISHA</a>
                            </div>
                        </div>
                    </div>
                </form>
                <?php
              }
                 ?>
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
