<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/headernavbarfooter.css">
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/normalize.css"> 
   <style>
    .product .container .product_form {
      border: 2px solid black;
      /* width: 50%; */
      padding: 50px 20px;
      margin: 20px 0;
      border-radius: 10px;
    }


    .product .container .product_form form input,
    .product .container .product_form form textarea {
      padding: 15px 50px;
      margin-bottom: 50px;
      border-radius: 5px;
      outline: none;
      border: 2px solid #5f5f5f;
      margin: 0 auto;
      width: 100%;

    }

    .product .container form .add_product {
      border-radius: 15px;
      text-align: center;
      color: white;
      border: 0px;
      background-color: var(--green);
      display: block;
      padding: 20px;
      margin: 0 auto;

    }

    .product .container .product_form form p {
      margin: 20px 0;
    }
  </style>
</head>

<body>
   <!-- new Header Top -->
    
   <div class="header-top">
    <div class="container">
      <div class="head">
        <div class="head-logo ">
              <a href="./index.html"><i class="fa-solid fa-recycle"></i></a>
              <a href="./index.html">O</a>
        </div>
          <div class="head-login col-6 col-md-7 ">
            <div class="login row ">
              <a class="mb-1 p-2 p-md-3  col-md-3 text-center " href="./login.html">LogIn</a>
              <a class="mb-1 p-2 p-md-3  col-md-3 text-center" href="./account.html">SignUp</a>
              <a class="mb-1 p-2 p-md-3  col-md-3 text-center"  href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
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
            <a class="nav-link" href="./index.html">HOME</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="./blog.html" >BLOG</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="./items.html" >ITEMS</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="products.html" >PRODUCTS</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="./aboutus.html">ABOUT US</a>
          </li>
          <li class="nav-item p-lg-2">
            <a class="nav-link" href="./contact.html">CONTACT US</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<!-- end of navbar -->
  </div>
  <!--add product  -->
  <div class="product">
    <div class="container">
      <div class="product_form col-lg-8 m-auto my-5">
        <form action="">
          <p>product name</p>

          <input type="text" placeholder="please enter product name" id="product_name">
          <br>
          <p>product price</p>

          <input type="text" placeholder="please enter product price" id="product_price">
          <br>

          <p>product description</p>

          <textarea placeholder="product description" id="description"></textarea>
          <br>
          <p>product type</p>

          <input type="text" placeholder="please enter product type" id="product_type">
          <br>
          <p>product material</p>

          <input type="text" placeholder="please enter product material" id="product_material">
          <br>
          <p>product colour</p>

          <input type="text" placeholder="please enter product type" id="product_colour">
          <br>
          <p>product image</p>

          <input type="file" id="product_upload" name="myfile">
          <br>
          <button class="add_product mt-2 " onclick="saveproduct()">add product</button>
        </form>
      </div>
    </div>
  </div>
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
              <li><a href="./index.html">Home</a></li>
              <li><a href="./blog.html">Blog</a>
              </li>
              <li ><a href="./items.html">Items</a></li>
              <li ><a href="./aboutus.html">About Us</a>
              </li>
              <li ><a href="./contactus">contact Us</a>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="/js/addproduct.js"></script>

</html>