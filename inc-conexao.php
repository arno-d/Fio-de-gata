<?php

$conn = mysqli_connect("localhost", "root", "", "db_fiodegata");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

?>