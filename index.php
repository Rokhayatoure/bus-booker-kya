<?php
// Vérification de l'authentification de l'utilisateur

// Démarrage de la session
session_start();

// echo (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']));

// Si l'utilisateur n'est pas authentifié
if (!isset($_SESSION['mail']) && !isset($_COOKIE['user_login'])) {
    // Utilisateur non authentifié, redirection vers la page de connexion
    switch ($_GET['page'] ?? 'home') {
        case 'connexion':
            include('connexion.php');
            break;
        case 'home':
            include('home.php');
            break;
        default:
            include('home.php');
            break;
    }
    exit();
}
if (isset($_SESSION['mail'])) {
    $mail = $_SESSION['mail'];
    // Redirection vers une page protégée
    header("Location: back/index.php?app=back&page=list");
    exit();
} else if (isset($_COOKIE['user_login'])) {
    $mail = $_COOKIE['user_login'];
    // Redirection vers une page protégée
    header("Location: back/index.php?app=back&page=list");
    exit();
}
?>