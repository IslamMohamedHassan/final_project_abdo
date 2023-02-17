<?php
    require_once("./connection.php");
    
    $fullname=$_POST["fullname"];
    $email = $_POST["email"];
    $password=$_POST["password"];
if(isset($_POST['submit']))
{   
    
    $sql = "insert into users (fullname,email,password) values('$fullname','$email','$password')";
    $conn->prepare($sql)->execute();
    header("location:../../FinalProjectphp/user.html");
}


if($_POST['login']){

    
    $sql="select * from users";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $user=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    foreach ($user as $value){
    if($email==$value['email']){
        if($password==$value['password'])
        {   
            session_start();
            $_SESSION['user']=$value;
            header("location:../../FinalProjectphp/user.html");
            break;
            
        }

    }
    header("location:../user/view/login.php");
}
}
$remember=$_POST['remember'];
if(!empty($remember))
{
    setcookie("email",$email,time()+ (86400 * 90), "/");
    setcookie("password",$password,time()+ (86400 * 90), "/");
}elseif(isset($_COOKIE["email"])&& isset($_COOKIE["password"]))
{
    setcookie("email","");
    setcookie("password","");
}











// if(isset($_POST['login']))
// {   
//     // echo 'hi';
//     $username = $_POST["username"];
//     // $password = $_POST["password"];

//     $select="select * from users";
//     $stmt=$conn->prepare($select);
//     $stmt->execute();
//     $user=$stmt->fetch(pdo :: FETCH_ASSOC);
//     print_r($user);
//     foreach($user as $value)
//     {
//         if($username==$value["username"])
//         {   
//             echo 'jjj';
//             // header("location:../../../../user.html");
//         } else {echo 'error';}
            
        
//     }

// }

?> 