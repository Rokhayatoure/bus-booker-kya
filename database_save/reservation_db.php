<?php
include("./init_db.php");


function create ($adress,$destination,$prix,$id_client,$date) {
// Ecriture de la requête
$sqlQuery = 'INSERT INTO reservation (adress, destination, date,prix,id_client) VALUES (:adress, :destination,:date,:prix,:id_client)';

// Préparation
$insertclient = $db->prepare($sqlQuery);

// Exécution 
$insertclient->execute([
    'adress' => $adress,
    'destination' => $destination,
    'prix' =>$prix,
    'id_client' =>  $id_client,
    'date'=>$date,
]);
}

function read ()
{
    // Ecriture de la requête
    $sqlQuery = 'SELECT * FROM reservation' ;

    // Préparation
    $insertclient = $db->prepare($sqlQuery);
    
    // Exécution 
   $listreservation= $insertreservation->fetchAll () ;
   return $listreservation;
    
 
} 
<h1> RESERVATION <h1>
<form  action="<?php(./create.php)" method="post">
<div class="row">	
    <div class="col-lg-6 form-group">
        <input name="date" placeholder="enrer votre date de depart" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
    
        <input name="adress" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="text">

        <input name="destination" placeholder="Enter votd destionation" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
    </div>
    
        <button class="genric-btn primary" style="float: right;">ENVOYER</button>											
    </div>
</div>






?>