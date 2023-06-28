<?php
$var=
switch ($var) {
    case "index":
        include("index.php");
        break;
    case "gallery":
        include("gallery.php");
        break;
    case "contact":
        include("contact.php");
   
    default:
        ("page/404/index.php");
        break;
}
?> 
<?php
$var=isset($_GET['c'])?$_GET['c']:"Accueil";
switch($var){
    case "Accueil":include('./view/pages/main.php');break;
    case "Presentation" : include('./view/pages/presentation.php');break;
    case "Formation" : include('./view/pages/format.php');break;
    case "Service" : include('./view/pages/service.php');break;
    case "Contact" : include('./view/pages/contact.php');break;
    
    default : include('404.php');break;
}
?>
