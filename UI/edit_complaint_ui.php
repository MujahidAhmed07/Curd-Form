<?php
include('C:\xampp\htdocs\cms\backend\edit_complaint.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Edit Complain</title>
</head>
<body>

<div class="container" style="width: 50%">
  <form method="post">
  <div class="form-group"> <h1 style="text-align: center;"> Edit Complaint </h1></div>
  
  <div class="form-group">
    <label for="text">Write Complaint</label>
    <textarea class="form-control" id="text" rows="8" name="complaint_edit"><?php echo $complain['complain_message'] ;  ?></textarea>
      <small id="text" class="form-text"><?php echo isset($err) ?  $err : ""; ?></small>
  </div>
       <button type="submit" class="btn btn-primary" name="submit_edit">Update</button>
  </div>
 
</form>
</body>
</html>
