<?php
include("./init_db.php");


function create ($nom,$prenom,$numero,$date,$mail) {
// Ecriture de la requête
$sqlQuery = 'INSERT INTO client(nom, prenom, date,numero,mail) VALUES (:nom, :prenom,:date,:numero,:mail)';

// Préparation
$insertclient = $db->prepare($sqlQuery) ;

// Exécution 
$insertclient->execute([
    'nom' => $nom,
    'prenon' => $prenom,,
    'date' =>$date,
    'numero' =>  $numero,
    'mail'=>$mail,
]);
}

function read ()
{
    // Ecriture de la requête
    $sqlQuery = 'SELECT * FROM client' ;

    // Préparation
    $insertclient = $db->prepare($sqlQuery);
    
    // Exécution 
   $listclient= $insertclient->fetchAll () ;
   return $listclient;
    
 
}





?>