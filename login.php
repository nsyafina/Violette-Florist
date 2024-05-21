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
  <title>Vflorist</title>
  <!-- Title Tab -->

  <style>
     *{
      margin: 0;
      padding: 0;
      font-family: serif;
    }
    body{
      background-image: url('img/background/login.jpg');
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
      background-color: pink;
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
      background-color: pink;
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
      font-size: 27px;
      text-align: center;
      margin-bottom: 17px;
    }
    .text-sf{
      text-align: center;
    }
    .body-sf{
      margin-top: 35px;
    }
    .sf-button{
      margin-top: 40px;
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
      top: 3955px;
      left: 50px;
      bottom: 2px;
    }
    .teksmap2 h5::after{
      position: absolute;
      content: "";
      width: 20%;
      height: 1px;
      background-color: black;
      top: 4335px;
      left: 50px;
      bottom: 2px;
    }
    /* G-Maps */

    /* Login */
    .login-form{
      display: flex;
      flex-direction: column;
      height: 500px;
      width: 400px;
      /* border: 1px solid black;*/
      border: 1px solid #790000;
      align-items: center;
      margin: auto;
      margin-left: 600px;
      margin-top: 50px;
      background-image: url('img/background/bg2.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      box-shadow: inset -5px -5px rgba(121, 0, 0, 0.5);
      border-radius: 25px;
    }
    .login-form h1{
      color: #790000;
      font-size: 4rem;
      border-bottom: 3px solid rgb(121, 0, 0);
      margin: 50px;
      margin-bottom: 40px; 
    }
    .box{
      padding: 10px 17px 10px 17px;
      margin: 15px;
      width: 65%;
      border: none;
      outline: none;
      border-radius: 20px;
      background-color: #FE769A;
      border: 1px solid rgba(0, 0, 0, 0.4);
      color: black;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      font-size: 18px;
    }
    .button-login{
      color: #790000;
      font-size: 19px;
      padding: 7px 50px 7px 50px; 
      border-radius: 20px;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
      background-color: transparent;
      border: 1px solid rgba(0, 0, 0, 0.4);
      transition: transform 0.2s ease;
      margin-top: 25px;
    }
    .button-login:hover{
      cursor: pointer;
      color: white;
      background-color: #790000;
    }
    .button-login:active{
      transform: scale(0.94);
    }
    /* Login */

    /* -------------------------------------------------------------- HOME END --------------------------------------------------------- */

  </style>
</head>
<body>
  <form action="" class="form login-form">
    <h1>LOGIN</h1>
    <input type="email" name="email" class="box" placeholder="Enter Username">
    <input type="password" name="password" class="box" placeholder="Enter Password">
    <button type="button" class="button-login" id="submit"><strong>Login</strong></button>
  </form>




















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