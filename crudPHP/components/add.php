<?php 
    require("../partials/db.php");
    require("../partials/header.php");

    
   
    
    if(!empty($_POST['name']) and !empty($_POST['surname'])){
      $name = $_POST['name'];
      $surname = $_POST['surname'];

      $sql = "INSERT INTO users (name, surname) VALUES ('{$name}', '{$surname}')";
      if (mysqli_query($conn, $sql)) {
        header("Location: /crudPHP");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      echo $sql;
    }
    require("../partials/form.php");



    require("../partials/footer.php");
?>