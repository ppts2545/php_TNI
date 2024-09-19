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

<div class="card text-center" style="padding:15px;">
<h4>PHP : Insert Data</h4>
</div><br> 

<div class="container">
  <form action="ST_insert-p.php" method="POST">
    <div class="form-group">
      <label for="fullname">FullName:</label>
      <input type="text" class="form-control" name="fullname" placeholder="Enter Fullname" required="">
    </div>
    <div class="form-group">
      <label for="nname">Nname :</label>
      <input type="text" class="form-control" name="nname" placeholder="Enter Nickname" required="">
    </div>
    <div class="form-group">
      <label for="midscore">Midterm Score:</label>
      <input type="text" class="form-control" name="mid_score" placeholder="Enter Midterm Score" required="">
    </div>
    <div class="form-group">
      <label for="finalscore">Final Score:</label>
      <input type="text" class="form-control" name="final_score" placeholder="Enter Final Score" required="">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>