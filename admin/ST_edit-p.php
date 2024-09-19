<?php
 
$fullname       = $_POST['fullname'];
$nname          = $_POST['nname'];
$mid_score      = $_POST['mid_score'];
$final_score    = $_POST['final_score'];
$editID = $_POST['editID'];

//Connect DataBase
include("../config.php");

// Query Data From DataBase
$str = "update student set fname = '$fullname', nname = '$nname',
         mid_score = '$mid_score' , final_score = '$final_score'
         where id = '$editID' " ;
$obj = mysqli_query($conn,$str);

if($obj){
    echo "Data have been Insert";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}else{
    echo "Error";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}
?>