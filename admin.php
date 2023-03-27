<?php session_start();?>
<?php
if (isset($_SESSION['user_role'])){
if($_SESSION['user_role'] == 'Administrator'){
header("Location: ./admin/index.php");
}elseif($_SESSION['user_role'] == 'Broker'){
header("Location: index.php");
}

}

?>