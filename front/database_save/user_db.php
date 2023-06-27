<?php
include("./init_db.php");


function create ($nom,$prenom,$passe_word,$role,$mail) {
// Ecriture de la requête
$sqlQuery = 'INSERT INTO user(nom, prenom, role,passe_word,mail) VALUES (:nom, :prenom,:date,:numero,:mail)';

// Préparation
$insertuser = $db->prepare($sqlQuery);

// Exécution 
$insertuser->execute([
    'nom' => $nom,
    'prenon' => $prenom,
    'passe_word' =>$passe_word,
    'numero' =>  $numero,
    'mail'=>$mail,
]);
}

function read ()
{
    // Ecriture de la requête
    $sqlQuery = 'SELECT * FROM user' ;

    // Préparation
    $insertuser = $db->prepare($sqlQuery);
    
    // Exécution 
   $listuser = $insertuser->fetchAll () ;
   return $listuser;
    
 
}





?>