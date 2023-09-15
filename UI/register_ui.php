
  <?php
  include('C:\xampp\htdocs\cms\backend\register.php');
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<title>Registration Page</title>
  </head>
  <body>

  <div class="container" style="width: 50%">
  	<form method="post">
  	<div class="form-group"> <h1 style="text-align: center;">Registration Here</h1></div>
    
    <div class="form-group">
      <label for="user">Username</label>
      <input type="text" class="form-control" id="user" placeholder="Enter Username" name="username">
    </div>

    <div class="form-group">
      <label for="uname">Firstname</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="firstname">
    </div>

    <div class="form-group">
      <label for="lname">Lastname</label>
      <input type="text" class="form-control" id="lname" name="lastname" placeholder="Enter Lastname">
    </div>

    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" class="form-control" id="pass" name="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
      <label for="email1">Email</label>
      <input type="email" class="form-control" id="email1" placeholder="Enter Email" name="email">
    </div>

    <div class="form-group">
      <label for="contact1">Contact</label>
      <input type="tele" class="form-control" id="contact1" placeholder="Enter Phone Number" name="contact">
    </div>
    <div class="form-check">
    <?php echo $error; ?>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

  </div>
  </form>
  </body>
  </html>