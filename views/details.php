<?php
include "../controllers/action.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maroc airlines</title>
    <link rel="stylesheet" href="../style/style_main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
<div class=" header-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Morocco AirLines</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                       <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="profile.php">profile</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Log out</a>
                         </li>
                    </ul>
                </form>
            </div>
        </nav>
        <br><br><br><br>
           <div class="entry-title">
                <h3>Flight Details</h3>
            </div>
</div>


        <br><br>
        <?php if($modifier==true){
         die("<div id='messageConfirmation' class='add' >Bien Confirmer $fullName <a href='about_us.php' >Show More !</a>");
 }
        if($ajouter):
             echo "<div class='add'> Your welcome mister $fullName</div>";
        endif; ?>
        <br>
        <br>
        <br>

        <div class="confirm_header">
            <img src="https://www.hipi.info/wp-content/uploads/2014/07/1500x500-airplane-flying-twitter-header-4-1024x341.jpg" alt="">
        </div>
        <div class="confirm">
          <h2>This is your flight details</h2>
          <hr><br>
          <p> Id Reservation : <strong><?php echo $id_reservation;?></strong></p>
          <p> Id flight : <strong><?php echo $id_flight;?></strong></p>
          <p> Full Name : <strong><?php  echo $fullName;?></strong></p>
          <p> numero Telephone : <strong><?php echo $phone;?></strong></p>
          <p> email : <strong> <?php echo $email;?></strong></p>
          <p> numero Passport : <strong> <?php echo $num_passport;?></strong></p>
          <p> departing Date : <strong> <?php echo $departing;?></strong></p>
          <p> returning Date : <strong> <?php echo $returning;?></strong></p>
          <p> Seats Adult : <strong> <?php echo $adults ;?></strong></p>
          <p> Seats children : <strong> <?php echo $children;?></strong></p>
          <p> travel class: <strong> <?php echo $travel_class;?></strong></p>
          <p> price : <strong> <?php echo $price;?></strong></p>
            <div style="text-align: center;">
                <a href="profile.php" class="badge badge-success p-3">confirm</a>
                <a href="action.php?cancel=<?=$row['id_reservation']; ?>" class="badge badge-danger p-3" onclick="return confirm('Do you want to cancel this reservation')">cancel</a>
            </div>
        </div>

        <div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>

        <div class="footer-div">
               <div class="footer-item">
                    <div id="icon">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                    <br>
                    <p>all right reseverd from youcode</p>
              </div>
              <div class="footer-item">
                  <input type="text"  placeholder="Enter your name" id="feedback-sender"><br><br>
                  <textarea name="" id="feedback-area" placeholder="enter your feedback"></textarea><br>
                  <div id="feedback-error"><p></p></div><br>
                  <button type="submit" id="btn-feedback">submit feedback</button>
              </div>
         </div>

</body>
   
<!-- jquery link -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
        <script src="../script/script.js"></script>
        <script>

        </script>
    </body>
</html>