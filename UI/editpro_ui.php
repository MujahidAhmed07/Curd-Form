
<?php
include('C:\xampp\htdocs\cms\backend\dashboard.php');
include('C:\xampp\htdocs\cms\backend\editpro.php');
$msg ="";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Edit Profile Page</title>
</head>
<body>

<div class="container" style="width: 40%">
	<form method="post" enctype="multipart/form-data">
	<div class="form-group"> <h1 style="text-align: center;">Edit Profile Here</h1></div>
  
  <div class="form-group">
    <label for="user">Username : </label>
    <input  class="form-control" id="user" value="<?php echo  isset($open['username']) ? $open['username'] : "" ?>" readonly>
  </div>

  <div class="form-group">
    <label for="uname">Firstname : </label>
    <input type="text" class="form-control" id="uname" name="first" value="<?php echo  isset($rows['firstname']) ? $rows['firstname'] : "" ?>">
  </div>

  <div class="form-group">
    <label for="lname">Lastname : </label>
    <input type="text" class="form-control" id="lname" name="last"  value="<?php echo  isset($rows['lastname']) ? $rows['lastname'] : "" ?>">
  </div>

  <div class="form-group">
    <label for="email1">Email : </label>
    <input type="email" class="form-control" id="email1" name="uemail" value="<?php echo  isset($rows['email']) ? $rows['email'] : "" ?>">
  </div>

   <div class="form-group">
    <label for="phone">Phone : </label>
    <input type="phone" class="form-control" id="phone" name="uphone" value="<?php echo  isset($rows['phone']) ? $rows['phone'] : "" ?>">
  </div>

   <div class="form-group">
    <label for="pass">Current Password :</label>
    <input type="password" class="form-control" id="pass" name="cpass" >
  </div>
   <div class="form-group">
    <label for="pass1">New Password :</label>
    <input type="password" class="form-control" id="pass1" name="newpass" >
  </div>
  <div class="custom-file" style="padding-bottom: 10px;">
        <input type="file" class="custom-file-input" name="fileupload">
        <label class="custom-file-label" for="customFile">Choose file</label>
 </div>
      <button type="submit" class="btn btn-primary" name="update_profile" style="margin-top: 10px;">Update</button>
</form>
</div>

</body>
</html>