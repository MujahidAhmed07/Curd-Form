<?php
include('connection.php');
$error ="";
	if(isset($_POST['submit'])){
		if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])&& isset($_POST)){
		// set parameters and execute
		$username = $_POST['username'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];

if(filter_var($contact, FILTER_VALIDATE_INT) && filter_var($email, FILTER_VALIDATE_EMAIL) ){

		$stmt = $conn->prepare("INSERT INTO users( username , password ) VALUES ( ? , ? )");	
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();

		$user = $stmt->insert_id;
		$stmt->close();

		$stmt = $conn->prepare("INSERT INTO users_meta ( user_id , firstname , lastname , email , phone ) VALUES ( ? , ? , ? , ? , ? )");
		$stmt->bind_param( "issss" , $user , $firstname , $lastname , $email , $contact );
		$stmt->execute();
		$stmt->close();

		echo "New records created successfully";
		header('Location: login_ui.php');
		exit();
		
}

}	
else{
		 $error = "please fill missing fields";
}
}
$conn->close();
?>