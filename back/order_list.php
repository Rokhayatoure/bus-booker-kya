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
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reservation /</span> Tous</h4>
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
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0 py-5">
            <?php
            foreach ($reservations as $reservation) {
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
              switch ($reservation['statut']) {
                case 'EN ATTENTE':
                  echo '<td><span class="badge bg-label-warning me-1">En attente</span></td>';
                  break;
                case 'ACCEPTED':
                  echo '<td><span class="badge bg-label-success me-1">Accepté</span></td>';
                  break;
                case 'REJECTED':
                  echo '<td><span class="badge bg-label-danger me-1">Refusé</span></td>';
                  break;
                default:
                  echo '<td><span class="badge bg-label-warning me-1">En attente</span></td>';
                  break;
              }
              if ($reservation['statut'] == 'EN ATTENTE') {
                echo '<td>';
                echo '<div class="dropdown">';
                echo '<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">';
                echo '<i class="bx bx-dots-vertical-rounded"></i>';
                echo '</button>';
                echo '<div class="dropdown-menu">';
                echo '<a class="dropdown-item d-flex align-items-center" href="statut_change.php?app=back&rId=' . $reservation['id'] . '&statut=ACCEPTED">' . '<i class="bx bx-check-double text-success"></i><span class="ms-2">Accepter</span></a>';
                echo '<a class="dropdown-item d-flex align-items-center" href="statut_change.php?app=back&rId=' . $reservation['id'] . '&statut=REJECTED">' . '<i class="bx bx-x-circle text-danger"></i><span class="ms-2">Refuser</span></a>';
                echo '<a class="dropdown-item d-flex align-items-center" href="#">' . '<i class="bx bx-trash text-warning"></i><span class="ms-2">Supprimer</span></a>';
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