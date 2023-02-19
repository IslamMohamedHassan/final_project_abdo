<?php
require('../init.php');

include(path('controller/products.php'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= url("assets/css/headernavbarfooter.css") ?>">
  <!-- <link rel="stylesheet" href="<?= url("assets/css/style.css") ?>"> -->
  <link rel="stylesheet" href="<?= url("assets/css/all.min.css") ?> ">
  <link rel="stylesheet" href="<?= url("assets/css/normalize.css") ?>">
  <title>Document</title>

  <style>
    .img_blog,
    .img_item {
      border-radius: 5px 5px 0 0;
    }

    .item .first-item {
      margin: 30px;
    }

    .product_header a {
      text-decoration: none;
    }

    .product-price {
      color: #128c37;
      font-size: 15px;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .product-location {
      font-size: 20px;
      color: #333333;
      position: relative;
      padding: 0 25px 0 0;
    }

    .main-items {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      padding: 10px 0px;
      margin: 10px 0px 25px;
    }

    .item {
      margin-left: 5px;
      border-radius: 5px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      padding-bottom: 20px;
      border-radius: 5px;
    }

    .card img {
      width: 100%;
      height: 300px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <!-- Start Header Section
    =====================================================-->
  <!-- new Header Top -->
  <?php include('layouts/headerAndNav.php'); ?>

  <!-- item-page -->

  <div class="item-page">
    <div class="container">
      <div class="our-item-title">
        <h4>Products</h4>
      </div>
      <div class="main-items row align-items-center flex-column flex-lg-row">

        <!-- item1 -->

        <div class="card col-md-6  col-lg-3 mb-3 ">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' width="300" height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">wood Recycleing</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
        <!-- item2 -->
        <div class="card col-md-6  col-lg-3 mb-3 ">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">Paper Recycleing</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
        <!-- item 3 -->
        <div class="card col-md-6 col-lg-3 mb-3 ">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">Electroic Recycleing</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
      </div>


      <div class="main-items row align-items-center flex-column flex-lg-row">


        <!-- item 4 -->
        <div class="card col-md-6 col-lg-3 mb-3">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' width="300" height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">car tire Recycleing</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
        <!-- item 5 -->
        <div class="card col-md-6 col-lg-3 mb-3">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' width="300" height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">Wood Recycleing</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
        <!-- item 6 -->
        <div class="card col-md-6 col-lg-3 mb-3">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' width="300" height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">table</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>

      </div>

      <div class="main-items row align-items-center flex-column flex-lg-row">


        <!-- item 7 -->
        <div class="card col-md-6 col-lg-3 mb-3">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' width="300" height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product"> table</span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
        <!-- item 8 -->
        <div class="card col-md-6 col-lg-3 mb-3">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' width="300" height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">Palm trees </span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>
        <!-- item 9 -->
        <div class="card col-md-6 col-lg-3 mb-3">
          <img src='<?= url("assets/image/productdetailsimg.jpg") ?>' height="200" class="img_item" title=""
            alt="recycle">
          <div class="container">
            <div class="product_header">
              <a href='productdetailspage.html'>
                <h2 class="name">
                  <span class="name-product">Palm trees </span>
                </h2>
              </a>
            </div>
            <div class="product-price">$20</div>
            <div class="product-location">Egypt</div>
          </div>
        </div>

      </div>


    </div>
  </div>
  <!-- Footer -->
  <?php include('layouts/footer.php') ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>