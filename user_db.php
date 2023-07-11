<?php

class User {
    private $conn;
    private $table = 'user';

    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $password;
    public $role;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Méthode pour créer un utilisateur
    public function createUser() {
        // ...
    }

    // Méthode pour récupérer un utilisateur par son adresse e-mail
    public function getUserByMail($mail) {
        $mail = mysqli_real_escape_string($this->conn, $mail);

        $query = "SELECT * FROM " . $this->table . " WHERE mail = '$mail' LIMIT 1";

        $result = mysqli_query($this->conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $this->id = $row['id'];
            $this->nom = $row['nom'];
            $this->prenom = $row['prenom'];
            $this->mail = $row['mail'];
            $this->password = $row['password'];
            $this->role = $row['role'];

            return $this;
        }

        return null;
    }

    // Autres méthodes du modèle pour la gestion des utilisateurs (modification, suppression, etc.)
}

?>
