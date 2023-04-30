<?php
include '../Controller/ReservationC.php';
$reservationC = new reservationC();
$reservationC->deletreservation($_GET["id_reservation"]);

header('Location:ListReservationd.php');
