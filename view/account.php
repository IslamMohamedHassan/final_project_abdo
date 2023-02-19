
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../../css/normalize.css">  
  <title>Document</title>
</head>
<body>
  <!-- Start Header Section
  =====================================================-->
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

  <!-- start sign up -->

    <div class="account">
      <div class="container">
        <form method="post" action="../index.php" >
          <p class="creatAccount">
            Create your account
          </p>
          <div class="name col-12 col-md-6">
            <input id="fullName" name="fullname" type="text" placeholder="Full Name">

          </div>
          <div class="U_E_P col-md-6">
            <input id="user_name" name="username" type="text" placeholder="User name">
            <input id="email" name="email" type="text" placeholder="Email">
            <small id="error_email"></small>
            <input id="password" name="password" type="password" placeholder="password">
            <small id="error_pass"></small>
            <!-- <br>
            <small style="color: red;display: none;" id="error">the password must be more than 8 characters</small>
            <br> -->
          </div>
          <div class="location col-md-6">
            <input id="city" type="text" placeholder="City">
            <input id="address" type="text" placeholder="Address">
          </div>
          <div class="signUp">
            <p> ~~~~ Or sign up with ~~~~~ </p>
            <div>
            <a href="#"><i id="facebook" class="fa-brands fa-facebook fa-2x"></i></a>
            <a href="#"><i id="google" class="fa-brands fa-google fa-2x"></i></a>
          </div>
          </div>
          <div class="submit"> 
            <input id="submit" name="submit" type="submit" value="Submit">
          </div>
      </form>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="../../js/account.js"></script>
</body>

</html>