<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Document</title>

</head>

<body>
    <h2>Example page</h2>
    <?php 
    echo $_SESSION["username"];
    ?>
    
</body>