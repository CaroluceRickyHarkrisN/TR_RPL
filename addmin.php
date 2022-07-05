<?php
include_once('DAO.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="darktheme.css" />
    <script src="theme.js"></script>
    <script src="darkswitch.js"></script>
    <title>travelio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="page-top" background="./images/baground.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="mainNav"> 
      <div class="container">
      <a class="navbar-bran font-wight-bold text-white "href="index.html"> &nbsp;&nbsp;&nbsp;<img src="img/Logo.svg" alt="image" height="50" width="50">  </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="Pesan Sekarang.html"><span class="font-weight-bold"> Pesan&nbsp;Sekarang </span> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="TempatWisata.html"><span class="font-weight-bold"> Tempat&nbsp;Wisata </span> <span class="sr-only">(current)</span></a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="Transportasi.html"><span class="font-weight-bold"> Transportasi </span> <span class="sr-only">(current)</span></a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="Penginapan.html"><span class="font-weight-bold"> Penginapan </span> <span class="sr-only">(current)</span></a>
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href="loginform.html"><span class="font-weight-bold"> Masuk </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">                                            
              <a class="nav-link dropdown-toggle" href="#info" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="font-weight-bold"> Tentang Kami </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="INFO">
                <a class="dropdown-item" href="#uksw">Profil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#fti">Galeri</a>               
              </div>
            </li>   
            
          <button role="button" class="btn btn-block btn-sm btn-dark" id="theme_toggle"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,18C11.11,18 10.26,17.8 9.5,17.45C11.56,16.5 13,14.42 13,12C13,9.58 11.56,7.5 9.5,6.55C10.26,6.2 11.11,6 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
</svg></button>
          
        </ul>
      </div>
    </div>
    </nav>
      <div class="jumbotron">
        <div class="containerm1">
          <div class="container">
            <h1 class="display-4"><br> <span class="font-weight-bold"> Tabel Pemesanan</span></h1>
            <hr class="my-4">
            <ul class="smooth-scroll list-unstyled"> 
             </ul>
           </div>
       </div>
      </div>
      <br>
    <br>
    <h1 style="text-align: center;"><span class="font-weight-bold"><div class="card border- 0 shadow-sm"></div></span></h1>
    <div style="border: 100px solid rgba(112, 168, 182, 0.322); height: auto; overflow: auto; padding: auto; text-align: justify; width: auto;">
    <br>
    <center> 
    <h1> Data Pemesanan </h1>
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
    </center> 
    <br>
    </div>
   
    <br>
    <br>
      
       
        </center>     
       <!-- Site footer -->
       <footer class="site-footer" style="background-color: #c3e9f3;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <h6>Travelio</h6>
              <p style="text-justify: auto;">Travelio merupakan website pariwisata yang menawarkan berbagai paket travel keseluruh penjuru negri. Bersama agensi, kami menawarkan promo dan paket menarik untuk berbagai transportasi dan hotel.  </p>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">
           <a href="#">Hak Cipta Travelio sudah dipatenkan sejak tahun 2021</a>
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
      
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="darkmode.js"></script>
  
   
  </body>
  
  
    
  </html>
