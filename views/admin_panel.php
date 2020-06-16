<?php
include "../controllers/admin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maroc airlines</title>
    <link rel="stylesheet" href="../style/style_main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                    <li class="nav-item disable">
                       <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="text-white" style="position: relative;top: 9px;left: -14px;">Hello <strong class="text-primary"><?php  echo $_SESSION['admin_name']; ?></strong></a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">Log out</a>
                         </li>
                    </ul>
                </form>
            </div>
    </nav>
    <br><br><br>
           <div class="entry-title">
                <h3><a href="#">Admin Panel</a></h3>
            </div>
</div>

<div class="col-md-4 text-center p-3 bg-secondary " style="margin: auto; box-shadow: 0px 0px 11px;">

    <img src="<?php  echo $_SESSION['picture']; ?>" alt="" width="200" height="250">
    <br><br>
    <p class="text-white">Id : <strong class="text-dark"><?php  echo $_SESSION['Id']; ?></strong></p>
    <p class="text-white">Name : <strong class="text-dark"><?php  echo $_SESSION['admin_name']; ?></strong></p>
    <p class="text-white">Gmail : <strong class="text-dark"><?php  echo $_SESSION['email']; ?></strong></p>
    <p class="text-white">status : <strong class="text-dark"><?php  echo "Admin"; ?></strong></p>
    <h6 style="color:#48ff45;">more option</h6>
    <a  style="text-decoration: none; color:#fda86c;" href="add_admins.php">Add admin</a>
    <br>
    <a style="text-decoration: none; color:#fda86c;" href="add_flights.php">Add flights</a>
</div>

<div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>
<br><br>
  
<div class="col-md-6 " style="margin: auto;">
        <?php
            $sql="SELECT * FROM admins";
            $stm=$con->prepare($sql);
            $stm->execute();
            $result=$stm->get_result();
        ?>
            <h4 class="text-center bg-success p-2">admins table</h4>
            <table class="table t_able">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>admin name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>profile picture</th>
                </tr>
            </thead>
            <tbody">
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row['Id'];?></td>
                    <td><?=$row['admin_name'];?></td>
                    <td><?=$row['email'];?></td>
                    <td><?=$row['password'];?></td>
                    <td><img src=" <?=$row['picture']; ?>" alt="pic" width="50"></td>*
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
   
<br>

<div class="col-md-6 " style="margin: auto">
        <?php
            $sql="SELECT * FROM users";
            $stm=$con->prepare($sql);
            $stm->execute();
            $result=$stm->get_result();
        ?>
            <h4 class="text-center bg-success p-2 ">Users table</h4>
            <br>
            <table class="table t_able">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>profile picture</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row['Id'];?></td>
                    <td><?=$row['username'];?></td>
                    <td><?=$row['useremail'];?></td>
                    <td><?=$row['password'];?></td>
                    <td><img src=" <?=$row['picture']; ?>" alt="pic" width="50"></td>
            <?php } ?>
            </tbody>
        </table>
</div>

<div class="col-md-9 " style="margin: auto;">
    <?php
        $sql="SELECT * FROM reservation";
        $stm=$con->prepare($sql);
        $stm->execute();
        $result=$stm->get_result();
    ?>
        <h4 class="text-center bg-success p-2">Reservation table</h4>
        <br>
        <table class="table t_able">
        <thead class="thead-dark">
            <tr>
                <th>reservation id</th>
                <th>full name</th>
                <th>phone number</th>
                <th>email</th>
                <th>passport</th>
                <th>depating date</th>
                <th>returning date</th>
                <th>Adults</th>
                <th>children</th>
                <th>travel class</th>
                <th>price</th>
                <th>flight Id</th>
            </tr>
        </thead>
        <tbody ">
        <?php while($row=$result->fetch_assoc()){ ?>
            <tr>
                <td><?=$row['id_reservation'];?></td>
                <td><?=$row['FullName'];?></td>
                <td><?=$row['numeroTel'];?></td>
                <td><?=$row['email'];?></td>
                <td><?=$row['numeroPassport'];?></td>
                <td><?=$row['departingDate'];?></td>
                <td><?=$row['returningDate'];?></td>
                <td><?=$row['Adult'];?></td>
                <td><?=$row['children'];?></td>
                <td><?=$row['travel_class'];?></td>
                <td><?=$row['price'];?></td>
                <td><?=$row['id_flight'];?></td>
            <?php } ?>
        </tbody>
    </table>
</div>
<br>

<div class="col-md-6 " style="margin: auto;">
        <?php
            $sql="SELECT * FROM flights_list";
            $stm=$con->prepare($sql);
            $stm->execute();
            $result=$stm->get_result();
        ?>
            <h4 class="text-center bg-success p-2">flight list</h4>
            <br>
            <table class="table t_able">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>flying From</th>
                    <th>flying To</th>
                    <th>departing Date</th>
                    <th>returning Date</th>
                    <th>seats</th>
                    <th>action</th>
                    
                </tr>
            </thead>
            <tbody >
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row['id'];?></td>
                    <td><?=$row['flyingFrom'];?></td>
                    <td><?=$row['flyingTo'];?></td>
                    <td><?=$row['departingDate'];?></td>
                    <td><?=$row['returningDate'];?></td>
                    <td><?=$row['seats'];?></td>
                    <td>
                    <a href="admin_panel.php?cancel=<?=$row['id']; ?>" class="badge badge-danger p-3" onclick="return confirm('Do you want to cancel this flight')">cancel</a>
                    </td>
            <?php } ?>
            </tbody>
        </table>
</div>
<br>

<div class="footer-div ">
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
</body>
</html>