<?php
  session_start();

  if($_SESSION['user']==""){
    echo "<meta http-equiv='refresh' content='0;URL=../login.php' />";
  }
?>
<?php
 
$del1 = $_GET['del'];
//Connect DataBase
include("../config.php");

// Query Data From DataBase
$str = "delete from student where id = '$del1' ";
$obj = mysqli_query($conn,$str);

if($obj){
    echo "Data have been Deleted";
    echo "<meta http-equiv='refresh' content='1;URL=ST_select.php' />";
}else{
    echo "Error";
    echo "<meta http-equiv='refresh' content='1;URL=ST_insert.php' />";
}
?>