<?php 

function dd ($var){
    echo "<pre>"; 
    print_r($var);
    die;
}

function url ($uri=""){
    $url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $new_url = []; 
    preg_match('/\w+:\/\/[^\/]+\/[^\/]+\//',$url  , $new_url); 
    return  $new_url[0].$uri;
}

function path ($path=""){
    $url = $_SERVER['REQUEST_URI'];
    $new_url = []; 
    preg_match('/[^\/]+/',$url  , $new_url); 
    return  $_SERVER['DOCUMENT_ROOT'].'/'.$new_url[0].'/'.$path;
}

function getConfig ($configSection){
    $configFile = file_get_contents(path('env.json'));
    return json_decode($configFile)->$configSection;
}

function redirect($url){
    return header("location: ".url($url));
}
function sessionKey($key, $value){
    $_SESSION[$key]= $value; 
}
function sessionKeyMany(array $keysValues){
    foreach($keysValues as $key=>$value){
        $_SESSION[$key]=$value;
    }
}
function session ($key=NULL){
    if(isset($_SESSION[$key]) && $key!=NULL){
        return $_SESSION[$key]; 
    }else if (isset($_SESSION)){
        return $_SESSION;
    }
}
function sessionRemove($key){
    if(isset($_SESSION[$key])){
        unset($_SESSION[$key]);
    }
}
function sessionRemoveMany(array $keys){
    foreach ($keys as $key){
        if (isset($_SESSION[$key])) unset($_SESSION[$key]);
    }
}

