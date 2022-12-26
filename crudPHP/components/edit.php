<?php 
    require("../partials/db.php");
    require("../partials/header.php");

    $getID = $_GET['id'];
    $sql = "SELECT * FROM users where id ={$getID}";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <div class='container'>
                <div class='row'>
                    <form method='POST'>
                        <div class='form-group'>
                            <label for='name'>jmeno</label>
                            <input type='text' class='form-control' id='name' name='name' value='{$row['name']}'>
                        </div>
                        <div class='form-group'>
                            <label for='surname'>prijmeni</label>
                            <input type='text' class='form-control' id='surname' name='surname' value='{$row['surname']}'>
                        </div>
                        <button type='submit' class='btn btn-warning'>Edit</button>
                    </form>
                </div>
            </div>
            ";
        }
    }
    
    if(!empty($_POST['name']) and !empty($_POST['surname'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
  
        $sql = "UPDATE users SET name='{$name}', surname='{$surname}' where id = '{$getID}'";
        if (mysqli_query($conn, $sql)) {
            header("Location: /crudPHP");
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        echo $sql;
      }

    require("../partials/footer.php");
?>
