<?php
include('connection.php');
session_start();
			    if(! isset($_SESSION['loggedUser'])){
          header('Location: login_ui.php');
          exit();
     }
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$stmt = $conn->prepare("select complain_message from users_complain  where id = ? ");
			$stmt->bind_param("i",$id);
			$stmt->execute();
			$show = $stmt->get_result();
			$complain= $show ->fetch_assoc();         
    		$stmt->close();

		}

		if(isset($_POST['submit_edit'])){
			if(isset($_POST['complaint_edit']) && !empty($_POST['complaint_edit'])){
					$edit_complain = $_POST['complaint_edit'];
			$stmt = $conn->prepare("update users_complain set complain_message = ?  where id = ? ");
			$stmt->bind_param("si",$edit_complain,$id);
			$stmt->execute();
			$stmt->close();


			header("location: viewcomplain_ui.php");
			exit();
 			
	  }
			$err = "Complain can't be empty !!!";
				
}
			
			$conn->close();
?>







