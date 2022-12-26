<?php 
    require("../partials/db.php");

    $getID = $_GET['id'];
    $sql = "DELETE FROM users WHERE id={$getID}";
    if (mysqli_query($conn, $sql)) {
      header("Location: /crudPHP");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo $sql;

    
?>