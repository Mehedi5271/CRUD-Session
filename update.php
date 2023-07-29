<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

session_start();

$index = $_GET['index'];

$data = $_SESSION['phone'][$index];


?>

<form action="./edit.php?=index=<? echo$index; ?>" method="post">
    <input type="text" name="id" placeholder="Enter your Id" value="<?=  $data['id'] ?>" >
    <input type="text" name="title" placeholder="Enter your title"  value="<?=  $data['title'] ?>" >
    <input type="text" name="name" placeholder="Enter your Name"  value="<?=  $data['name'] ?>" >


    <button type="submit">Update</button>

</form>
    
</body>
</html>