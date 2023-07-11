<?php
require_once('client_db.php');
class Reservation
{
  private $conn;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function createReservation($date, $destination, $clientId, $type, $time, $depart, $nbre)
  {
    $date = mysqli_real_escape_string($this->conn, $date);
    $destination = mysqli_real_escape_string($this->conn, $destination);
    $clientId = mysqli_real_escape_string($this->conn, $clientId);
    $type = mysqli_real_escape_string($this->conn, $type);
    $time = mysqli_real_escape_string($this->conn, $time);
    $depart = mysqli_real_escape_string($this->conn, $depart);
    $nbre = mysqli_real_escape_string($this->conn, $nbre);

    $query = "INSERT INTO reservations (date, destination, id_client, type, time, depart, nbre) VALUES ('$date', '$destination', '$clientId', '$type', '$time', '$depart', '$nbre')";
    mysqli_query($this->conn, $query);

    return mysqli_insert_id($this->conn);
  }

  public function updateReservation($reservationId, $date, $destination, $clientId, $type, $time, $depart, $nbre)
  {
    $reservationId = mysqli_real_escape_string($this->conn, $reservationId);
    $date = mysqli_real_escape_string($this->conn, $date);
    $destination = mysqli_real_escape_string($this->conn, $destination);
    $clientId = mysqli_real_escape_string($this->conn, $clientId);
    $type = mysqli_real_escape_string($this->conn, $type);
    $time = mysqli_real_escape_string($this->conn, $time);
    $depart = mysqli_real_escape_string($this->conn, $depart);
    $nbre = mysqli_real_escape_string($this->conn, $nbre);

    $query = "UPDATE reservations SET date = '$date', destination = '$destination', id_client = '$clientId', type = '$type', time = '$time', depart = '$depart', nbre = '$nbre' WHERE id = '$reservationId'";
    mysqli_query($this->conn, $query);
  }

  public function deleteReservation($reservationId)
  {
    $reservationId = mysqli_real_escape_string($this->conn, $reservationId);

    $query = "DELETE FROM reservations WHERE id = '$reservationId'";
    mysqli_query($this->conn, $query);
  }

  public function getAllReservations()
  {
    $query = "SELECT * FROM reservations";
    $result = mysqli_query($this->conn, $query);

    $reservations = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $reservationId = $row['id'];
      $clientId = $row['id_client'];

      // Fetch the client associated with the reservation
      $clientModel = new Client($this->conn);
      $client = $clientModel->getClientById($clientId);

      // Hydrate the client information into the reservation
      $row['client'] = $client;

      $reservations[] = $row;
    }

    return $reservations;
  }

  public function getReservationById($reservationId)
  {
    $reservationId = mysqli_real_escape_string($this->conn, $reservationId);

    $query = "SELECT * FROM reservations WHERE id = '$reservationId'";
    $result = mysqli_query($this->conn, $query);

    $reservation = mysqli_fetch_assoc($result);
    $clientModel = new Client($this->conn);
    $client = $clientModel->getClientById($reservation['id_client']);
    $reservation['client'] = $client;

    return $reservation;
  }

  public function updateReservationStatus($reservationId, $newStatus)
  {
    $reservationId = mysqli_real_escape_string($this->conn, $reservationId);
    $newStatus = mysqli_real_escape_string($this->conn, $newStatus);

    $query = "UPDATE reservations SET statut = '$newStatus' WHERE id = '$reservationId'";
    mysqli_query($this->conn, $query);
  }
}
