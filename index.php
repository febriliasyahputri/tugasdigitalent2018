<?php
include 'koneksi.php';

 $sql2 = "SELECT count(no_agenda) from surat_masuk_fbrl";
  $query2 = mysqli_query($conn, $sql2);
  $hasil2 = mysqli_fetch_array($query2);

  $sql3 = "SELECT count(no_agenda) from surat_keluar_fbrl";
  $query3 = mysqli_query($conn, $sql3);
  $hasil3 = mysqli_fetch_array($query3);  

   $sql4 = "SELECT count(no_disposisi) from q_disposisi";
   $query4 = mysqli_query($conn, $sql4);
   $hasil4 = mysqli_fetch_array($query4);  

?>
<!DOCTYPE html>
<html>
 <head>
   <title> Aplikasi Pengarsipan Surat Masuk Dan Keluar </title>

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <style>
      body{
      margin:0;
      }
      .jumbotron {
      background-color: #68b6b8;
      background-size: 50%;
      color: #516887;
      padding: 50px 30px;
      height: 250px;
      margin-top: 50px;
      }
      .navbar-default {
        background: #516887;
        font-size: 20px;
      }
      .no-border {
        border: 0;
      }
      .no-radius {
        border-radius: 0px;
      }
      .circle {
        border-radius: 50%;
      }
      .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   
      }

      .card2 {
    box-shadow: 2 4px 8px 0 rgba(0,0,0,0.2);
   
      }

      .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .card-p{
        padding-top: 15px;
        font-size: 20px;
        color: #fff;
        font-family: arial;
        padding-left: 20px;
      }

      img {
          border-radius: 5px 5px 0 0;
      }

      .container {
          padding: 2px 16px;
      }
      .shadow {
        box-shadow: 3px 1px 2px 2px rgba(0, 0, 0, 0.2);
      }
      .navbar-default .navbar-brand {
        color: white;
        font-size: 20px;
        letter-spacing: 2px;
      }
      .navbar-default .navbar-nav > li > a {
        color: white;
      }
      .navbar-default .navbar-nav > li > a:hover {
        color: #fff;
        background: #516887;
      }
      .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
        color: #fff;
        background: #516887;
      }
      .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
      color: #fff;
      background-color: transparent;
      }
      .dropdown-menu > li > a {
        color :#516887;
        font-size: 20px;
      }
      .container-fluid {
      padding: 7px 50px;
      }
      .bg-grey {
      background-color: #f6f6f6;
      }
      .logo-small {
      color: #fff;
      font-size: 50px;
      }
      .logo {
      color: #0a9;
      font-size: 200px;
      }
      @media screen and (max-width: 768px) {
      .col-sm-4 {
      text-align: center;
      margin: 25px 0;
      }
      }
      </style>
 </head>
 <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
   <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top no-border no-radius">
      <div class="container-fluid">
         <div class="navbar-header">
         </div>
      </div><!--/.container-fluid -->
    </nav>

<div class="jumbotron ">
  <center><h1 class="display-4">Hello World!</h1>
  <br></center>
  <center><p class="lead"></p>
  <hr class="my-6"></center>
</div>

     <div class="container-fluid">
     <div class="row">

        <div class="col-sm-4">

        <div class="card" style="background-color: #708090; height: 45px;">
        <div class="container">
        <p style="font-size: 20px; color: #fff; padding-left: 120px; padding-top: 10px;"><span class="fa fa-refresh"></span>&nbsp;</p>
          </div>
        </div>
         <br>
        <div class="card" style="background-color: #b54460;">
          <div class="container">
            <p class="card-p"><span class="fa fa-envelope-o"></span>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> 
          </div>
        </div>
        <br>
        <div class="card" style="background-color: #9b9cd6;">
          <div class="container">
            <p class="card-p"><span class="fa fa-envelope-o "></span>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>  
          </div>
        </div>
        <br>
        <div class="card" style="background-color: #79b4c1;">
          <div class="container">
            <p class="card-p"><span class="fa fa-send"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> 
          </div>
        </div>
        <br>
         <div class="card" style="background-color: #aaaaaa; height: 40px;">
        <div class="container">
        <p style="font-size: 20px; color: #fff; padding-left: 80px; padding-top: 10px;"></p>
          </div>
        </div>
        </div>
    
      <div class="col-sm-8">
      <div class="card" style=" padding-top: 5px;">
          <center><h2 style="color: #516887;"><span class="fa fa-envelope"></span>&nbsp;Tentang Aplikasi </h2></center>
          <hr style="color:#493e66;">
            <p style="padding-left: 35px; text-align: justify; font-size: 15px; padding-right: 35px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aplikasi Pengarsipan surat menyurat merupakan suatu aplikasi tentang pengelolaan surat masuk dan surat keluar. Data mengenai surat masuk dan surat keluar yang telah diinputkan ke dalam aplikasi akan dibuat laporan-laporan sesuai dengan kebutuhannya.Aplikasi ini  melakukan pengarsipan surat masuk, pembuatan disposisi, penginputan surat keluar serta penyimpanan laporan  sebagai pertanggungjawaban dari surat yang telah dibuat. Pada proses pengarsipan surat masuk, data yang disimpan sesuai dengan surat yang telah ada kemudian berkas fisik dari surat masuk di scan untuk disimpan ke dalam sistem (penyimpanan dalam database) dalam bentuk foto sehingga apabila berkas fisik surat masuk hilang bisa didapatkan kembali dengan mencari surat yang diinginkan dan mengambil file berkas yang telah diupload sebelumnya. 
              </p> 
              <br>
              <br>
          </div>
      </div>
  </div>
</div>
<br>
<div class="card2" style="background-color:  #708090;">
        <div class="container">
          </div>
        </div>
        <br>
<div class="card2" style="background-color:  #F08080;">
        <div class="container">
          </div>
        </div>
        <br>
<div class="card2" style="background-color:  #20B2AA">
        <div class="container">
          </div>
        </div>
<br>
<div  style="color: #516887; border-top: 3px solid #516887; ">
  </div>

 </body>
</html>
