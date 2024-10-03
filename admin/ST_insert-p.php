<?php
  session_start();

  if($_SESSION['user']==""){
    echo "<meta http-equiv='refresh' content='0;URL=../login.php' />";
  }
?>
<?php
 
$fullname       = $_POST['fullname'];
$nname          = $_POST['nname'];
$mid_score      = $_POST['mid_score'];
$final_score    = $_POST['final_score'];
$dstfile = "img/person.png";

if(isset($_FILES['fileupload'])){

  $filename = $_FILES['fileupload']['name'];
  $srcfile = $_FILES['fileupload']['tmp_name'];

  $filename = time().$filename;
  $dstfile = "img/$filename";

  if(move_uploaded_file($srcfile,$dstfile)){
      echo "upload success.";
  }else{
      echo "upload fail.";
  }
}

include("../config.php");
// Establishing connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Query Data From DataBase
$str = "insert into student (img,fname,nname,mid_score,final_score) 
        values('$dstfile','$fullname','$nname','$mid_score','$final_score')";
$obj = mysqli_query($conn,$str);

if($obj){
    echo "Data have been Insert";
    echo "<meta http-equiv='refresh' content='3;URL=ST_select.php' />";
}else{
    echo "Error";
    echo "<meta http-equiv='refresh' content='3;URL=ST_insert.php' />";
}
?>