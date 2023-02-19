<div class="header-top">
    <div class="container">
      <div class="head">
        <div class="head-logo ">
          <a href="<./index.html"><i class="fa-solid fa-recycle"></i></a>
          <a href="./index.html">O</a>
        </div>
        <div class="head-login col-6 col-md-7 ">
          <div class="login row ">
            <label for="">
              <?= $userName ?>
            </label>
            <a  <?=$loginStatus?> class="mb-1 p-2 p-md-3  col-md-3 text-center "
              href="<?= url("view/login.php") ?>">LogIn</a>
            <a <?= $logoutStatus ?> class="mb-1 p-2 p-md-3  col-md-3 text-center "
              href="<?= url("controller/logout.php") ?>">LogOut</a>
            <a <?= $loginStatus ?> class="mb-1 p-2 p-md-3  col-md-3 text-center"
              href="<?= url("view/account.php") ?>">SignUp</a>
            <a class="mb-1 p-2 p-md-3  col-md-3 text-center" href="<?= url("view/cart.php") ?>"><i
                class="fa-solid fa-cart-shopping"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
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

