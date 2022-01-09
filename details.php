<?php
    require_once "actions/db_connect.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $spl = "SELECT * FROM media WHERE id = $id";
        $result = mysqli_query($conn , $spl);
        $row = mysqli_fetch_assoc($result);  
    }
?>    


<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content ="width=device-width, initial-scale=1.0">
       <?php require_once 'components/boot.php'?>
       <style><?php include "css/details.css"; ?></style>
       <title>Details</title>
    
   </head>
   <body>
       <div class="prodet">
            <fieldset>
                <legend class='h2'> Product details  <a class= 'btn btn-warning' href="index.php" >Go to Home</a></legend>
                
                    <table  class='table'>
                        <tr>
                            <th>Name</th>
                            <td> <?= $row["name"] ?> </td>
                        </tr>
                        <tr>
                            <th>Price</th >
                            <td><?= $row["price"] ?></td>
                        </tr>
                        <tr>
                            <th>ISBN-Code</th>
                            <td>"<?= $row["ISBN_code"] ?></td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>"<?= $row["type"] ?></td>
                        </tr>
                        

                        <tr>
                            <th>Description</th>
                            <td><?= $row["description"] ?> </td>
                        </tr>

                        <tr>
                            <th>Available</th>
                            <td><?= $row["available"] ?></td>
                        </tr>

                        <tr>
                            <th>Author first und last name</th>
                            <td><?= $row["author_fn"] ?> <?= $row["author_ln"] ?></td>
                        </tr>

                        <tr>
                            <th>Publish date</th>
                            <td><?= $row["publish_date"] ?></td>
                        </tr>

                        <tr>
                            <th>Publisher</th>
                            <td><?= $row["Publisher"] ?></td>
                        </tr>

                        <tr>
                            <th>Publisher first und last name</th>
                            <td><?= $row["publisher_fn"] ?> <?= $row["publisher_ln"] ?> </td>
                        </tr>
                        <tr>
                            <th>Publisher adresse</th>
                            <td><?= $row["publisher_adrs"] ?> </td>
                        </tr>

                        <tr>
                            <th>Book size</th>
                            <td><?= $row["size"] ?></td>
                        </tr>
                        <tr>
                            <th>Number und Type Image in DB</th>
                            <td><?= $row["image"] ?></td>
                        </tr>
                    </table>
            </fieldset>
            <div class="foto">
             <img src='images/<?= $row["image"] ?>' width='450'  height='620'>
            </div>
       </div>
   </body>
</html>

