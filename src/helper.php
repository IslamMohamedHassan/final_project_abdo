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

//sessions
//cockies
