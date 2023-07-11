<?php
include('../init_db.php');
require_once '../reservation_db.php';

// Create instances of the models
$reservationModel = new Reservation($conn);

// Retrieve all reservations
$reservations = $reservationModel->getAllReservations();

// Close the connection
mysqli_close($conn);

?>

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reservations /</span> Acceptées</h4>
    <!-- Table -->
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Client</th>
              <th>Adresse</th>
              <th>Téléphone</th>
              <th>Départ</th>
              <th>Destination</th>
              <th>Type</th>
              <th>Date</th>
              <th>Heure</th>
              <th>Nombre de personnes</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0 py-5">
            <?php
            foreach ($reservations as $reservation) {
              if ($reservation['statut'] == 'ACCEPTED') {
                echo '<tr>';
                echo '<td><strong>' . $reservation['client']['prenom'] . ' ' . $reservation['client']['nom'] . '</strong></td>';
                echo '<td>' . $reservation['client']['adresse'] . '</td>';
                echo '<td>' . $reservation['client']['num'] . '</td>';
                echo '<td>' . $reservation['depart'] . '</td>';
                echo '<td>' . $reservation['destination'] . '</td>';
                echo '<td>' . str_replace('_', ' ', $reservation['type']) . '</td>';
                echo '<td>' . $reservation['date'] . '</td>';
                echo '<td>' . $reservation['time'] . '</td>';
                echo '<td>' . $reservation['nbre'] . '</td>';
                echo '<td><span class="badge bg-label-success me-1">Accepté</span></td>';
              }
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
    <!-- / Table -->
  </div>
  <!-- / Content -->
  <!-- Content wrapper -->