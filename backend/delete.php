<?php

// print_r($_POST['id']);
// die(); 

include('C:\xampp\htdocs\cms\backend\connection.php');
if ( isset($_GET['id']) ) {
    $id = $_GET['id'];
 $sql = "DELETE FROM users_complain WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "deleted";
  header('Location: viewcomplain_ui.php?msg=Record deleted successfully.');
  exit();
} else {
  echo "Error deleting record: " . $conn->error;
}
die();
}
?>