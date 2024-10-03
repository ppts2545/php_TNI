<?php
  session_start();

  if($_SESSION['user']==""){
    echo "<meta http-equiv='refresh' content='0;URL=../login.php' />";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
    <?php 
        include("../config.php");

        $edit1 = $_GET['edit'];

        $str = "select * from student where id = '$edit1' ";
        $obj = mysqli_query($conn,$str);

        $result = mysqli_fetch_array($obj);
    ?>

<div class="card text-center" style="padding:15px;">
<h4>PHP : Edit Data</h4>
</div><br> 

<div class="container">
  <form action="ST_edit-p.php" method="POST">
    <div class="form-group">
      <label for="fullname">FullName:</label>
      <input type="text" value="<?= $result['fname'];?>" class="form-control" name="fullname" placeholder="Enter Fullname" required="">
    </div>
    <div class="form-group">
      <label for="nname">Nickname :</label>
      <input type="text" value="<?=$result['nname']; ?>"class="form-control" name="nname" placeholder="Enter Nickname" required="">
    </div>
    <div class="form-group">
      <label for="midscore">Midterm Score:</label>
      <input type="text" value="<?=$result['mid_score']; ?>" class="form-control" name="mid_score" placeholder="Enter Midterm Score" required="">
    </div>
    <div class="form-group">
      <label for="finalscore">Final Score:</label>
      <input type="text" value="<?=$result['id']; ?>" class="form-control" name="final_score" placeholder="Enter Final Score" required="">
    </div>
    
    <div class="form-group">
      <img src="" alt="">
      <label for="Picture">Picture:</label>
      <input type="file" class="form-control" name="final_score" >
    </div>

    <input type="hidden" name="editID" value="<?=$result['id']; ?>"/>
    <input type="submit"  name="submit" class="btn btn-primary" style="float:right;" value="Submit">

  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>