<?php session_start();  ?>
<?php include '../db/dbcon.php';

$_SESSION['username']=null;

header ("Location: ../loginform.php");
?>
