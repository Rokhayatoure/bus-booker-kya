<?php
include_once('./models/init_db.php');
// Vérification de l'authentification
session_start();

//$GET['paths'] = $paths;

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login'])) {
  // Utilisateur non authentifié, redirection vers la page de connexion
  require_once('./controllers/front/index.php');
  exit();
}

// Utilisateur authentifié, vous pouvez accéder aux détails de l'utilisateur à partir de la session ou du cookie
else if (isset($_SESSION['username'])) {
   echo "Bienvenue " . $_SESSION['username'];
   //require_once('./controllers/admin/index.php');
}



?>