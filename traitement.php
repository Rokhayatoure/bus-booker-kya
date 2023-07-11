<?php

// if the form is submitted save client in first and then reservation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // handle the form in home.php using init_db.php and methods client_db.php and reservation_db.php to interact with the database
  include('init_db.php');
  require_once 'client_db.php';
  require_once 'reservation_db.php';

  // Create instances of the models
  $clientModel = new Client($conn);
  $reservationModel = new Reservation($conn);


  // Retrieve client information from the form
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['mail'];
  $num = $_POST['num'];
  $adresse = $_POST['adresse'];
  $sexe = $_POST['sexe'];

  // Create the client
  $clientId = $clientModel->createClient($nom, $prenom, $mail, $num, $adresse, $sexe);

  // Retrieve reservation information from the form
  $date = $_POST['date'];
  $destination = $_POST['destination'];
  $type = $_POST['type'];
  $time = $_POST['time'];
  $depart = $_POST['depart'];
  $nbre = $_POST['nbre'];

  // Create the reservation
  $reservationId = $reservationModel->createReservation($date, $destination, $clientId, $type, $time, $depart, $nbre);

  // Redirect to a success page or display a success message
  header('Location: index.php?page=home&success=true');
  exit();
} else {
  // Redirect to the home page
  header('Location: index.php?page=home&success=false');
  exit();
}
