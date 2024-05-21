<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap CSS -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Title Tab -->
  <title>Violette</title>
  <!-- Title Tab -->

  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: serif;
    }
    body{
      background-image: url('img/background/bg1.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    section{
      padding: 550px 0px 0px;
      margin-top: 150px;
    }


    /* --------------------------------------------------------------- GENERAL --------------------------------------------------------- */


    /* Navbar */
    .nama-brand{
      background-color: #790000;
      font-size: 30px;
    }
    .menu{
      font-size: 19px;
    }
    .form{
      size: 50px;
    }
    /* Navbar */

    /* Contact */
    .fab-container{
      position: fixed;
      bottom: 30px;
      right: 25px;
      z-index: 999;
      cursor: pointer;
    }
    .fab-icon-holder{
      width: 50px;
      height: 50px;
      border-radius: 100%;
      background: #790000;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }
    .fab-icon-holder:hover{
      opacity: 0.8;
    }
    .fab-icon-holder i {
      justify-content: center;
      align-items: center;
      display: flex;
      margin-top: 20px; 
      height: 100%
      font-style: 150px;
      color: #ffcece;
    }
    .fab{
      width: 60px;
      height: 60px;
      background: #790000;
    }
    .fab-options{
      list-style-type: none;
      margin: 0;
      position: absolute;
      bottom: 70px;
      right: 0;
      opacity: 0;
      transition: all 0.3s ease;
      transform: scale(0);
      transform-origin: 85% bottom; 
    }
    .fab:hover + .fab-options, .fab-options:hover{
      opacity: 1;
      transform: scale(1);
      font-size: 30px;
    }
    .fab-options li{
      display: flex;
      justify-content: flex-end;
      padding: 5px;
    }
    .fab-label{
      padding: 2px 7px;
      align-self: center;
      user-select: none;
      white-space: nowrap;
      border-radius: 5px;
      font-size: 16px;
      background: #ffcece;
      color: #790000;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      margin-right: 10px;
    }
    /* Contact */


    /* Footer */
    footer{
      padding: 30px 0;
      background-color: #790000;
      color: #FFFFFF;
      text-align: center;
    }
    a{
      color: inherit;
      text-decoration: none;
    }
    ul li{
      display: inline-block;
      padding: 5px;
    }
    footer{
      position: fixed;
      bottom: 0;
    }
    @media (max-height: 800px)
    {
      footer{
        position: static;
      }
    }
    .footer-distributed{
      background-color: #790000;
      box-sizing: border-box;
      widows: 100%;
      text-align: left;
      font-family: bold 16px serif;
      padding: 50px 50px 30px 50px;
      margin-top: 80px;
    }
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
      display: inline-block;
      vertical-align: top;
    }
    .footer-distributed .footer-left{
      width: 30%;
    }
    .footer-distributed .footer-links{
      color: white;
      margin: 20px 0 12px;
    }
    .footer-distributed .footer-links a{
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
    }
    .footer-distributed .footer-links a:hover{
      color: yellow;
    }
    .footer-distributed .footer-company-name{
      color: #8f9296; 
      font-size: 14px;
      font-weight: normal;
      margin: 0;
    }
    .footer-distributed .footer-center{
      margin-left: 50px;
      width: 35%;
    }
    .footer-distributed .footer-center i{
      background-color: transparent;
      border: 1px solid;
      color: white;
      font-size: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }
    .footer-distributed .footer-center i .fa-envelope{
      font-size: 17px;
      line-height: 38px;
    }
    .footer-distributed .footer-center p{
      display: inline-block;
      color: white;
      vertical-align: middle;
      margin: 0;
    }
    .footer-distributed .footer-center p span{
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
    }
    .footer-distributed .footer-center p a{
      color: white;
      text-decoration: none;
    }
    .footer-distributed .footer-center p a:hover{
      color: yellow;
    }
    .footer-distributed .footer-right{
      width: 30%;
    }
    .footer-distributed .footer-company-about{
      line-height: 20px;
      color: white;
      font-size: 15px;
      font-weight: normal;
    }
    .footer-distributed .footer-icons{
      margin-top: 10px;
    }
    .footer-distributed .footer-icons a{
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      border: 1px solid;
      border-radius: 2px;
      font-size: 23px;
      color: white;
      text-align: center;
      line-height: 35px;
      margin-right: 5px;
    }
    .footer-distributed .footer-icons a:hover{
      background-color: yellow;
      color: black;
    }
    @media(max-width: 880px){
      .footer-distributed .footer-links, .footer-distributed .footer-center, .footer-distributed .footer-right,{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }
      .footer-distributed .footer-center i{
        margin-left: 0;
      }
    }
    /* Footer */

    /* ------------------------------------------------------------- GENERAL END ------------------------------------------------------- */


    /* ---------------------------------------------------------- PRODUCT & SEASONAL --------------------------------------------------- */

    /* Product */
    .img-produk{
      width: 99%
    }
    .body-produk{
      width: 100%;
      border-radius: 20px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      margin-left: 15px;
    }
    .body-produk:hover{
      width: 100%;
      background-image: url('img/background/bg1.jpg');
    }
    .card-title-produk{
      text-align: center;
    }
    .tombol-produk{
      color: black;
      background-color: white;
      border: 1px solid black;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      transition: transform 0.2s ease;
      margin-left: 25px;
      margin-bottom: 15px;
      padding: 6px 22px 6px 22px;
      border-radius: 10px;
    }
    .tombol-produk:hover{
      color: white;
      background-color: #790000;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .tombol-produk:active{
      transform: scale(0.96);
    }
    .icon-produk{
      color: #790000;
      font-size: 30px;
      margin-left: 12px;
      text-align: center;
      line-height: 1px;
      display: inline-block;
      transition: transform 0.2s ease;
    }
    .icon-produk:hover{
      color: black;
    }
    .icon-produk:active{
      transform: scale(0.93);
    }
    .cc-title{
      font-size: 70px;
      color: pink;
      text-align: center;
      text-shadow: 3px 2px #790000;
      margin-top: 130px;
      border: 2px solid white;
      border-radius: 15px;
      margin-left: 220px;
      margin-right: 220px;
      background-color: rgba(121, 0, 0, 0.5);
    }
    .cc-img{
      border-radius: 15px;
      padding: 4px 9px 9px 4px;
    }
    .card-carousel{
      border-radius: 15px;
      box-shadow: inset -5px -5px rgba(0, 0, 0, 0.4);
    }
    /* Product */

    /* Seasonal */
    .judulsf{
      width: 350px; 
      height: 63px;  
      margin-left: 550px; 
      margin-top: 30px; 
      margin-bottom: 20px;
      border-radius: 10px; 
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .judulsf:hover{
      background-color: pink;
    }

    /* Sidebanner */
    .sidebanner{
      float: left;
      margin-top: 30px;
    }
    .body-sidebanner{
      padding: 6px 6px 6px 6px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 10px; 
    }
    .img-sidebanner{
      border-radius: 7px;
    }
    /* Sidebanner */

    /* Space */
    .space{
      margin-top: 1px;
    }
    /* Space */
    /* Seasonal */
    /* -------------------------------------------------------- PRODUCT & SEASONAL END ------------------------------------------------- */
  </style>
</head>
<body>
  <!------------------------------------------------------------------ Navbar ------------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark nama-brand">
    <div class="container">
      <a class="navbar-brand nama-brand" href="index.php">
      <img src="img/logo/logo1.png" alt="" width="60" height="60" class="me-2">
      Violette <strong>Florist</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link menu" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product Categories</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="buket.php">Bouquets</a></li>
              <li><a class="dropdown-item" href="singlebuket.php">Single Bouquets</a></li>
              <li><a class="dropdown-item" href="buketmix.php">Bouquet Mix Flowers</a></li>
              <li><a class="dropdown-item" href="box.php">Floral Box</a></li>
              <li><a class="dropdown-item" href="vase.php">Vases</a></li>
              <li><a class="dropdown-item" href="stand.php">Floral Standing</a></li>
              <li><a class="dropdown-item" href="parcel.php">Parcel/Hampers</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active menu" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Occasion</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="wd.php">Wedding Day's</a></li>
              <li><a class="dropdown-item" href="en.php">Engagement</a></li>
              <li><a class="dropdown-item" href="gd.php">Graduation</a></li>
              <li><a class="dropdown-item" href="md.php">Mother's Day</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" aria-current="page" href="decor.html">Decor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="login.php"><i class="fa-solid fa-user"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------------------------------------------------------------ Navbar End ----------------------------------------------------------------->


  <!------------------------------------------------------------------- Contact ------------------------------------------------------------------->
  <div class="fab-container">
    <div class="fab fab-icon-holder">
      <i class="fa fa-plus"></i>
    </div>

    <ul class="fab-options">
      <li>
        <span class="fab-label">Whatsapp</span>
        <div class="fab-icon-holder">
          <a href="https://wa.me/6285779082884?text=Mohon info tentang produk"><i class="fa-brands fa-whatsapp" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Instagram</span>
        <div class="fab-icon-holder">
          <a href="https://instagram.com/violettaflorist_bekasi?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Facebook</span>
        <div class="fab-icon-holder">
          <a href="https://www.facebook.com/ubsi.kaliabang?locale=id_ID"><i class="fa-brands fa-square-facebook" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Tiktok</span>
        <div class="fab-icon-holder">
          <a href="https://www.tiktok.com/@ubsi_official?is_from_webapp=1&sender_device=pc"><i class="fa-brands fa-tiktok" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Telegram</span>
        <div class="fab-icon-holder">
          <a href="https://t.me/+UzWS1ego2Go2NzY1"><i class="fa-brands fa-telegram" style="margin-top: 10px;"></i></a>
        </div>
      </li>
      <li>
        <span class="fab-label">Location</span>
        <div class="fab-icon-holder">
          <a href="https://maps.app.goo.gl/9z7noQ9cd1tiwjq56"><i class="fas fa-map-marker-alt" style="font-size: 25px; margin-top: 13px;"></i></a>
        </div>
      </li>
    </ul>
  </div>
  <!----------------------------------------------------------------- Contact End ----------------------------------------------------------------->


  <!---------------------------------------------------------------- Topbanner ---------------------------------------------------------------->
  
    <img src="img/seasonal/topbanner/md2.jpg" style="width: 100%;">
  
  <!-------------------------------------------------------------- Topbanner End -------------------------------------------------------------->


  <!------------------------------------------------------------------ Sidebanner ----------------------------------------------------------------->
  <div class="container">
    <div class="sidebanner">
      <div class="img-thumbnail border-secondary body-sidebanner">
        <img src="img/seasonal/sidebanner/md.jpg" class="img-sidebanner">
      </div>
    </div>
  </div>
  <!---------------------------------------------------------------- Sidebanner End --------------------------------------------------------------->


  <!-- Judul -->
  <div class="container">
    <div class="card border-secondary judulsf">
        <div class="card-body">
          <h3 align="center"><strong>Mother's Day Occasion</strong></h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Judul -->
  


  <!-------------------------------------------------------------- Categories ------------------------------------------------------------->
  <div class="container">

  <!-- Baris Pertama -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="img-thumbnail border-secondary body-produk">
        <a href="innerpage-seasonal/md/luxurywoman.html"><img src="img/seasonal/md/luxurywoman.jpg" class="img-produk" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-produk"><strong>Luxury Woman</strong></h5>
          <p align="center">Rp435.000,-</p>
          <a href="innerpage-seasonal/md/luxurywoman.html" class="btn tombol-produk">Order Now</a>
          <a href="#"><i class="fa-solid fa-cart-plus icon-produk"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="img-thumbnail border-secondary body-produk">
        <a href="innerpage-seasonal/md/strongwoman.html"><img src="img/seasonal/md/strongwoman.jpg" class="img-produk" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-produk"><strong>Strong Woman</strong></h5>
          <p align="center">Rp450.000,-</p>
          <a href="innerpage-seasonal/md/strongwoman.html" class="btn tombol-produk">Order Now</a>
          <a href="#"><i class="fa-solid fa-cart-plus icon-produk"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="img-thumbnail border-secondary body-produk">
        <a href="innerpage-seasonal/md/independentwoman.html"><img src="img/seasonal/md/independentwoman.jpg" class="img-produk" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-produk"><strong>Independent Woman</strong></h5>
          <p align="center">Rp455.000,-</p>
          <a href="innerpage-seasonal/md/independentwoman.html" class="btn tombol-produk">Order Now</a>
          <a href="#"><i class="fa-solid fa-cart-plus icon-produk"></i></a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Baris Pertama -->

  <!-- Baris Kedua -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 space">
      <div class="col">
        <div class="img-thumbnail border-secondary body-produk">
          <a href="innerpage-seasonal/md/elegantwoman.html"><img src="img/seasonal/md/elegantwoman.jpg" class="img-produk" style="border-radius: 30px;" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title-produk"><strong>Elegant Woman</strong></h5>
            <p align="center">Rp420.000,-</p>
            <a href="innerpage-seasonal/md/elegantwoman.html" class="btn tombol-produk">Order Now</a>
            <a href="#"><i class="fa-solid fa-cart-plus icon-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="img-thumbnail border-secondary body-produk">
          <a href="innerpage-seasonal/md/softheartedwoman.html"><img src="img/seasonal/md/softheartedwoman.jpg" class="img-produk" style="border-radius: 30px;" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title-produk"><strong>Soft Hearted Woman</strong></h5>
            <p align="center">Rp560.000,-</p>
            <a href="innerpage-seasonal/md/softheartedwoman.html" class="btn tombol-produk">Order Now</a>
            <a href="#"><i class="fa-solid fa-cart-plus icon-produk"></i></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="img-thumbnail border-secondary body-produk">
          <a href="innerpage-seasonal/md/smartwoman.html"><img src="img/seasonal/md/smartwoman.jpg" class="img-produk" style="border-radius: 30px;" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title-produk"><strong>Smart Woman</strong></h5>
            <p align="center">Rp575.000,-</p>
            <a href="innerpage-seasonal/md/smartwoman.html" class="btn tombol-produk">Order Now</a>
            <a href="#"><i class="fa-solid fa-cart-plus icon-produk"></i></a>
          </div>
        </div>
      </div>

    </div>
    </div>
  </div>
  <!-- Baris Kedua -->



  <!----------------------------------------------------------- Categories End ----------------------------------------------------------->


  

  <!----------------------------------------------------------------------- Footer ---------------------------------------------------------------->
  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="img/logo/logo3.png" style="width: 330px;">
      <p class="footer-links">
        <a href="index.html">Home</a>
        |
        <a href="allproduct.html">Product</a>
        |
        <a href="faq.html">FAQ</a>
        |
        <a href="blog.html">Blog</a>
      </p>
      <p class="footer-company-name">Copyright &copy; 2024 - <strong>Violette Florist</strong>, All Rights Reserved. </p>
      <div class="footer-icons">
        <ul>
          <li><a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></a></li>
          <li><a href="https://instagram.com/violettaflorist_bekasi?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
          <li><a href="https://wa.me/6285779082884?text=Mohon info tentang produk"><i class="fa-brands fa-whatsapp"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa-solid fa-location-dot"></i>
        <p><span>Jl. Raya Casablanca No.88, </span>
         Jakarta Selatan.</p>
      </div>
      <div>
        <i class="fa-solid fa-fax"></i>
        <p>(021) 21236158</p>
      </div>
      <div>
        <i class="fa-regular fa-envelope"></i>
        <p><a href="#">violettefloristofficial@gmail.com</a></p>
      </div>
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        Available Payment :
        <a href="#"><img src="img/logo/footer-pay.jpg" style="width: 350px;"></a>
        Download Our App :
        <a href="#"><img src="img/logo/footer-app.jpg" style="width: 350px;"></a>
      </p>
    </div>
  </footer>
  <!----------------------------------------------------------------------- Footer End ------------------------------------------------------------>
  






















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>