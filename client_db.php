<?php

class Client {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createClient($nom, $prenom, $mail, $num, $adresse, $sexe) {
        $nom = mysqli_real_escape_string($this->conn, $nom);
        $prenom = mysqli_real_escape_string($this->conn, $prenom);
        $mail = mysqli_real_escape_string($this->conn, $mail);
        $num = mysqli_real_escape_string($this->conn, $num);
        $adresse = mysqli_real_escape_string($this->conn, $adresse);
        $sexe = mysqli_real_escape_string($this->conn, $sexe);

        $query = "INSERT INTO clients (nom, prenom, mail, num, adresse, sexe) VALUES ('$nom', '$prenom', '$mail', '$num', '$adresse', '$sexe')";
        mysqli_query($this->conn, $query);

        return mysqli_insert_id($this->conn);
    }

    public function updateClient($clientId, $nom, $prenom, $mail, $num, $adresse, $sexe) {
        $clientId = mysqli_real_escape_string($this->conn, $clientId);
        $nom = mysqli_real_escape_string($this->conn, $nom);
        $prenom = mysqli_real_escape_string($this->conn, $prenom);
        $mail = mysqli_real_escape_string($this->conn, $mail);
        $num = mysqli_real_escape_string($this->conn, $num);
        $adresse = mysqli_real_escape_string($this->conn, $adresse);
        $sexe = mysqli_real_escape_string($this->conn, $sexe);

        $query = "UPDATE clients SET nom = '$nom', prenom = '$prenom', mail = '$mail', num = '$num', adresse = '$adresse', sexe = '$sexe' WHERE id = '$clientId'";
        mysqli_query($this->conn, $query);
    }

    public function deleteClient($clientId) {
        $clientId = mysqli_real_escape_string($this->conn, $clientId);

        $query = "DELETE FROM clients WHERE id = '$clientId'";
        mysqli_query($this->conn, $query);
    }

    public function getAllClients() {
        $query = "SELECT * FROM clients";
        $result = mysqli_query($this->conn, $query);

        $clients = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $clients[] = $row;
        }

        return $clients;
    }

    public function getClientById($clientId) {
        $clientId = mysqli_real_escape_string($this->conn, $clientId);

        $query = "SELECT * FROM clients WHERE id = '$clientId'";
        $result = mysqli_query($this->conn, $query);

        return mysqli_fetch_assoc($result);
    }
}

?>
