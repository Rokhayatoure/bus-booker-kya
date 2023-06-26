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