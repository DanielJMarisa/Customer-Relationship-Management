<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
<nav class="navbar"><img src="./images/Invenium Brand Concept Light.jpg" class="navlogo">
</nav>


<body>
<div class="container" name="loginSplash" class="drop-shadow curved curved-hz-2">
<h1>Login to CRM</h1>

    <form action="pages/login.php" method="post">
    <label>Username:</label><input type = "text" name = "username" ></input>
    <br>
    <br>
    <label>Password:</label><input type = "password" name = "password"></input>
    <br>
    <br>
    <button type = "submit" name = "login" class="button">Submit</button>
    </form>
</div>
</body>
</html>