<?php
require('init.php') ;

if (!getConfig('SEED')){
    echo "<h1>Access Denied ! </h1>";
    echo "<h3>This Page is disabled by Administrator</h3>";
    die;
}


$users=[]; 

/********* SEED USERS *********/
$users[] = [
    "fullname"=>'khaled',
    "email"=>'khaled@mail.com',
    "password"=>'command',
    "user_type"=>'admin'
]; 

// for($i=0; $i<10; $i++){
//     $users[] = [
//         "fullname"=>'khaled'.$i,
//         "email"=>'khaled'.$i.'@mail.com',
//         "password"=>'command',
//         "user_type"=>'admin'
//     ]; 
   
// };
/******************************/

foreach ($users as $user){
    $isEmailDuplicated = DB::table('users')->select()->where("email = '". $user['email']."'")->first(); 
    if ($isEmailDuplicated) {
        echo "<p><span style='color:red'>[ fail ]</span> ".$user['email']." is already exist ! <p>"; 
    }else {
        DB::table('users')->insert($user)->exec(); 
        echo "<p><span style='color:green'>[ OK ]</span> ".$user['email']." has been saved. <p>"; 
    }; 
}