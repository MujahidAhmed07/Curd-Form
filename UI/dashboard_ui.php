
<?php
include('C:\xampp\htdocs\cms\backend\dashboard.php');
$image = $rows['image_path'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>DashBoard</title>
</head>
<body>
	<div class="container" style="width:50%; padding-block-start: 30px;">
		<form method ="post">
			<h1 align="center">DASHBOARD</h1>

  <div class="text-center" align="center">
  	<?php echo !empty( $image ) ? "<img src='$image' class='rounded';>" :"";?>
  </div>
	
 


<h2 align="center">welcome <?php echo (isset($rows['firstname'],$rows['lastname'])) ? $rows['firstname']." ".$rows['lastname'] : ""; ?></h2>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">Select</a>
  <a href="newcomplain_ui.php" class="list-group-item list-group-item-action">New Complain</a>
  <a href="viewcomplain_ui.php" class="list-group-item list-group-item-action">View Complain</a>
  <a href="editpro_ui.php" class="list-group-item list-group-item-action">Edit Profile</a>
</div>
<button type="submit" name="logout">logout</button>
		</form>

</div>

</body>
</html>