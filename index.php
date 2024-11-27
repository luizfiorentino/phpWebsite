<?php 
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="search.php" method="post">
    <label for="search">Search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder="Search">
       <button>Search</button>
</form>

<h3>Sign up</h3>

<form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Sign up</button>
</form>

<h3>Change account</h3>

<form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Update</button>
</form>

<h3>Delete account</h3>

<form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <button>Delete</button>
</form>

</body>

</html>



<!-- <body>
    // The FORM 
   <main>
    <form action="includes/formhandler.php" method="post">
        <label for="firstname">Firstname?</label>
        <input required="" id="firstname" type="text" name="firstname" placeholder="Firstname..."/>

        <label for="lastname">Lastname?</label>
        <input id="lastname" type="text" name="lastname" placeholder="Laststname..."/>

        <label for="favouritepet">Favourite Pet?</label>
        <select id="favouritepet" type="text" name="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
</select>
        <button type="submit">Submit</button>

    </form>
</main>
</body> -->