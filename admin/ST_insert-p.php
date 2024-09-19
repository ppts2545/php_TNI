<?php
 
$fullname       = $_POST['fullname'];
$nname          = $_POST['nname'];
$mid_score      = $_POST['mid_score'];
$final_score    = $_POST['final_score'];

include("../config.php");
// Establishing connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Query Data From DataBase
$str = "insert into student (fname,nname,mid_score,final_score) 
        values('$fullname','$nname','$mid_score','$final_score')";
$obj = mysqli_query($conn,$str);

if($obj){
    echo "Data have been Insert";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}else{
    echo "Error";
    echo "<meta http-equiv='refresh' content='3;URL=ST_insert.php' />";
}
?>