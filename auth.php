<?php
include("init_db.php");

// Vérification des informations d'identification
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE mail = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Informations valides, stockage des détails de l'utilisateur dans la session
    session_start();
    $_SESSION['email'] = $email;
    // Autres détails de l'utilisateur peuvent également être stockés
    // ...
    
    // Définition d'un cookie pour maintenir la connexion
    setcookie("user_login", $email, time() + 3600, "/");
    
    // Redirection vers une page protégée
    header("Location: back/index.php?app=back&page=list");
    exit();
} else {
    // Informations d'identification invalides, affichage d'un message d'erreur
    $error = "Informations d'identification invalides";
    include("connexion.php");
}
?>