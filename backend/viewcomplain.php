<?php
include('connection.php');
session_start();
    if(! isset($_SESSION['loggedUser'])):
          header('Location: login_ui.php');
          exit();
     
    endif;
 

	$id = $_SESSION['loggedUser'];
    $stmt = $conn->prepare("select complain_message,publish_date,id from users_complain where user_id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $show= $stmt->get_result();         
    $stmt->close();
        

       
       
?>