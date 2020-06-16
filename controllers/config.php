<?php
include "../classes/flight.php";
session_start();
$con = new mysqli("localhost","user1","youcode",'Air') or   die("Could not connect to the database" .mysqli_error($con));
function request($query){
    $con = new mysqli("localhost","user1","youcode",'Air') or   die(mysqli_error($con));
    $result=mysqli_query($con,$query);
    return $result;
}
function affiche($result){
    $rows=mysqli_fetch_array($result);
    return $rows;
  }
?>