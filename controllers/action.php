<?php
include 'config.php';
//affiche
if($_SERVER["PHP_SELF"]==='/Application-pour-la-gestion-des-r-servations-des-vols-a-riens/home.php'){
$query = "SELECT DISTINCT flyingFrom, flyingTo from flights_list;";
$l=request($query);
 $rows=mysqli_num_rows($l);
}
//get Session

if(isset($_POST["Show_Flights"])){
    $_SESSION["flying_from"]=$_POST["flying_from"];
    $_SESSION["flying_to"]=$_POST["flying_to"];
}


$messageSession="";
  if(isset($_SESSION["flying_from"]) && isset($_SESSION["flying_to"])){
    $flying_to= $_SESSION["flying_to"];
    $flying_from=$_SESSION["flying_from"];
    $query = "SELECT * FROM flights_list WHERE flyingFrom='$flying_from' AND flyingTo='$flying_to' AND seats>0";
    $req=request($query) or die("request ne pas valid tester request");
  $row=mysqli_num_rows($req);
  $messageSession="
<h3 style='margin: auto;
text-align: center;'> Welcome To Morocco AirLines  From ". $flying_from ." To ". $flying_to.
" </h3>" ;
  }

  //reservation
  $ajouter=false;
  $lastId="";
  if(isset($_POST["reservation"])){
    $id_reservation=$_POST["id_reserver"];
    $fullName=$_POST["f_name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $num_passport=$_POST["num_passport"];
    $departing=$_POST["departing"];
    $returning=$_POST["returning"];
    $adults=$_POST["adults"];
    $children=$_POST["children"];
    $travel_class=$_POST["travel_class"];
    $price=$_POST["price"];
    $idAir=$_POST["id_air"];
    $request="INSERT INTO `reservation` VALUES($id_reservation,'$fullName','$phone','$email','$num_passport','$departing','$returning',$adults,$children,'$travel_class','$price','$idAir')";
    if(mysqli_query($con,$request)){
      $lastId=mysqli_insert_id($con);
      $ajouter=true;
      sleep(1.5);
      header('location:profile.php');
    }else{
      die("<div style='background-color: #e04c4c;text-align: center;padding: 20px;margin: 10%;color: white;font-family: fantasy;'>Sorry mister $fullName your id déja exist </div>");
    }
  }

  //Modifier seats in table flights_list;
  $modifier=false;
  if( isset($_GET["seats"]) &&  isset($_GET["idAir"]) ){
    $seats=$_GET["seats"];
    $idAir=$_GET["idAir"];
     $update= "UPDATE flights_list set seats=seats-$seats where id=$idAir";
     request($update);
     $modifier=true;
  }


/* the details function for each reservation*/
if(isset($_GET['details'])){
  $id=$_GET['details'];
  
  $query="SELECT * FROM reservation WHERE id_reservation =?";
  $stmt=$con->prepare($query);
  $stmt->bind_param("i",$id);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_assoc();

  $id_reservation=$row['id_reservation'];
  $id_flight=$row['id_flight'];
  $fullName=$row['FullName'];
  $phone=$row['numeroTel'];
  $email=$row['email'];
  $num_passport=$row['numeroPassport'];
  $departing=$row['departingDate'];
  $returning=$row['returningDate'];
  $adults=$row['Adult'];
  $children=$row['children'];
  $travel_class=$row['travel_class'];
  $price=$row['price'];

}


/* the cancel function for reservation */
if(isset($_GET['cancel'])){
  $id=$_GET['cancel'];

    $query="DELETE FROM reservation WHERE id_reservation = ?";
    $stmt=$con->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    header('location:profile.php');
}
?>
