<?php 
    require("partials/db.php");
    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <tr>
            <th scope='row'>{$row['id']}</th>
            <td>{$row['name']}</td>
            <td>{$row['surname']}</td>
            <td>
                <a class='btn btn-warning' href='components/edit.php?id={$row['id']}'>+</a>
                <a class='btn btn-danger' href='components/delete.php?id={$row['id']}'>+</a>
            </td>
            </tr>
            ";
        }
    }
?>  
