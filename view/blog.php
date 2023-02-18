<?php
require('../init.php');
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

  <link rel="stylesheet" href="<?= url("assets/css/style.css")?>">
  <link rel="stylesheet" href="<?= url("assets/css/all.min.css")?> ">
  <link rel="stylesheet" href="<?=url("assets/css/normalize.css") ?>">  
    
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
  <div class="header-top">
      <div class="container">
        <div class="head">
          <div class="head-logo ">
                <a href="<./index.html"><i class="fa-solid fa-recycle"></i></a>
                <a href="./index.html">O</a>
          </div>
            <div class="head-login col-6 col-md-7 ">
              <div class="login row ">
                <a class="mb-1 p-2 p-md-3  col-md-3 text-center " href="<?=url("view/login.php")?>">LogIn</a>
                <a class="mb-1 p-2 p-md-3  col-md-3 text-center" href="<?= url("view/account.php")?>">SignUp</a>
                <a class="mb-1 p-2 p-md-3  col-md-3 text-center"  href="<?= url("view/cart.php")?>"><i class="fa-solid fa-cart-shopping"></i></a>
              </div>
          </div>
        </div>
      </div>
  </div>

  <!-- end of header -->

  <!-- new navbar -->

  <nav class="navbar navbar-expand-lg nav_bar ">
      <div class="container-fluid">
        <button class="navbar-toggler navbar-light bg-light  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon   "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item p-lg-2">
              <a class="nav-link" href="<?=url("view/home.php")?>">HOME</a>
            </li>
            <li class="nav-item p-lg-2">
              <a class="nav-link" href="<?= url("view/blog.php")?>" >BLOG</a>
            </li>
            <li class="nav-item p-lg-2">
              <a class="nav-link" href="<?= url("view/items.php")?>" >ITEMS</a>
            </li>
            <li class="nav-item p-lg-2">
              <a class="nav-link" href="<?= url("view/products.php")?>" >PRODUCTS</a>
            </li>
            <li class="nav-item p-lg-2">
              <a class="nav-link" href="<?= url("view/aboutus.php")?>">ABOUT US</a>
            </li>
            <li class="nav-item p-lg-2">
              <a class="nav-link" href="<?= url("view/contact.php")?>">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>

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
            <a><img src="<?=url("")?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
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
            <a><img src="<?=url("")?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
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
            <a><img src="<?=url("")?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
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
            <a><img src="<?=url("")?>assets/image/Recycling-amico.svg " class="card-img-top"></a>
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
            <a><img src="<?=url("assets/image/Recycling-amico.svg ")?>" class="card-img-top"></a>
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
            <a><img src="<?=url("assets/image/Recycling-amico.svg ")?>" class="card-img-top"></a>
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
            <a><img src="<?=url("assets/image/Recycling-amico.svg ")?>" class="card-img-top"></a>
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
            <a><img src="<?=url("assets/image/Recycling-amico.svg ")?>" class="card-img-top"></a>
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
            <a><img src="<?=url("assets/image/Recycling-amico.svg")?>" class="card-img-top"></a>
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
    <div class="footer">
      <div class="container">
        <div class="row justify-content-between">
          <div class="Recycling-info   col-lg-4">
            <h2 class="capital">Recycling</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Sapient maiores magnam dolores temporibus quas quae? Esse harum error eligendi
            </p>
            <div class="footer-icon">
              <a href="#"><i class="fab fa-facebook-f icon pd-10 white-color-b"></i></a>
              <a href="#"><i class="fab fa-twitter icon pd-10 white-color-b"></i></a>
              <a href="#"><i class="fab fa-linkedin-in icon pd-10 white-color-b"></i></a>
              <a href="#"><i class="fab fa-behance icon pd-10 white-color-b"></i></a>
            </div>
          </div>
          <div class="useful-links col-md-5 col-lg-4 ">
            <h2 class="">useful links</h2>
            <ul class="">
              <li><a href="#"> Lorem ipsum dolor sit</a></li>
              <li><a href="#"> amet consectetur elit</a>
              </li>
              <li><a href="#"> Explicabo culpa doloribus</a></li>
              <li><a href="#"> iusto excepturi reiciendis</a>
              </li>
              <li ><a href="#"> perspiciatis ab aliquid</a>
              </li>
            </ul>
          </div>
          <div class="additional col-md-5   col-lg-4   ">
            <h2 class="capital">additional pages</h2>
            <ul class="">
              <li><a href="<?= url("view/home.php")?>">Home</a></li>
              <li><a href="<?= url("view/blog.php")?>">Blog</a>
              </li>
              <li ><a href="<?= url("view/items.php")?>">Items</a></li>
              <li ><a href="<?= url("view/aboutus.php")?>">About Us</a>
              </li>
              <li ><a href="<?= url("view/contact.php")?>">contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p class=""> all copyright © 2023 Recycling.</p>
      </div>
    </div> 

</body>
<script src="<?=url('assets/js/blog.js')?>"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>