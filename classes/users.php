<?php
include "../controllers/config.php";
class Users{
    public $username;
    public $email;
    public $password;
    public $confpassword;
    public $picture;
    public $status;

    public function __construct($username,$email,$password,$confpassword,$picture,$status)
    {
        $this->$username;
        $this->$email;
        $this->$password;
        $this->$confpassword;
        $this->$picture;
        $this->status;
    }

    public function Sign_up($username,$email,$password,$upload,$status){
        $sql2="INSERT INTO `users`(username,useremail,password,picture,status) VALUES('$username','$email','$password','$upload','$status')";
    }
}



?>