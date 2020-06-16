<?php
include "../controllers/config.php";
 class flight{
    public $flying_from ;
    public $flying_to ;
    public $departing_date ;
    public $returning_date ;
    public $seats;

    public function insert_new_flight($flying_from,$flying_to,$departing_date,$returning_date,$seats ){
        $sql2="INSERT INTO `flights_list`(flyingFrom,flyingTo,departingDate,returningDate,seats) VALUES('$flying_from','$flying_to','$departing_date','$returning_date','$seats')";
    }

    public function __construct($flying_from,$flying_to,$departing_date,$returning_date,$seats)
    {
        $this->$flying_from;
        $this->$flying_to;
        $this->$departing_date;
        $this->$returning_date;
        $this->$seats;
    }
 }

//  Vol, réservation, client.


?>