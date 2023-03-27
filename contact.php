<?php
include '../db/db.php';
include 'header.php';
if(isset($_POST['submit'])) {
    $to = "jorge@dmafrica.co.za";
    $subject = wordwrap($_POST['subject'],70);
    $body = $_POST['body'];
    $header = $_POST['email'];
    
    mail($to,$subject,$body,$header);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>



<body>
<div class="container" name="loginSplash" class="drop-shadow curved curved-hz-2">
<h1>Send Email</h1>

    <form action="" method="post">
    <label>Email::</label><input type = "email" name = "email" placeholder="enter your email"></input>
    <br>
    <br>
    <label>Subject:</label><input type = "text" name = "subject" placeholder="enter your subject line"></input>
    <br>
    <br>
    <label>Message:</label><textarea name="body" placeholder="place your message here."></textarea>
    <br>
    <br>
    <button type = "submit" name = "submit" class="button">Submit</button>
    </form>
</div>
</body>
</html>