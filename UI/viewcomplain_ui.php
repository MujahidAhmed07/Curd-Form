<?php 

include('C:\xampp\htdocs\cms\backend\viewcomplain.php');
 			  while($result = $show->fetch_assoc()){
            	$msg = $result['complain_message'];
            	$date = $result['publish_date'];
              $pvt_id = $result['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>View Complain</title>
</head>
<body>
<div class="container" align="center" style="width:50%; padding-block-start: 30px";>
  <form method="post">
 <div class="card text-left">
  <div class="card-header">
    Your Complaint
  </div>
  <div class="card-body">
    <p class="card-text"><?php echo $msg;?></p>
    <div align="right">Publish date : <?php echo $date ;?></div>
  </div>
  <div class="card-footer text-muted">
    <a href="edit_complaint_ui.php?id=<?php echo $pvt_id?>" class="btn btn-primary">Edit</a>
    <a href="delete_ui.php?id=<?php echo $pvt_id?>" class="btn btn-primary">Delete</a>
  </div>
</div>

</form>
</div>
</body>
</html>

<?php
        }
?>