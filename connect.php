<?php

// $server = "localhost";
// $username ="root";
// $password = "";
// $db = "asm2_200312";

// $conn = mysqli_connect($server,$username,$password,$db);
// if($conn->connect_error){
//     die("Failed ".$conn->connect_error);
// }

$conn = pg_connect("postgres://thudzuiycpcofr:01d84e569d04b954222ee85fcdb1a44d02e8e94a08152225649f92421ebf9d7a@ec2-52-70-45-163.compute-1.amazonaws.com:5432/da8gd3odsvpmln");

// $conn = pg_connect("host=localhost port=5432 dbname=asm2_200312 user=postgres password=Pass?*n@1");

if (!$conn) {
    die("Connection failed");
}

if ($conn){
    echo "connected";
}
?>