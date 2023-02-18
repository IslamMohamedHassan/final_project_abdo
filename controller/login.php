<?php
require ('../init.php');
//login
$login = auth::login(request()->email , request()->password);

if ($login){
    redirect('view/home.php');
}else {
    redirect('view/login.php');
}

