<?php
// Déconnexion de l'utilisateur
session_start();
session_destroy();

// Suppression du cookie de connexion
setcookie("user_login", "", time() - 3600, "/");

// Redirection vers la page de connexion ou une autre page appropriée
header("Location: ../index.php");
exit();

?>