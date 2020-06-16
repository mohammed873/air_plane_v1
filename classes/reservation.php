<?php
include "../controllers/config.php";
class reservations{
    public $id_reservation;
    public $FullName;
    public $numeroTel;
    public $email;
    public $numeroPassport;
    public $departingDate;
    public $returningDate;
    public $Adult;
    public $children;
    public $travel_class;
    public  $price ;
    public $id_flight;
    public $id_users;

   public function __construct(){}

    // User reservation
    public function reservation(){
    $id_reservation=htmlspecialchars($_POST["id_reserver"]);
    $fullName=htmlspecialchars($_POST["f_name"]);
    $phone=htmlspecialchars($_POST["phone"]);
    $email=htmlspecialchars($_POST["email"]);
    $num_passport=htmlspecialchars($_POST["num_passport"]);
    $departing=htmlspecialchars($_POST["departing"]);
    $returning=htmlspecialchars($_POST["returning"]);
    $adults=htmlspecialchars($_POST["adults"]);
    $children=htmlspecialchars($_POST["children"]);
    $travel_class=htmlspecialchars($_POST["travel_class"]);
    $price=htmlspecialchars($_POST["price"]);
    $idAir=htmlspecialchars($_POST["id_air"]);
    $id_users=htmlspecialchars($_POST["users"]);
    $request="INSERT INTO `reservation` VALUES($id_reservation,'$fullName','$phone','$email','$num_passport','$departing','$returning',$adults,$children,'$travel_class','$price','$idAir','$id_users')";
    return $request;
}
//modifier
public function modifierSeats(){
    $idAir=htmlspecialchars($_POST["id_air"]);
    $adults=htmlspecialchars($_POST["adults"]);
    $children=htmlspecialchars($_POST["children"]);
    $update= "UPDATE flights_list set seats=seats-($adults + $children) where id=$idAir";
    return request($update);
                               }

//showing the final details for reservation
public function AfficheReservation($id){
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
}
public function cancel_reservation($id){
    
 /* the cancel function for reservation */
    if(isset($_GET['cancel'])){
    $id=$_GET['cancel'];
  
      $query="DELETE FROM reservation WHERE id_reservation = ?";
      $stmt=$con->prepare($query);
      $stmt->bind_param("i",$id);
      $stmt->execute();
      header('location:profile.php');
  }
}

}