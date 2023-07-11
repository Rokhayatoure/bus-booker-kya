<?php
// Include the Reservation model
include('../init_db.php');
require_once '../reservation_db.php';

// Create an instance of the Reservation model
$reservationModel = new Reservation($conn);

$reservationId = $_GET['rId'];
$newStatus = $_GET['statut'];

// Update the status of the reservation
$reservationModel->updateReservationStatus($reservationId, $newStatus);

// Redirect to the home page
header('Location: index.php?app=back&page=list');
?>