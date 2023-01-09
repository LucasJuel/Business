<?php 

function OpenCon(){
    $dbhost = "mysql16.unoeuro.com";
    $dbuser = "afklar_dk";
    $dbpass = "GDhg6FHwExRt";
    $dbname = "afklar_dk_db";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connection failed". $conn -> error);

    return $conn;
}

function CloseCon($conn){
    mysqli_close($conn);
}
?>