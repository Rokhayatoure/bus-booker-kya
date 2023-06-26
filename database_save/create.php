<?php
include("./reservation.php");
include("./client.php");
// verification de la formulair soumis

if    ( !isset( $_POST['client'])||!isset ( $_POST['reservation']) )
echo 'il faut un client et une reservation pour soumetre le formulaire.';
return;
  

$client =$_POST['client'];
$client =$_POST['client'];
// fair l'insertion
$insertreservation=$mysqlclient->preparereservation (adress, destination, date,prix,id_client) VALUES (:adress, :destination,:date,:prix,:id_client)';