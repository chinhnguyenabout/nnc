<?php

// $server = "localhost";
// $username ="root";
// $password = "";
// $db = "asm2_200312";

// $conn = mysqli_connect($server,$username,$password,$db);
// if($conn->connect_error){
//     die("Failed ".$conn->connect_error);
// }

$conn = pg_connect("postgres://lqczokncvmjjsy:334c07e15b71cb6ed110cc72421a6aa0fa25ddab43eb100dd26d790e2270d6fd@ec2-3-219-19-205.compute-1.amazonaws.com:5432/d46334nq1ov1sh");

// $conn = pg_connect("host=localhost port=5432 dbname=asm2_200312 user=postgres password=Pass?*n@1");

if (!$conn) {
    die("Connection failed");
}

if ($conn){
    echo "connected";
}
?>