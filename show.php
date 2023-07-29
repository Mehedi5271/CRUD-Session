<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="./add.php">Add New</a>

<?php 

session_start();

$index = $_GET['index'];

 $data =$_SESSION['phone'][$index];

//  print_r($data);

?>

<form action="" method="post">
   <table border="1">
    
    <thead>
       
  <tr>
    <th>Serial</th>
    <th>Title</th> 
    <th>Name</th> 
  </tr>
   </thead>

   <tbody>
  <tr>
    <td><?php echo $data['id'] ?>  </td>
    <td><?php echo $data['title'] ?></td>
    <td><?php echo $data['name']?></td>
  
  </tr>
   </tbody>

</table>
</form>
    
</body>
</html>