<?php
require '../init.php';
include(path('controller/items.php'));

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= url('assets/css/all.min.css') ?> ">
  <link rel="stylesheet" href="<?= url('assets/css/normalize.css') ?>">
  <title>Document</title>

  <link rel="stylesheet" href="<?= url('assets/css/bootstrap.min.css') ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    /* start item section */
    a {
      text-decoration: none;

    }

    .our-item-title {
      color: var(--green);
      font-size: 30px;
      margin-top: 15px;
    }

    .our-item-title h4 {
      color: rgb(8, 88, 28);
      margin-bottom: 25px;
      font-weight: bold;
      font-size: 25px;
      margin: 5px;
    }

    .main-items {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      padding: 10px 0px;
      margin: 10px 0px 25px;
    }

    .main-items .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding-bottom: 20px;


    }

    .main-items .card img {
      width: 100%;
      border-radius: 10px;
      height: 200px;



    }

    .main-items .card .product_header {
      font-size: 30px;
      margin-top: 15px;
      color: rgb(4, 87, 41);
      padding: 10px;

    }

    .main-items .card .product-location {
      font-size: 20px;
      color: #333333;
      position: relative;
      padding: 0 25px 0 0;
      padding: 10px;

    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }




    /* end item section */
  </style>


  <title>Document</title>
</head>

<body>


  <!----------------------------new Header Top-------------------- -->

  <?php include('layouts/headerAndNav.php'); ?>

  <!-- --------------------------end of navbar ---------------->




  <!------------------------------ item-page ---------------------------->

  <div id="item-page">

    <div class="container">

      <div class="our-item-title">

        <h4>Our Items</h4>
      </div>

      <div class="main-items row">

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">Paper Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">Electroic Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">car tire Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">table</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">Palm trees</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">Palm trees</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>
        </div>

        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>

        </div>
        <div class="card mb-3 col-md-5 col-lg-3 mx-1">
          <img src="<?= url("assets/image/productdetailsimg.jpg") ?>">
          <div class="product_header">wood Recycleing</div>
          <div class="product-location"> Egypt</div>

        </div>
      </div>
    </div>
  </div>



  <!----------------------------- Footer ------------------------------->
  <!-- Footer -->
  <?php include('layouts/footer.php') ?>

</body>

<script src="<?= url("assets/js/items.js") ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>

</html>