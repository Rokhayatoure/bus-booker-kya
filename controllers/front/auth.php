<?php
include_once('./models/init_db.php');
// Vérification de l'authentification
// Vérification des informations d'identification
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Informations valides, stockage des détails de l'utilisateur dans la session
    session_start();
    $_SESSION['username'] = $username;
    // Autres détails de l'utilisateur peuvent également être stockés
    // ...
    
    // Définition d'un cookie pour maintenir la connexion
    setcookie("user_login", $username, time() + 3600, "/");
    
    // Redirection vers une page protégée
    header("Location: page_protegee.php");
    exit();
} else {
    // Informations d'identification invalides, affichage d'un message d'erreur
    echo "Identifiants invalides";
}
?>