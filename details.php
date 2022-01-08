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
       <style><?php include "css/update.css"; ?></style>
       <title>Details</title>
    
   </head>
   <body>
       <fieldset>
           <legend class='h2'> Product details </legend>
           
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
                    <th>Author first name</th>
                    <td><?= $row["author_fn"] ?></td>
                </tr>

                <tr>
                    <th>Author last name</th>
                    <td><?= $row["author_ln"] ?> </td>
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
                    <th>Publisher first name</th>
                    <td><?= $row["publisher_fn"] ?> </td>
                </tr>

                <tr>
                    <th>Publisher last name</th>
                    <td><?= $row["publisher_ln"] ?> </td>
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
                    <td><a class= 'btn btn-warning' href="index.php" >Home</a><td>
                </tr>
            </table>

            
            <p>  <?= $row["image"] ?> </p>
            <img src='images/{$row["image"]}'  height='270'>
           
       </fieldset>
   </body>
</html>


     