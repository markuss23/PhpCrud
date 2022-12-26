<?php
    $server = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $db = "crudPHP";

    $conn = mysqli_connect($server, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

?>