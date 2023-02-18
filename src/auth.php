<?php

class auth {
    public static function login($email , $password){
        $attemp = DB::table('users')->select()->where("email = '$email' and password = '$password'")->first();
        if ($attemp){
            sessionKeyMany(['login'=>1 , 'user'=>$attemp->id]);
            return true;
        }
        return false ; 
    }
    public static function user (){
        if (session('user')){
            return  DB::table('users')->select('id , name , email')->where("id = ".session('user'))->first(); 
        }
    }
    public static function logout(){
        sessionRemoveMany(['login', 'user']); 
        redirect('view/home.php'); 
    }
    //access(pages); 
}
?>