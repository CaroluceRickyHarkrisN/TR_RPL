<?php
include_once('DAO.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Travelio Super Admin</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="css/style super admin.css"/>
  
</head>

<body>
<div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="img/Travelio.png"></a>
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="img/mrbean.gif" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>


    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="img/mrbean.gif" alt="">
            <p class="name">Genjieh</p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="admin.php">
                <img src="img/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <img src="img/icons/2.png" alt="">
                <span class="menu-title">Widgets</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Validation.html">
                  <img src="img/icons/008-list.png" alt="">
                  <span class="menu-title">Validation</span>
                </a>
              </li>
              <li class="nav-item active">
              <a class="nav-link" href="detail.php">
                <img src="img/icons/008-list.png" alt="">
                <span class="menu-title">Detail</span>
              </a>
            </li>
            
            
            
          </ul>
        </nav>

        <div class="content-wrapper">
            <h3 class="page-heading mb-4">Detail Pemesanan</h3>
            <br>
    <h1 style="text-align: center;"><span class="font-weight-bold"><div class="card border- 0 shadow-sm"></div></span></h1>
    <div style="border: 100px solid rgba(112, 168, 182, 0.322); height: auto; overflow: auto; padding: auto; text-align: justify; width: auto;">
    <br>
    <center> 
    <h1> Data Pemesanan ( Admin )</h1>
    <br>
    <table border=3 class="table">
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>Lokasi</th>
        </tr>
        <?php foreach($data as $d): ?>
        <tr>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['no_hp']; ?></td>
            <td><?= $d['email']; ?></td>
        </tr>
        <?php endforeach; ?> 
    </table>
    <a href="addmin.php" target="_blank" class="btn btn-dark btn-lg"  role="button">Data Pemesanan</a>
    </center>
        </div>

        <footer class="footer">
                <div class="container-fluid clearfix">
                  <span class="float-right">
                      <a href="#">Travelio Super Admin</a> &copy; 2021
                  </span>
                </div>
              </footer>
            
          </div>
      </div>
  </div>
      
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/maps.js"></script>
      </body>
      
      </html>