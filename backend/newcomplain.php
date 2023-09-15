<?php
include('dashboard.php');
// print_r($_SESSION);
// die();
    if(! isset($_SESSION['loggedUser'])){
          header('Location: login_ui.php');
          exit();
     }
		if(isset($_POST['submit_complaint'])){
		 if(isset($_POST['complaint_text']) && !empty($_POST['complaint_text'])){
		 	$post_complain = $_POST['complaint_text'];
			$id = $_SESSION['loggedUser'];
			$stmt = $conn->prepare("INSERT INTO users_complain( complain_message , user_id ) VALUES ( ? , ? )");
			$stmt->bind_param("si",$post_complain,$id);
			$stmt->execute();
			$stmt->close();
			$visible = "Complaint Submit Successfully";
		 }else{
		 	$visible = "Complaint cannot be empty";
		 }

	}

// session_unset();
// session_destroy();

	$conn -> close();
?>