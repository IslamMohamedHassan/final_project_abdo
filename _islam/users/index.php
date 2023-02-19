<?php
// $user="";
// echo isset($usert);
// require_once("../connection.php");
// $action=isset($_GET["action"])?$_GET["action"]:"";

// get all data from users

$sql="select * from users";
$stmt=$db->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(pdo :: FETCH_ASSOC);

// get all data from phones
$sql="select * from phones";
$stmt=$db->prepare($sql);
$stmt->execute();
$phone=$stmt->fetchAll(pdo :: FETCH_ASSOC);

// get all data from items
$sql="select * from items";
$stmt=$db->prepare($sql);
$stmt->execute();
$item=$stmt->fetchAll(pdo :: FETCH_ASSOC);
// print_r($item);
// foreach ($item as $value) {
//     echo "$value[item_id]
//     $value[item_status]
//     ";
// }
foreach ($item as $value) {
    if ("$value[item_status]" == "pending") {
        $pending[] = $value;
        // print_r($pending);
    }elseif ("$value[item_status]" == "approved") {
        $approved[] = $value;
        // print_r($approved);
    }elseif ("$value[item_status]" == "rejected") {
        $rejected[] = $value;
        // print_r($rejected);
    }
}
/////////////////////////////////////////
// get all data from products
$sql="select * from products";
$stmt=$db->prepare($sql);
$stmt->execute();
$product=$stmt->fetchAll(pdo :: FETCH_ASSOC);
// print_r($product);
// inject view ---------
require("views/user.php");
