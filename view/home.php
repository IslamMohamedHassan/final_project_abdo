<?php
require('../init.php');
include(path('controller/home.php'));

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= url("assets/css/style.css") ?>">
  <link rel="stylesheet" href="<?= url("assets/css/all.min.css") ?> ">
  <link rel="stylesheet" href="<?= url("assets/css/normalize.css") ?>">
  <title>Document</title>
  <style>
    .slideshow {
      background-color: #f0f0f0;
    }

    .slideshow.slider {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    .slideshow.slider.mySlides {
      display: none;
    }

    .slideshow.slider.fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    .slider img {
      width: 100%;
      height: 70vh;
      display: block;
    }

    @keyframes fade {
      from {
        opacity: 0.4;
      }

      to {
        opacity: 1;
      }
    }

    /*                                     blog                                */
    .main-blog1 {
      margin-bottom: 100px;
    }

    .home_blog img {
      width: 100%;
      height: 200px;
      border-radius: 5px;
    }

    .home_blog h1 {
      text-align: center;
    }

    .home_blog_items {
      width: 100%;
      padding-bottom: 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      text-align: center;
    }

    .home_blog_item {
      width: 30%;
      margin-bottom: 30px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .home_blog_item:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .home_blog_item h4 {
      padding: 10px 0 0 0;
    }

    .home_blog_item h4 a {
      color: #6ac280;
    }

    .home_blog_item p {
      padding: 10px;
    }

    @media (max-width: 992px) {
      .home_blog_item {
        width: 48%;
      }
    }

    @media (max-width: 768px) {
      .home_blog_item {
        width: 100%;
      }
    }
  </style>
</head>

<body onload="getData_home()">
  <!-- Start Header Section
    =====================================================-->
  <!-- new Header Top -->



  <!-- end of header -->

  <!-- new navbar -->

  </table>
  <?php include('layouts/headerAndNav.php'); ?>
  <!-- end of navbar -->
  <!-- slider  -->
  <div class="main-slider"></div>
  <div class="slideshow">
    <div class="slider">
      <div class="mySlides fade">
        <img src="<?= url("assets/image/Recycling-bro.svg") ?>">
      </div>

      <div class="mySlides fade">
        <img src="<?= url("assets/image/Recycling-amico.svg") ?>">
      </div>

      <div class="mySlides fade">
        <img src="<?= url("assets/image/Recycling-pana.svg") ?>">
      </div>
    </div>
  </div>
  </div>
  <!----------------------------------- blogs ----------------------------------------->

  <div id="main-blog1">

  </div>

  <!-- Footer -->
  <?php include('layouts/footer.php') ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?= url("assets/js/home.js") ?>"></script>

</html>