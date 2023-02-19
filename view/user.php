<?php
require('../init.php');
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN'
        crossorigin='anonymous'></script>
    <link rel="stylesheet" href="<?= url("assets/css/all.min.css") ?> ">
    <link rel="stylesheet" href="<?= url("assets/css/user.css") ?> ">

</head>

<body class='bg-light'>
    <div class='user-page '>
        <div class='container'>
            <div class='row'>
                <div class='left col-12 col-md-3  bg-w'>
                    <div class='user-img'>
                        <div class='res-img'>
                            <img id='photo' src='./image/avatar_generic.gif' alt='profile picture'>
                            <input type='file' id='file'>
                            <label for='file' id='uploadNewImg'>Choose Photo</label>
                        </div>
                        <div class='uname'>

                            <!-- <?php foreach ($result as $value) {
                                echo "<h2>$value[fullname]</h2>
                            <div class='address'>$value[street],$value[city]</div>
                            <div class='address'>$value[email]</div>";
                            } ?> -->

                        </div>
                    </div>
                    <div class='profile-nav col-12'>
                        <div class='panel'>
                            <ul class='nav nav-pills nav-stacked col-12'>
                                <li class='active col-12' onclick='changeNav(0)'><a href='#'> <i class='fa fa-user'></i>
                                        Profile</a></li>
                                <li class='col-12' onclick='changeNav(1)'><a href='#'> <i
                                            class='fa-solid fa-envelope'></i> Notification</a></li>
                                <li class='col-12' onclick='changeNav(2)'><a href='##'> <i
                                            class='fa-solid fa-recycle'></i> Items</a></li>
                                <li class='col-12' onclick='changeNav(3)'><a href='##'> <i
                                            class='fa-solid fa-clock'></i> pending Items</a></li>
                                <li class='col-12' onclick='changeNav(4)'><a href='##'> <i
                                            class='fa-solid fa-credit-card'></i> Products</a></li>
                                <li class='col-12' onclick='changeNav(5)'><a href='#'> <i class='fa fa-edit'></i> Edit
                                        profile</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class='row list-separated profile-stat mt-3'>
                        <div class='col-md-4 col-sm-4 col-xs-6'>
                            <div class='uppercase profile-stat-text'> items </div>
                            <div class='uppercase profile-stat-title'> 50 </div>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-6'>
                            <div class='uppercase profile-stat-text'> recycled </div>
                            <div class='uppercase profile-stat-title'> 20 </div>
                        </div>
                        <div class='col-md-4 col-sm-4 col-xs-6'>
                            <div class='uppercase profile-stat-text'> pointes </div>
                            <div class='uppercase profile-stat-title'> 61 </div>
                        </div>
                    </div>
                </div>
                <div class='right col-12 offset-md-1 col-md-8 '>
                    <article>
                        <div class='user-products active col-12'>
                            <h2>User Details</h2>
                            <div class='col'>
                                <div class='card mb-4 bg-w'>
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Full Name</p>
                                            </div>
                                            <div class='col-sm-9'>

                                                <!-- <?php foreach ($result as $value) {
                                                    echo "
                                                <p class='text-muted mb-0'>$value[fullname]</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Email</p>
                                            </div>
                                            <div class='col-sm-9'>
                                                <p class='text-muted mb-0'>$value[email]</p>";
                                                } ?> -->

                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Phone</p>
                                            </div>
                                            <div class='col-sm-9'>

                                                <!-- <?php foreach ($phone as $value) {
                                                    echo "
                                                    <p class='text-muted mb-0'>$value[phone]</p>";
                                                } ?> -->

                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Account</p>
                                            </div>
                                            <div class='col-sm-9'>
                                                <!-- <?php foreach ($result as $value) {
                                                    echo "
                                                <p class='text-muted mb-0'>$value[user_type]</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class='row'>
                                            <div class='col-sm-3'>
                                                <p class='mb-0'>Address</p>
                                            </div>
                                            <div class='col-sm-9'>
                                                <p class='text-muted mb-0'>$value[street],$value[city]</p> ";
                                                } ?> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='61' data-fgcolor='#e06b7d'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='red'>Pointes</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='50' data-fgcolor='#4CC5CD'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='terques'>Items</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='5' data-fgcolor='#96be4b'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 25px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='green'>Products</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class='panel'>
                                        <div class='panel-body bg-w pb-2'>
                                            <div class='bio-chart'>
                                                <div style='display:inline;width:100px;height:100px;'><canvas
                                                        width='100' height='100px'></canvas><input class='knob'
                                                        data-width='100' data-height='100' data-displayprevious='true'
                                                        data-thickness='.2' value='10' data-fgcolor='#cba4db'
                                                        data-bgcolor='#e8e8e8'
                                                        style='width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; background: none;'>
                                                </div>
                                            </div>
                                            <div class='bio-desk'>
                                                <h4 class='purple'>Pending Items</h4>
                                                <p>published : 15 July</p>
                                                <p>Deadline : 15 August</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class='user-products  col-12'>
                            <h2>Notification</h2>
                            <div class='alert alert-dark' role='alert'>
                                <i class='fa-solid fa-envelope-open'></i> Your Items Is Accepted <a href='#'
                                    class='alert-link'></a>
                            </div>
                            <div class='alert alert-danger' role='alert'>
                                <i class='fa-solid fa-envelope-open'></i> Your Items Is Rejected <a href='#'
                                    class='alert-link'></a>
                            </div>
                            <div class='alert alert-dark' role='alert'>
                                <i class='fa-solid fa-envelope-open'></i> Your Items Is Accepted <a href='#'
                                    class='alert-link'></a>
                            </div>
                            <div class='alert alert-danger' role='alert'>
                                <i class='fa-solid fa-envelope-open'></i> Your Items Is Rejected <a href='#'
                                    class='alert-link'></a>
                            </div>
                            <div class='alert alert-dark' role='alert'>
                                <i class='fa-solid fa-envelope-open'></i> Your Items Is Accepted <a href='#'
                                    class='alert-link'></a>
                            </div>
                            <div class='alert alert-danger' role='alert'>
                                <i class='fa-solid fa-envelope-open'></i> Your Items Is Rejected <a href='#'
                                    class='alert-link'></a>
                            </div>
                        </div>

                        <div class='user-products col-12'>
                            <h2>Your Items</h2>
                            <table class='table table-bordered col-12'>
                                <thead>
                                    <tr class='table-dark'>
                                        <th scope='col'>number</th>
                                        <th scope='col'>image</th>
                                        <th scope='col'>Name</th>
                                        <th scope='col'>discription</th>
                                        <th scope='col'>status</th>
                                        <th scope='col'>pointes</th>

                                    </tr>
                                </thead>
                                <tbody class='align-middle'>

                                    <!-- <?php
                                    foreach ($item as $value) {
                                        $status = $value['item_status'];
                                        echo "
                                        <tr class='$status'>
                                        <th scope='row'>$value[item_id]</th>
                                        <td><img src='$value[image]'
                                                alt='img'></td>
                                        <td>$value[name]</td>
                                        <td>$value[description]</td>
                                        
                                        <td>$value[item_status]</td>
                                        <td>$value[points]</td>
                                    </tr>";
                                    } ?> -->


                                </tbody>
                            </table>
                        </div>

                        <div class='user-products col-12'>
                            <h2>Pending Items</h2>
                            <div class='card mb-3' style='max-width: 100%;'>
                                <div class='row g-0'>
                                    <div class='col-md-4'>

                                        <!-- <?php foreach ($pending as $value) {
                                            echo "
                                    <img src='$value[image]' class='col-12 rounded-start' alt='...'>
                                  </div>
                                  <div class='col-md-8  bg-warning'>
                                    <div class='card-body'>
                                    
                                      <h5 class='card-title h2'>$value[name]</h5>
                                      <p class='card-text'>$value[description]</p>";
                                        } ?> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class='user-products col-12'>
                    <h2>Products</h2>
                    <div class='card mb-3' style='max-width: 100%;'>
                        <div class='row g-0'>
                            <div class='col-md-4'>
                                <img src='./image/pngwing.com.png' class='img-fluid rounded-start' alt='...'>
                            </div>
                            <div class='col-md-8 bg-warning'>
                                <div class='card-body'>

                                    <!-- <?php foreach ($product as $value) {
                                        echo "
                                      <h5 class='card-title h2'>$value[name]</h5>
                                      <p class='card-text'>$value[description]</p> ";
                                    } ?> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='user-products'>
                    <div class='container'>
                        <div class='.col-xs-4 .col-md-offset-2'>
                            <div class='panel panel-default panel-info Profile'>
                                <div class='h1'> Edit & Update </div>
                                <div class='alert alert-success'>
                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Success!</strong> Profile successfully saved
                                </div>
                                <div class='alert alert-warning'>
                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Oops!</strong> Profile not saved. Try later.
                                </div>
                                <div class='panel-body'>
                                    <div class='form-horizontal'>
                                        <form>
                                            <div class='form-group mb-4'>
                                                <label class='control-label'>First Name</label>
                                                <div class=''>
                                                    <input class="form-control bg-w" type='text' name='firstName'
                                                        placeholder='First Name' ng-model='me.firstName'>
                                                </div>
                                            </div>
                                            <div class='form-group mb-4'>
                                                <label class='control-label'>Last Name</label>
                                                <div class=''>
                                                    <input class='form-control bg-w type=' text' name='lastName'
                                                        placeholder='Last Name' ng-model='me.lastName'>
                                                </div>
                                            </div>
                                            <div class='form-group mb-4'>
                                                <label class='control-label'>Email</label>
                                                <div class=''>
                                                    <input class='form-control bg-w type=' text' name='email'
                                                        placeholder='Email' ng-model='me.email'>
                                                </div>
                                            </div>
                                            <div class='form-group mb-4'>
                                                <label class='control-label'>Password</label>
                                                <div class=''>
                                                    <input class=form-control bg-w type='password' name='department'
                                                        placeholder='Password' ng-model='me.email'>
                                                </div>
                                            </div>
                                            <div class='form-group mb-4'>
                                                <label class='col-sm-2 control-label'>Address</label>
                                                <div class=''>
                                                    <input class='form-control bg-w type=' text' name='location'
                                                        placeholder='Location' ng-model='me.email'>
                                                </div>
                                            </div>
                                            <div class='form-group mb-4'>
                                                <label class=' control-label'>Phone</label>
                                                <div class=''>
                                                    <input class='form-control bg-w type=' text' name='phone'
                                                        placeholder='xxx-xxx-xxxx' ng-model='me.email'>
                                                </div>
                                            </div>
                                            <div class='form-group mb-4'>
                                                <div class=''>
                                                    <button class='btn btn-primary ng-click='
                                                        updateMe()'>Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- end form-horizontal -->
                                </div> <!-- end panel-body -->

                            </div> <!-- end panel -->


                        </div> <!-- end size -->
                    </div> <!-- end container-fluid -->
                </div>

                </article>
            </div>
        </div>
    </div>
    </div>

    <script src="<?= url('assets/js/user.js') ?>"></script>
</body>

</html>