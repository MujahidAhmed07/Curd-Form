<?php

include('connection.php');
if(!isset($_SESSION) && isset($_SESSION['loggedUser'])) 
    { 
        session_start(); 
      }

    if(! isset($_SESSION['loggedUser'])){
          header('Location: login_ui.php');
          exit();
     }

      
        $msg="";
        $id = $_SESSION['loggedUser'];
         $stmt = $conn->prepare("select username,password from users where id= ?");
         $stmt->bind_param('i',$id);
         $stmt->execute();
         $show= $stmt->get_result();   
         $open = $show->fetch_assoc();      
         $stmt->close();
         

        if(isset($_POST['update_profile'])){      
              if(isset($_POST['cpass'],$_FILES['fileupload'])&& $_POST['cpass']== $open['password'] && !empty($_POST['cpass']) && !empty($_POST['newpass'])){

             // print_r($open);
             //     die();
                  $pass = $_POST['newpass'];
                  $first = $_POST['first'];
                  $last = $_POST['last'];
                  $email = $_POST['uemail'];
                  $phone = $_POST['uphone'];

                        $upload_dir = 'upload/' .  $open['username'] . '/' ;
                        $upload_file = $upload_dir . basename($_FILES["fileupload"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));
                       // $upload_file_name = $upload_file . $open['username']  . $imageFileType; 
                      if (!file_exists($upload_dir)):
                                    mkdir($upload_dir, "0755", true);
                                    endif;

                         $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
                          if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                          } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                          }
                        }

                        // Check if file already exists
                        if (file_exists($target_file)) {
                          echo "Sorry, file already exists.";
                          $uploadOk = 0;
                        }

                        // Check file size
                        if ($_FILES["fileupload"]["size"] > 500000) {
                          echo "Sorry, your file is too large.";
                          $uploadOk = 0;
                        }

                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                          $uploadOk = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                          echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                          if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $upload_file)) {
                            echo "The file ". htmlspecialchars( basename( $_FILES["fileupload"]["name"])). " has been uploaded.";
                                 $stmt = $conn->prepare("update users as u inner join users_meta as um  on  u.id = um.user_id set  u.password=? , um.firstname=?,um.lastname=?,um.email=?,um.phone=?,um.image_path=?  where u.id= ?");
                               $stmt->bind_param('ssssssi',$pass,$first,$last,$email,$phone,$upload_file,$id);
                               $stmt->execute();
                               $msg = "updated"; 
                               $stmt->close();         
                           

                          } else {
                            echo "Sorry, there was an error uploading your file.";
                          }
                        }
                                 header("location: editpro_ui.php");
                        exit();
                    
                
                        }else{
                        $msg = "FALSE";
                        }

                

           
            
      
            $conn->close();
?>
