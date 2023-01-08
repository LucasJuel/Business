<?php
include './db_connection.php';
$conn = OpenCon();

echo 'Tak for registreringen ', $_POST['surname'];

$navn = $_POST['name'];
$efternavn = $_POST['surname'];
$tel = $_POST['phone'];
$mail = $_POST['mail'];
$cvr = $_POST['cvr'];
$pakke = $_POST['pakke'];
$desc = $_POST['desc'];

$besked = "Der er en ny henvendelse fra $navn $efternavn\n Information:\n Telefon: $tel\n Mail: $mail\n CVR-nummer: $cvr\n Pakke: $pakke\n Og har inkluderet beskeden: $desc";

mail('pernille.sjostrom@gmail.com', 'Ny henvendelse nr: *indsæt senere*', $besked);

CloseCon($conn);
?>