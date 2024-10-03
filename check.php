<?php
session_start();
include("config.php");

$A_User = mysqli_real_escape_string($conn,$_POST['adUser']);
$A_Pass = md5($_POST['adPass']);



$str = "select * from admin where A_user = '$A_User' and A_pass = '$A_Pass'";
$obj = mysqli_query($conn,$str);

if($obj && mysqli_num_rows($obj)==1 ){
    echo "Yes Yes Yes";
    $_SESSION['user'] = $A_User;
    echo "<meta http-equiv='refresh' content='1;URL=admin/ST_select.php' />";
}else{
    echo "No No No!...";
    echo "<meta http-equiv='refresh' content='1;URL=login.php' />";
}
?>