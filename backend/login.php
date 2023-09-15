<?php

include('connection.php');
if(!isset($_SESSION)){
session_start();
}

    if(isset($_SESSION['loggedUser'])){
          header('Location: dashboard_ui.php');
          exit();
     }
	

if(isset($_POST['login'])){ 
	if(!empty($_POST['login_username']) && !empty($_POST['login_password']) && isset($_POST['login_username'],$_POST['login_password'])){
			$lname=$_POST['login_username'];
			$sql1= $conn->prepare("select id,password from users where username = ?");
			$sql1->bind_param('s',$lname);
			$sql1->execute();
			$result = $sql1->get_result();
			$row = $result->fetch_assoc();
				if($_POST['login_password']==$row['password']){
					$_SESSION['loggedUser'] = $row['id'];
					// include('C:\xampp\htdocs\cms\UI\dashboard_ui.php');
					header("Location: dashboard_ui.php");
					exit();
				

		}}}

				$conn->close();


?>









