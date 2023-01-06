<?php 

function OpenCon(){
    $dbhost = "mysql16.unoeuro.com";
    $dbuser = "afklar_dk";
    $dbpass = "GDhg6FHwExRt";

    $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connection failed". $conn -> error);

    return $conn;
}

function CloseCon($conn){
    mysqli_close($conn);
}
?>