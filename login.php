<?php include '../db/dbcon.php';
session_start();

?>
<?php
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($con, $query);
    if(!$select_user_query){

    die("Query Failed". mysqli_error($con));

    }
    while($row = mysqli_fetch_array($select_user_query)){

    $db_id = $row['id'];
    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_firstname = $row['firstname'];
    $db_lastname = $row['lastname'];
    $db_userRole = $row['user_role'];

    break;
    }

           if($username !== $db_username and $password !== $db_user_password ){
           header("Location: ../loginform.php");
           } else if($username == $db_username and $password == $db_password){

           $_SESSION['username'] = $db_username;
           $_SESSION['firstname'] = $db_firstname;
           $_SESSION['lastname'] = $db_lastname;
           $_SESSION['user_role'] = $db_userRole;

           header("Location: admin.php");
           } else {
           header("Location:../loginform.php");
           }




}


