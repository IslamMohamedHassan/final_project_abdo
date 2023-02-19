<?php
require('../init.php');
include(path('controller/aboutus.php'));

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
    #aboutus_page {
      background-color: var(--green);
    }

    .about_us_page {
      width: 100%;
      margin-top: 0;
      padding-top: 20px;
      text-align: center;
      background-color: var(--green, #a4c63b);
    }

    .about_us_page.about_us_item h3 {
      margin-bottom: 20px;
    }

    .our_info_items {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      font-size: 28px;
    }

    .about_us_item {
      width: 24%;
      padding: 20px;
      margin-bottom: 15px;
      background-color: var(--white, #fff);
      border-radius: 10px;
    }

    @media (max-width:992px) {
      .about_us_item {
        width: 48%;
      }
    }

    @media (max-width:768px) {
      .about_us_item {
        width: 100%;
      }
    }
  </style>
</head>



<body onload="getData_about_us()">
  <!-- Start Header Section
    =====================================================-->
  <!-- new Header Top -->
  <?php include('layouts/headerAndNav.php'); ?>


  <!-- end of navbar -->
  <!------------------------------- slider ------------------------------------->

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
  <!------------------------------- about us ------------------------------------->
  <div id="aboutus">

  </div>


  <!-- Footer -->
  <?php include('layouts/footer.php') ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="<?= url("assets/js/aboutus.js") ?>"></script>

</html>