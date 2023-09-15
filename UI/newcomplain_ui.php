
<?php
include('C:\xampp\htdocs\cms\backend\newcomplain.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Complaint Page</title>
</head>
<body>

<div class="container" style="width: 40%">
	<form method="post">
	<div class="form-group"> <h1 style="text-align: center;"> Complaint Here </h1></div>
  
  <div class="form-group">
    <label for="uname">Firstname</label>
    <input class="form-control" id="uname" readonly value="<?php  echo isset($rows['firstname']) ? $rows['firstname'] : "" ; ?>">
  </div>

  <div class="form-group">
    <label for="lname">Lastname</label>
    <input class="form-control" id="lname" readonly
     value="<?php echo isset($rows['lastname']) ? $rows['lastname'] :"";?>">
  </div>

  <div class="form-group">
    <label for="email1">Email</label>
    <input  class="form-control" id="email1" readonly value="<?php echo isset($rows['email']) ? $rows['email'] :"";?>">
  </div>

  <div class="form-group">
    <label for="text">Write Complaint</label>
    <textarea class="form-control" id="text" rows="8" name="complaint_text" value="hey"></textarea>
    <small  class="form-text"><?php echo isset($visible) ?  $visible : ""; ?></small>
  </div>
       <button type="submit" class="btn btn-primary" name="submit_complaint">Submit</button>
  </div>
 
</form>
</body>
</html>