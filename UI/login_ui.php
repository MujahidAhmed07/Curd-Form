
<?php
include('C:\xampp\htdocs\cms\backend\login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Login Page</title>
</head>
<body>

  <div class="container" style="width: 50%">
	 <form method="post">
	<div class="form-group"> <h1 style="text-align: left;"> Login Here </h1></div>
  
  <div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" id="user" placeholder="Enter Username" name="login_username" >
  </div>

  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="login_password" placeholder="Enter Password">
  </div>

  <button type="submit" class="btn btn-primary" name="login">Submit</button>

</div>

</form>
</body>
</html>