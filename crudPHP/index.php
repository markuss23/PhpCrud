<?php
    require('partials/db.php');
    require('partials/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include("components/getDB.php");
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-2">
               <a class="btn btn-success" href="components/add.php">+</a>
            </div>
        </div>
    </div>
<?php 
    require('partials/footer.php');
?>