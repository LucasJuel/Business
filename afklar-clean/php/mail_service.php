<?php
include './db_connection.php';
$conn = OpenCon();

echo $_GET['name'];

CloseCon($conn);
?>