<?php
include './db_connection.php';
header('Refresh: 10; URL=../index.html'); 
$conn = OpenCon();
if($conn -> connect_error){
  die('something went wrong!');
  } ;
echo 'Du er nu tilmeldt vores nyhedsbrev!';
echo 'Du vil blive ført tilbahe til hjememsiden om 5 sekunder.';

$mail = $_POST['mail'];
$sql = "INSERT INTO newsletter(mail, mail_id) VALUES ('$mail', RAND()*1000)";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($conn));
}

CloseCon($conn);
?>