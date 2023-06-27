<?php
include("./init_db.php");


function create ($objet,$contenu,$destinataire) {
// Ecriture de la requête
$sqlQuery = 'INSERT INTO message (objet, contenu,destinataire) VALUES (:objet, :contenu,:destinataire)';

// Préparation
$insertmessage = $db->prepare($sqlQuery);

// Exécution 
$insertmessage->execute([
    'objet' => $objet,
    'contenu' => $contenu,,
    'destinataire' =>$destinataire,
    
]);
}

function read ()
{
    // Ecriture de la requête
    $sqlQuery = 'SELECT * FROM message' ;

    // Préparation
    $insertmessage = $db->prepare($sqlQuery);
    
    // Exécution 
   $listmessage= $insertmessage->fetchAll () ;
   return $listmessage;
    
 
}





?>