<?php

$con = mysqli_connect("localhost","root","","crm_test_v_1_0.sql");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>