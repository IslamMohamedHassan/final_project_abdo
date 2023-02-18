<?php
require ('../init.php');

//login
$login = auth::login(request()->email , request()->password);

if ($login){
    redirect(url('view/home.php'));
}else {
    redirect(url('view/login.php'));
}

