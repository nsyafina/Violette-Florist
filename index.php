<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Design -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap -->

  
  <!-- Design -->

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Icon -->

  <!-- Title Tab -->
  <title>Violette Florist</title>
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



    /* ---------------------------------------------------------------- HOME ----------------------------------------------------------- */

    /* Navbar */
    .body-navbar{
      background-image: url('img/logo/bg-navbar-home.jpg');
    }
    .nama-toko{
      font-size: 30px;
    }
    .menu{
      font-size: 19px;
    }
    .form{
      size: 50px;
    }
    /* Navbar */


    /* Banner */
    .banner{
      height: 85vh;
      background-image: url(img/logo/bg-banner.jpg);
      background-repeat: no-repeat;
      position: relative;
      display: flex;
      margin: 0;
    }
    .text-banner-1{
      color: white;
      font-size: 67px;
      margin-top:80px;
      margin-left: 75px;
      text-shadow: 2px -1px black;
    }
    .text-banner-1 span{
      color: #6000A2;
      text-shadow: 1px -1px black;
    }
    .text-banner-2{
      color: white;
      font-size: 20px;
      margin-top: 5px;
      margin-right: 150px;
      margin-left: 75px;
      margin-bottom: 40px;
    }
    .button-banner{
      font-size: 25px;
      color: white;
      background-color: #790000;
      border: 1px solid rgba(0, 0, 0, 0.5);
      border-radius: 15px;
      box-shadow: 0 60px 12px -18px rgba(0, 0, 0, 0.2), 0 60px 20px -12px rgba(0, 0, 0, 0.1);
      padding: 6px 25px 6px 25px;
      margin-left: 170px;
      transition: transform 0.2s ease;
      animation: dolphin 1s infinite ease-in-out alternate;
      -webkit-animation: dolphin 1s infinite ease-in-out alternate;
    }
    .button-banner:hover{
      color: black;
      background-color: pink;
    }
    .button-banner:active{
      transform: scale(0.96);
    }
    @keyframes dolphin{
      100%{
        transition: translateY(20px);
        -webkit-transform: translateY(20px);
        -moz-transform: translateY(20px);
        -ms-transform: translateY(20px);
        -o-transform: translateY(20px);
        box-shadow: 0 40px 10px -18px rgba(0, 0, 0, 0.3), 0 40px 16px -12px rgba(0, 0, 0, 0.2);
      }
    }
    /* Banner */

  
    /* Judul */
    .judul1{
      width: 350px; 
      height: 63px;  
      margin-left: 370px; 
      margin-bottom: 10px;
      border-radius: 15px; 
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .judul1:hover{
      background-image: url('img/background/bg1.jpg');
    }
    .judul2{
      width: 350px; 
      height: 63px;  
      margin-left: 370px; 
      margin-top: 70px; 
      margin-bottom: 10px;
      border-radius: 15px; 
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .judul2:hover{
      background-image: url('img/background/bg1.jpg');
    }
    .judul3{
      width: 350px; 
      height: 63px;  
      margin-left: 400px; 
      margin-top: 40px; 
      margin-bottom: 20px;
      border-radius: 10px; 
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .judul3:hover{
      background-color: pink;
    }
    /* Judul */


    /* Featured Categories */
    .img-fc{
      width: 99%
    }
    .body-fc{
      width: 100%;
      border-radius: 20px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      transition: 1s;
    }
    .body-fc:hover{
      width: 94%;
      border: 2px solid;
      background-image: url('img/background/bg1.jpg');
    }
    .card-title-fc{
      font-size: 22px;
      text-align: center;
    }
    .fc-button{
      margin-top: 17px;
      margin-left: 25px;
      margin-right: 25px;
      border-radius: 10px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .fc-button:hover{
      background-color: #790000;
      color: white;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    /* Featured Categories */


    /* Seasonal Flowers */
    /*card*/
    .card-size-left{
      margin-left: 20px;
      float: left;
      margin-top: 20px;
      width: 800px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      transition: 1s;
    }
    .card-size-left:hover{
      background-image: url('img/background/bg1.jpg');
      border: 1px solid;
    }
    .card-size-right{
      margin-right: 20px;
      float: right;
      margin-top: 15px;
      width: 800px;
      box-shadow: inset 3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      transition: 1s;
    }
    .card-size-right:hover{
      background-image: url('img/background/bg1.jpg');
      border: 1px solid #790000;
    }
    .seasonal-pict{
      border-radius: 20px;
    }
    .card-title-sf{
      font-size: 28px;
      text-align: center;
      margin-bottom: 19px;
    }
    .text-sf{
      text-align: center;
      font-size: 18px;
    }
    .body-sf{
      margin-top: 35px;
    }
    .sf-button{
      margin-top: 20px;
      margin-left: 25px;
      margin-right: 25px;
      border-radius: 10px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .sf-button:hover{
      background-color: #790000;
      color: white;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    /*card*/

    /* Carousel-Slice */
    .body-slice-right{
      float: right;
      border-radius: 10px;
      margin-top: 20px;
      margin-right: 20px;
      width: 265px;
    }
    .photo-slice{
      border-radius: 15px;
    }
    /* Caerousel-Slice */
    /* Seasonal Flowers */


    /* About */
    .about{
      margin-top: 100px;
      width: 100%;
      padding: 4% 11%;
      background-color: rgba(255, 187, 205, 0.3);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .img-about img{
      width: 470px;
      padding: 0 5%;
    }
    .text-about h1{
      margin-top: 50px;
      font-size: 45px;
      color: #790000;
      position: relative;
    }
    .text-about span{
      font-size: 26px;
    }
    .text-about h1::after{
      position: absolute;
      content: "";
      width: 30%;
      height: 4px;
      background-color: #790000;
      top: 53px;
      left: 0;
      bottom: 2px;
    }
    .text-about h5{
      margin-top: 0px;
      font-size: 25px;
      color: black;
      position: relative;
      margin-bottom: 0px;
    }
    .text-about p{
      font-size: 18px;
      color: black;
      line-height: 28px;
      margin: 17px 0 45px 0;
      max-width: 480px;
    }
    /* About */


    /* Why */
    .why{
      height: 60vh;
      background-repeat: no-repeat; 
      position: relative;
      display: flex;
      margin-top: 20px;
      
    }
    .why-body{
      width: 330px;
      height: 280px;
      background-color: white;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      border-radius: 20px;
      margin-top: 35px;
      margin-left: 70px;
      transition: 1s;
    }
    .why-body:hover{
      background-color: pink;
    }
    .why-icon{
      margin-top: 25px;
      color: #790000;
      text-shadow: inset -2px -2px rgba(0, 0, 0, 0.6);
      font-size: 50px;
      padding: 5px 5px 15px 5px;
      align-items: center;
      justify-content: center;
      position: relative;
      display: flex;
    }
    .why-title{
      text-align: center;
      font-size: 25px;
    }
    .why-title span{
      color: #790000;
    }
    .why-deskripsi{
      padding: 0px 17px 0px 17px;
      text-align: center;
      font-size: 15px;
    }
    /* Why */


    /* Testimonial */
    .size-card-group{
      width: 100%;
      padding: 4px 6px 7px 4px;
      background-color: white;
      border-radius: 15px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)
    }
    .img-komen{
      border-radius: 15px
    }
    .nama{
      font-size: 20px;
    }
    .komentar{
      font-size: 14px;
    }
    .body-card{
      border-radius: 15px;
    }
    /* Testimonial */

    
    /* G-Maps */
    .google-maps{
      margin-top: 100px;
      background-color: rgba(255, 187, 205, 0.3);
      padding: 40px 50px 180px 50px;
    }
    .gmaps2{
      margin-top: 130px;
    }
    .maps{
      border: none;
      width: 600px;
      height: 350px;
      float: right;
      padding: 0px 0px 0px 15px;
    }
    .text-maps{
      padding: 70px 0px 0px 0px;
      font-size: 16px;
    }
    .maps-button{
      color: black;
      background-color: white;
      border: none;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4) ;
      border-radius: 10px;
      transition: transform 0.2s ease;
      margin-left: 370px;
    }
    .maps-button:hover{
      color: white;
      background-color: #790000;
    }
    .maps-button:active{
      transform: scale(0.96);
    }
    .teksmap1 h5::after{
      position: absolute;
      content: "";
      width: 20%;
      height: 1px;
      background-color: black;
      top: 4507px;
      left: 50px;
      bottom: 2px;
    }
    .teksmap2 h5::after{
      position: absolute;
      content: "";
      width: 20%;
      height: 1px;
      background-color: black;
      top: 4885px;
      left: 50px;
      bottom: 2px;
    }
    /* G-Maps */

    /*Decor Home*/
    .decor{
      margin-top: 60px;
      margin-bottom: 90px;
    }
    .body-decor{
      padding: 3px 5px 5px 3px;
      border-radius: 15px;
      width: 1050px;
      margin-left: 30px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      background-color: #790000;
    }
    .img-decor{
      border-radius: 25px;
    }
    .title-decor{
      color: #790000;
      font-size: 70px;
      text-align: center;
      margin-top: 160px;
      text-shadow: 1px -1px rgba(0, 0, 0, 0.8);
    }
    .des-decor{
      color: #790000;
      font-size: 21px;
      text-align: center;
    }
    .button-decor-home{
      font-size: 18px;
      color: white;
      background-color: #790000;
      border: 1px solid #790000;
      border-radius: 10px;
      padding: 4px 30px 4px 30px;
      margin-left: 430px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      transition: transform 0.2s ease;
    }
    .button-decor-home:hover{
      color: #790000;
      background-color: #ffcece;
      border: 1px solid #ffcece;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
    .button-decor-home:active{
      transform: scale(0.96);
    }
    /*Decor Home*/

    /* -------------------------------------------------------------- HOME END --------------------------------------------------------- */

  </style>
</head>
<body>
  <!------------------------------------------------------------------ Navbar ------------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark body-navbar">
    <div class="container">
      <a class="navbar-brand nama-toko" href="index.php">
      <img src="img/logo/logo1.png" alt="" width="60" height="60" class="me-2">
      Violette <strong>Florist</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active menu" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product Categories</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="buket.php">Bouquets</a></li>
              <li><a class="dropdown-item" href="singlebuket.php">Single Bouquets</a></li>
              <li><a class="dropdown-item" href="buketmix.php">Mix Bouquets</a></li>
              <li><a class="dropdown-item" href="box.php">Floral Box</a></li>
              <li><a class="dropdown-item" href="vase.php">Vases</a></li>
              <li><a class="dropdown-item" href="stand.php">Floral Standing</a></li>
              <li><a class="dropdown-item" href="parcel.php">Parcel/Hampers</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Occasion</a>
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


  <!------------------------------------------------------------------- Banner -------------------------------------------------------------------->
  <div class="banner">
    <main class="content">
      <h1 class="text-banner-1"><strong>Say it with <span>Flowers</span></strong></h1>
      <p class="text-banner-2">Rangkaian bunga segar pilihan Violette Florist untuk momen spesialmu</p>
      <a href="allproduk.php"><button class="button-banner">Find Your Flowers</button></a>
    </main>
  </div>
  <!------------------------------------------------------------------ Banner End ----------------------------------------------------------------->
  

  <!-------------------------------------------------------------- Featured Categories ------------------------------------------------------------->
  <!-- Judul -->
  <div class="container">
    <div class="card border-secondary judul1" style=" ">
      <div class="card-body">
        <h3 align="center"><strong>Featured Categories</strong></h3>
      </div>
    </div>
  <!-- Judul -->
  <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
    <div class="col">
      <div class="img-thumbnail border-secondary body-fc">
        <a href="buket.php"><img src="img/home/fc/buket.jpg" class="img-fc" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-fc"><strong>Bouquets</strong></h5>
          <a href="buket.php" class="btn btn-outline-dark d-grid fc-button">View All Product</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="img-thumbnail border-secondary body-fc">
        <a href="buketmix.php"><img src="img/home/fc/bouquetmix1.jpg" class="img-fc" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-fc"><strong>Mix Bouquets</strong></h5>
          <a href="buketmix.php" class="btn btn-outline-dark d-grid fc-button">View All Product</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="img-thumbnail border-secondary body-fc">
        <a href="box.php"><img src="img/home/fc/boxfloral.jpg" class="img-fc" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-fc"><strong>Box Floral</strong></h5>
          <a href="box.php" class="btn btn-outline-dark d-grid fc-button">View All Product</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="img-thumbnail border-secondary body-fc">
        <a href="stand.php"><img src="img/home/fc/standfloral.jpg" class="img-fc" style="border-radius: 30px;" alt="..."></a>
        <div class="card-body">
          <h5 class="card-title-fc"><strong>Floral Standing</strong></h5>
          <a href="stand.php" class="btn btn-outline-dark d-grid fc-button">View All Product</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!----------------------------------------------------------- Featured Categories  End ----------------------------------------------------------->

  <!-------------------------------------------------------------- Seasonal Flowers --------------------------------------------------------------->
  <!-- Judul -->
  <div class="container">
    <div class="card border-secondary judul2" style=" ">
      <div class="card-body">
        <h3 align="center"><strong>Seasonal Flowers</strong></h3>
      </div>
    </div>
  <!-- Judul -->

  <!-- 1 -->
  <!-- Card -->
  <div class="card mb-3 card-size-left">
    <div class="row g-0">

      <div class="col-md-4">
        <a href="en.php"><img src="img/home/sf/en.jpg" class="img-fluid seasonal-pict" alt="..."></a>
      </div>
      <div class="col-md-8">
        <div class="card-body body-sf">
          <h5 class="card-title-sf"><strong>Engagement</strong></h5>
          <p class="card-text text-sf">Lamar kekasihmu dengan bunga yang memberikan kebahagiaan. Violette Florist menyediakan bunga dengan kualitas tinggi di moment-moment special.</p>
          <p class="card-text text-sf"><small class="text-muted">Save Up To 50% Off</small></p>
          <a href="en.php" class="btn btn-outline-dark d-grid sf-button">View All Products</a>
        </div>
      </div>

    </div>
  </div>
  <!-- Card -->

  <!-- Carousel Slice -->
  <div class="body-slice-right">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/seasonal/en/redvelvet.jpg" class="d-block w-100 photo-slice" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/seasonal/en/beautysymphony.jpg" class="d-block w-100 photo-slice" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/seasonal/en/luxuryblossom.jpg" class="d-block w-100 photo-slice" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev tombolnextprevious" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next tombolnextprevious" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- Carousel Slice -->
  <!-- 1 -->

  <!-- 2 -->
  <div class="container">
    <!-- Card -->
    <div class="card mb-3 card-size-left">
      <div class="row g-0">

        <div class="col-md-4">
          <a href="md.php"><img src="img/home/sf/mds.jpg" class="img-fluid seasonal-pict" alt="..."></a>
        </div>
        <div class="col-md-8">
          <div class="card-body body-sf">
            <h5 class="card-title-sf"><strong>Mother's Day</strong></h5>
            <p class="card-text text-sf">Berikan kebahagiaan yang manis untuk ibu dimoment hari ibu, Violette Florist menyediakan bunga dengan kualitas tinggi di moment-moment special.</p>
            <p class="card-text text-sf"><small class="text-muted">Save Up To 50% Off</small></p>
            <a href="md.php" class="btn btn-outline-dark d-grid sf-button">View All Products</a>
          </div>
        </div>

      </div>
    </div>
    <!-- Card -->

    <!-- Carousel Slice -->
    <div class="body-slice-right">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/seasonal/md/softheartedwoman.jpg" class="d-block w-100 photo-slice" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/seasonal/md/elegantwoman.jpg" class="d-block w-100 photo-slice" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/seasonal/md/smartwoman.jpg" class="d-block w-100 photo-slice" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev tombolnextprevious" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next tombolnextprevious" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel Slice -->
  <!-- 2 -->
<section></section>

  </div>
  <!------------------------------------------------------------- Seasonal Flowers End ------------------------------------------------------------>

  <!--------------------------------------------------------------------- About ------------------------------------------------------------------->
    <div class="about">
      <div class="img-about">
        <img src="img/background/about.jpg" alt="" srcset="">
      </div>
      <div class="text-about">
        <h1>About The Company</h1>
        <p><span>Violette Florist</span> merupakan layanan toko karangan bunga online yang telah berpengalaman dan terpercaya melayani berbagai pelanggan menghadirkan rangkaian bunga yang menarik, elegan, kreatif dengan harga terjangkau serta pengiriman ke seluruh Indonesia. Kami berpusat di Jakarta, dengan workshop produksi di kota-kota besar seperti Tangerang, Bekasi, Bandung, Surabaya, Semarang dan Medan. Jangan ragu untuk menghubungi kami guna bertanya mengenai rangkaian bunga kami dan bergabunglah bersama ratusan pelanggan yang telah puas dengan pelayanan kami.</p>
      </div>
    </div>
  <!------------------------------------------------------------------- About End ----------------------------------------------------------------->

  <!--------------------------------------------------------------------- Why ------------------------------------------------------------------->
    
      <div class="why">
        <div class="why-body">
          <i class="fa-solid fa-leaf why-icon"></i>
          <h5 class="why-title"><strong><span>Fresh Flowers</span> Everyday</h5></strong>
          <p class="why-deskripsi">Semua bunga kami dipetik sendiri dengan tangan untuk memastikan kamu mendapatkan rangkaian buket bunga yang paling segar. Kami selalu memberikan bunga dengan kualitas terbaik kepada setiap pelanggan kami.</p>
        </div>
        <div class="why-body">
          <i class="fa-solid fa-sack-dollar why-icon"></i>
          <h5 class="why-title"><strong><span>Best Value</span> Bouquets</h5></strong>
          <p class="why-deskripsi">Kami merancangkan sistem yang memungkinkan kamu mendapatkan buket bunga segar idamanmu dengan harga yang terbaik. Kami juga menyediakan banyak pilihan bunga yang sesuai dengan budget-mu.</p>
        </div>
        <div class="why-body">
          <i class="fa-solid fa-gift why-icon"></i>
          <h5 class="why-title"><strong>Buying Flowers <span>Made Easy</span></h5></strong>
          <p class="why-deskripsi">Memilih kado terbaik untuk orang yang kamu sayangi tidak harus sulit. Kami memastikan kamu dapat membeli bunga terbaik dengan mudah dan cepat. Baik itu melalui pemesanan online, atau menghubungi cs kami secara langsung.</p>
        </div>
      </div>
      
  <!------------------------------------------------------------------- Why End ----------------------------------------------------------------->


  <!-------------------------------------------------------------------- Decor --------------------------------------------------------------->
  <div class="container">
    <div class="decor">
      <div class="card text-white body-decor">
        <img src="img/home/decorhome.jpg" class="card-img img-decor" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title title-decor">Flower Decor</h5>
          <p class="card-text des-decor">More than just decoration.</p>
          <a href="decor.html"><button class="button-decor-home">View More</button></a>
        </div>
      </div>
    </div>
  </div>
  
  <!------------------------------------------------------------------ Decor End ------------------------------------------------------------->


  <!------------------------------------------------------------------ Testimonial ---------------------------------------------------------------->
  <!-- Judul -->
  <div class="container">
    <div class="card border-secondary judul3" style=" ">
        <div class="card-body">
          <h3 align="center"><strong>Testimonial</strong></h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Judul -->
  <div class="container mt-3">
    <div class="card-group size-card-group">
      <div class="card body-card">
        <img src="img/home/testimoni/jonghyop.jpg" class="card-img-top img-komen" alt="...">
        <div class="card-body">
          <h5 class="card-title nama">Chae Jong Hyeop</h5>
          <p class="card-text komentar">Terimakasih, pesanan bunganya sudah di terima istri saya. Bakal jadi favorit saya, respon cepat, pelayanan profesional, rangkaian bunganya istimewa.</p>
        </div>
        <div class="card-footer">
          <small class="text">⭐⭐⭐⭐⭐</small>
        </div>
      </div>
      <div class="card body-card">
        <img src="img/home/testimoni/minsi.jpg" class="card-img-top img-komen" alt="...">
        <div class="card-body">
          <h5 class="card-title nama">Go Minsi</h5>
          <p class="card-text komentar">Saya suka pesan bouquet bunga melalui Violette Florist, kedua pesanan saya sampai ditujuan sesuai estimasi waktu yang diberikan. Terimakasih! Saya akan kembali lagi!.</p>
        </div>
        <div class="card-footer">
          <small class="text">⭐⭐⭐⭐⭐</small>
        </div>
      </div>
      <div class="card body-card">
        <img src="img/home/testimoni/wooseok.jpg" class="card-img-top img-komen" alt="...">
        <div class="card-body">
          <h5 class="card-title nama">Byeon Woo Seok</h5>
          <p class="card-text komentar">Pesanan bunga dikirim sangat cepat, dalam kondisi segar. Sempat bingung memilih bunga yang tepat CS Violette Florist bantu kasih saran. Saya sangat puas!</p>
        </div>
        <div class="card-footer">
          <small class="text">⭐⭐⭐⭐⭐</small>
        </div>
      </div>
      <div class="card body-card">
        <img src="img/home/testimoni/woosik.jpg" class="card-img-top img-komen" alt="...">
        <div class="card-body">
          <h5 class="card-title nama">Choi Woo Shik</h5>
          <p class="card-text komentar">Bunganya bisa request sesuai kebutuhan, waktu itu pesan yang serba merah dan cantik hasilnya, memang Violette Florist terbaik sih.</p>
        </div>
        <div class="card-footer">
          <small class="text">⭐⭐⭐⭐⭐</small>
        </div>
      </div>
      <div class="card body-card">
        <img src="img/home/testimoni/songkang.jpg" class="card-img-top img-komen" alt="...">
        <div class="card-body">
          <h5 class="card-title nama">Song Kang</h5>
          <p class="card-text komentar">Bagus banget karangan bunganya. Kemarin saya pesan bunga disini, jadinya cepat dan sesuai permintaan saya. Makasih ya Violette Florist saya jadi ingin pesan lagi!.</p>
        </div>
        <div class="card-footer">
          <small class="text">⭐⭐⭐⭐⭐</small>
        </div>
      </div>
      <div class="card body-card">
        <img src="img/home/testimoni/suamiku.jpg" class="card-img-top img-komen" alt="...">
        <div class="card-body">
          <h5 class="card-title nama">Lee Dong Wook</h5>
          <p class="card-text komentar">Bagus banget karangan bunganya. Kemarin saya pesan bunga disini, jadinya cepat dan sesuai permintaan saya. Makasih ya Violette Florist saya jadi ingin pesan lagi!.</p>
        </div>
        <div class="card-footer">
          <small class="text">⭐⭐⭐⭐⭐</small>
        </div>
      </div>
    </div>
  </div>
  <!---------------------------------------------------------------- Testimonial End -------------------------------------------------------------->

  <!---------------------------------------------------------- Google Maps ------------------------------------------------------->
  <div class="google-maps">
    <div class="gmaps1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.300661025125!2d106.84002297363853!3d-6.224029960954305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38d200f03e5%3A0xaf54cb631563acce!2sKota%20Kasablanka!5e0!3m2!1sid!2sid!4v1707253658373!5m2!1sid!2sid" class="maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="text-maps teksmap1">
        <h5><strong>Jakarta, Violette Florist in Kota Kasablanka</strong></h5>
        <p>Jl. Raya Casablanca No.88, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12870.
        <br>  
        | Weekday 08:00-17:00 | | Weekend 09:00-13:00 |
        <br>
        | Whatsapp : <a href="https://wa.me/6285779082884?text=Mohon info tentang produk">0857-7908-2884</a> | | Email : adminvioristofficialjakarta@gmail.com |</p>
      </div>
      <a href="https://maps.app.goo.gl/9z7noQ9cd1tiwjq56"><button class="btn btn-outline-dark maps-button">Go To Violetta Florist</button></a>
    </div>
    <div class="gmaps2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.825686540874!2d115.22748507501622!3d-8.802441591250133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24324636ca37d%3A0x9d4b4f208e1df4ab!2sBali%20Collection!5e0!3m2!1sid!2sid!4v1707320424428!5m2!1sid!2sid" class="maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="text-maps teksmap2">
        <h5><strong>Bali, Violette Florist in Bali Collection</strong></h5>
        <p>Jl. Kw. Nusa Dua Resort, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80361
        <br>  
        | Weekday 09:00-16:00 | | Weekend 07:30-21:00 |
        <br>
        | Whatsapp : <a href="https://wa.me/6285779082884?text=Mohon info tentang produk">0858-1188-6269</a> | | Email : adminvioristofficialbali@gmail.com |</p>
      </div>
      <a href="https://maps.app.goo.gl/QAgabs7p5PUdDBW1A"><button class="btn btn-outline-dark maps-button">Go To Violetta Florist</button></a>
    </div>
  </div>
  <!-------------------------------------------------------- Google Maps End ----------------------------------------------------->
  

  


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