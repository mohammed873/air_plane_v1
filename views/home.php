<?php
include "../controllers/action.php";
if(isset($rows)>0){
    $flyingFrom="";
    $flyingTo="";
        while($affiche=affiche($l)){
            $flyingFrom .= "<option value=". $affiche["flyingFrom"]."></option>";
            $flyingTo .= "<option value=".$affiche["flyingTo"]."></option>";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maroc airlines</title>
    <link rel="stylesheet" href="../style/style_main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
                       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about_us.php">About us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="text-white" style="position: relative;top: 9px;left: -14px;">Hello <strong class="text-primary"><?php  echo $_SESSION['username']; ?></strong></a>
                        </li>
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
            <div class="entry-title">
                <h3>Why Morocco AirLines</h3>
                <p><a href="about_us.php">Discover more</a></p>
            </div>
     </div>

    <div class="inputs-container">
        <div class="error"></div>
        <br>
        <form action="reservation.php" method="POST" class="H_search">
            <br>
            <div id="first-row">
                <input type="text" placeholder="Flying From" id="flying_from" name="flying_from" required list="flights_list">
               <datalist id="flights_list">
              <?php echo $flyingFrom; ?>
               </datalist>
                <input type="text"  placeholder="Flying To" id="flying_to" required name="flying_to" list="flights_to">
                <datalist id="flights_to">
                <?php  echo $flyingTo; ?>
               </datalist>
            </div>
            <br>
            <br>
            <button type="submit" name="Show_Flights" id="reserve">Show Flights</button>
        </form>
    </div>
    <br><br><br><br><br><br>
    <hr>
       <h2 id="h2-title">Discover our serveces</h2>
    <hr>
    <h3 style="text-align: center">Explore the additional services we offer to make your journey even more memorable.</h3>
    <div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>
     <br>
    <div class="serveces-container">
          <div id="servece">
            <i class="fa fa-address-book" id="font"></i>
            <h3>Manage booking</h3>
          </div>
          <div id="servece">
          <i class="fa fa-suitcase" id="font"></i>
            <h3>Excess baggage</h3>
          </div>
          <div id="servece">
          <i class="fa fa-car" id="font"></i>
            <h3>Car rental</h3>
          </div>
          <div id="servece">
          <i class="fa fa-coffee" id="font"></i>
            <h3>Dilecious food</h3>
          </div>
          <div id="servece">
          <i class="fa fa-building" id="font"></i>
            <h3>Hotel booking</h3>
          </div>
    </div>

     <br><br><br>
    <div class="comfort-container">
     <div class="inner-comfort">
       <h1>Morocco AirLines</h1>
       <h2>Travel safe , with no woories</h2>
       <p><a href="#top">book now</a></p>
     </div>
    </div>

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


  <!-- jQuery library -->
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
</body>
</html>