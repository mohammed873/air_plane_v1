<?php

include 'config.php';

$error= array();

//signning up
if(isset($_POST['signup'])){
    $username=htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST['useremail']);
    $password=htmlspecialchars(md5($_POST['password']));
    $confpassword=htmlspecialchars(md5($_POST['confpassword']));
    $picture= $_FILES['picture'];
    $status=$_POST['status'];

    //validation
    if(empty($username)){
        $error['username']="Username required";
    }
    if(empty($email)){
        $error['useremail']="Email required";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['useremail']="Email adress is not valid";
    }
    if($password !== $confpassword){
        $error['password']="The two passwords don't match";
    }
    if(empty($password)){
        $error['password']="Password required";
    }
    if(empty($picture)){
        $error['picture']="Picture required";
    }

   $emailQuery = "SELECT * FROM users WHERE useremail = ? LIMIT 1";
   $stm=$con->prepare($emailQuery);
   $stm->bind_param('s',$email);
   $stm->execute();
   $result=$stm->get_result();
   $usercount=$result->num_rows;

   if($usercount > 0){
     $error['useremail']="useremail already exists";
   }
 
   //checking if the number of error is 0
   if(count($error)===0){
        $picture=$_FILES['picture']['name'];
        $upload="uploads/".$picture;
        //storing pictures to the uploads file
        move_uploaded_file($_FILES['picture']['tmp_name'], $upload);

        $sql2="INSERT INTO `users`(username,useremail,password,picture,status) VALUES('$username','$email','$password','$upload','$status')";
        if(mysqli_query($con,$sql2)){
            //set falsh message
            $_SESSION['message']="You are signned up , log in now";
        }
   }else {
      // wrong info
   }
}


// logging in 
if(isset($_POST['login'])){

    $useremail = htmlspecialchars($_POST['useremail']);
    $password=htmlspecialchars(md5($_POST['password']));

    //validation
    if(empty($useremail)){
        $error['useremail'] = "useremail required";
    }
    if(empty($password)){
        $error['password'] = "password required";
    }

    if (count($error)===0) {
        $sql = "SELECT * FROM `users` WHERE useremail = ? LIMIT 1 ";
        $stm = $con->prepare($sql);
        $stm->bind_param('s',$useremail);
        $stm->execute();
        $result = $stm->get_result();
        $user = $result->fetch_assoc();

        $sql = "SELECT * FROM `admins` WHERE email = ? LIMIT 1 ";
        $stm = $con->prepare($sql);
        $stm->bind_param('s',$useremail);
        $stm->execute();
        $result = $stm->get_result();
        $admin = $result->fetch_assoc();

        if($password== $user['password']){
            //login success
            $_SESSION['Id']=$user['Id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['useremail']=$user['useremail'];
            $_SESSION['picture']=$user['picture'];
            $_SESSION['status']=$user['status'];
            header("Location:profile.php"); 
        }
        if($password== $admin['password']){
            //login success
            $_SESSION['Id']=$admin['Id'];
            $_SESSION['admin_name']=$admin['admin_name'];
            $_SESSION['email']=$admin['email'];
            $_SESSION['picture']=$admin['picture'];
            header("Location:admin_panel.php");
           }
        else{
            $error['login_fail'] = "wrong credition";
        }
    }
    
}

?>