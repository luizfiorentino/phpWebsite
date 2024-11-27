<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] === "POST") {
$firstname = htmlspecialchars($_POST["firstname"]); 
    $lastname = htmlspecialchars($_POST["lastname"]) ;
    $favouritpets = htmlspecialchars($_POST["favouritepet"]) ;
   if(empty($firstname)) {
exit();
header("Location: ../index.php");
}
    echo "These are the data submitted by the user";
    echo "<br>";
    echo  $firstname;
    echo "<br>";
    echo  $lastname;
    echo "<br>";
    echo  $favouritpets;

    header("Location: ../index.php");

} else {
    header("Location: ../index.php");
}