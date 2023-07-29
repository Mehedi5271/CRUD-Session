<?php

session_start();

$index = $_GET['index'];

$_SESSION['phone'][$index]['id']=$_POST['id'];
$_SESSION['phone'][$index]['title']=$_POST['title'];
$_SESSION['phone'][$index]['name']=$_POST['name'];

// print_r($_POST);
// die();

$_SESSION['message']= "successfully updated";

header('location:./index.php');



?>