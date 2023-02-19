<?php
require('../init.php');
include(path('controller/blog.php'));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/normalize.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="<?= url("assets/css/style.css") ?>">
  <link rel="stylesheet" href="<?= url("assets/css/all.min.css") ?> ">
  <link rel="stylesheet" href="<?= url("assets/css/normalize.css") ?>">

  <style>
    /* Our blogs css */

    .main_blog {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      margin-top: 20px;
      line-height: 1.6;
    }

    .our-blog-title h4 {
      color: var(--green);
      font-size: 30px;
      margin-top: 15px;
    }

    .content .content_p {
      color: var(--gray);
      font-style: italic;
      margin-bottom: 10px;
    }

    .content-date {
      color: var(--green);
      font-weight: bold;
    }

    .main_blog:last-child {
      margin: 35px 0 50px;
    }

    .main_blog .blog img {
      width: 100%;
      height: 300;
    }

    .main_blog .blog {

      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border-radius: 5px;
      padding-bottom: 20px;
      border-radius: 5px;
      margin-bottom: 30px;
    }

    .main_blog .blog:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .main_blog .blog .content {
      padding: 0 10px 10px;
    }

    .main_blog .blog .content h4 {
      color: var(--green);
      font-size: 25px;
      margin-top: 15px;

    }

    .main_blog .blog .content .content-date {
      font-size: 12px;
    }

    .content .content_date span {
      text-decoration: none;
      font-size: 18px;
      color: rgb(6, 71, 28);
    }

    /* end blog css */
  </style>

  <title>Document</title>
</head>

<body>

  <!-- ------------------------new Header Top ----------------------->

  <?php include('layouts/headerAndNav.php'); ?>


  <!--------------------------- end of navbar ---------------------------------->





  <!-- ---------------------------blog-page -------------------------------->

  <div id="Blog_Page">

    <div class="container">
      <div class="our-blog-title">
        <h4>Our Blogs</h4>
      </div>

      <div class="main_blog row g-3">

        <div class="blog mb-3 col-md-5 col-lg-3 mx-1">

          <div class="first">
            <a><img src="<?= url("") ?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>

        <div class="blog mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("") ?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


        <div class="blog mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("") ?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


        <div class="blog mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("") ?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>



        <div class="blog mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("assets/image/Recycling-amico.svg ") ?>" class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


        <div class="blog mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("assets/image/Recycling-amico.svg ") ?>" class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


        <div class="blog mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("assets/image/Recycling-amico.svg ") ?>" class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


        <div class="blog  mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("assets/image/Recycling-amico.svg ") ?>" class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


        <div class="blog  mb-3 col-md-5 col-lg-3 mx-1 ">

          <div class="first">
            <a><img src="<?= url("assets/image/Recycling-amico.svg") ?>" class="card-img-top"></a>
          </div>
          <div class="content ">
            <h4>Paper Recycling</h4>
            <div class="content_p">
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique
                voluptatum minima, fugiat magni </p>
            </div>
            <div class="content_date"><span>6-jan-2023</span></div>
          </div>
        </div>


      </div>
    </div>
  </div>


  <!-- -----------------------Footer------------------------------------------ -->
  <!-- Footer -->
  <?php include('layouts/footer.php') ?>
</body>
<script src="<?= url('assets/js/blog.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>