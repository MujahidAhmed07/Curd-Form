<?php

include('connection.php');
//include('C:\xampp\htdocs\cms\UI\dashboard_ui.php');
if(!isset($_SESSION)){
         session_start();
     }

     if(! isset($_SESSION['loggedUser'])){
          header('Location: login_ui.php');
          exit();
     }

     else
     
     {
  
     
                $id = $_SESSION['loggedUser'];
                $stmt = $conn->prepare("select firstname,lastname,email,phone,image_path from users_meta where user_id=?");
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $show= $stmt->get_result();
            $rows = $show->fetch_assoc();


          if(isset($_POST['logout'])){
               session_unset();
               session_destroy();

         }
}


         

    


?>