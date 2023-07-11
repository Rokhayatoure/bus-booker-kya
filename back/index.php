<?php
// Path: back\index.php
include('head.php');
// Vérification de l'authentification de l'utilisateur

// Démarrage de la session
session_start();

// echo (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']));

// Si l'utilisateur n'est pas authentifié
if (!isset($_SESSION['mail']) && !isset($_COOKIE['user_login'])) {
    // Utilisateur non authentifié, redirection vers la page de connexion
    header("Location: ../connexion.php");
    exit();
}
?>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Layout sidebar -->
    <?php
    include('sidebar.php');
    ?>
    <!-- / Layout sidebar -->

    <!-- Layout container -->
    <div class="layout-page">
      <!-- Navbar -->
      <?php
      include('navbar.php');
      ?>
      <!-- / Navbar -->

      <!-- Content wrapper -->
      <?php
      switch ($_GET["page"] ?? "") {
        case "list":
          include("order_list.php");
          break;
        case "accepted":
          include("accepted_list.php");
          break;
        case "rejected":
          include("rejected_list.php");
          break;
        default:
          include("order_list.php");
          break;
      }
      include('page_footer.php');
      ?>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<?php
include('footer.php');
?>