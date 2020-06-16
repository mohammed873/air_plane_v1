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
                       <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About us</a>
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
     </div>


    <div class="about-container">
            <div id="about-description">
               <p>
               Carry more memories
                Start your seamless travel experience the moment you open your suitcase at home. Our generous baggage allowance allows you to carry all your travel essentials and more. 

                Baggage allowance
                Baggage allowances may vary, according to route and cabin class. Browse our checked- and hand-baggage policies to learn more about weight and size specifications, as well as any excess baggage charges.

               </p>
            </div>
            <div id="about-image">
                <img src="https://www.traveldailymedia.com/assets/2019/09/shutterstock_591363956.png" alt="">
            </div>
        </div>
        <br><br><br>
        <hr>


         <div class="photo-container">
             <h2 id="h2-title">Discover more than 150 Destination</h2>
             <hr>
             <br>

             <div class="photo-first-row">
                   <div class="first-image-container">
                       <div id="items">
                           <img src="https://images2.alphacoders.com/545/thumb-1920-545321.jpg" alt="">
                       </div>
                       <br>
                       <div id="items">
                            <img src="https://wallpapercave.com/wp/rorwfSb.jpg" alt="">
                       </div>
                   </div>
                   <div class="second-image-container">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Royal_Palace%2C_Rabat.jpg/1200px-Royal_Palace%2C_Rabat.jpg" alt="">
                   </div>
             </div>
             <br>
             <div class="second-image-row">
                 <div id="items">
                     <img src="https://guidetoiceland.imgix.net/4898/x/0/?auto=format%2Ccompress&fit=crop&crop=faces%2Cedges%2Ccenter&ixlib=react-8.6.4&h=430&w=1400" alt="">
                 </div>
             </div>
             <div class="third-image-row">
                       <div id="items"  class="third-items">
                           <img src="https://images.memphistours.com/large/977385592ec4e946d07172c7f7156154.jpg" alt="">
                       </div>
                       <div id="items" class="third-items">
                            <img src="https://joowbar.com/wp-content/uploads/2019/08/JOOWBAR_VISITER_TANGER_MAROC_ESSENTIEL_GUIDE_RIAD-68.jpg" alt="">
                       </div>
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