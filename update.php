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
       <title>Add Product</title>
    
   </head>
   <body>
       <fieldset>
           <legend class='h2'> Update details</legend>
           <form action="actions/a_update.php"  method= "post" enctype= "multipart/form-data">
               <table  class='table'>
                   <tr>
                       <th>Name</th>
                        <td><input value="<?php echo $row["name"] ?>" class ='form-control' type="text"  name="name"  placeholder ="Buch oder DVDs Name" /></td>
                   </tr>
                   <tr>
                       <th>Price</th >
                       <td><input value="<?php echo $row["price"] ?>" class= 'form-control' type="number"  name= "price" placeholder ="Price" step="any"></td>
                   </tr>
                   <tr>
                       <th>ISBN-Code</th>
                        <td><input value="<?php echo $row["ISBN_code"] ?>" class ='form-control' type="text"  name="ISBN_code"  placeholder ="Enter ISBN Code" /></td>
                   </tr>
                   <tr>
                       <th>Type</th>
                        <td><input value="<?php echo $row["type"] ?>" class ='form-control' type="text"  name="type"  placeholder ="Enter Product type" /></td>
                   </tr>
                   <tr>
                       <th>image</th >
                       <td><input class= 'form-control' type="file"  name="image"/></td>
                   </tr>



                   <tr>
                       <th>Description</th>
                        <td><input value="<?php echo $row["description"] ?>"  class ='form-control' type="text"  name="description"  placeholder ="Enter Product description" /></td>
                   </tr>

                   <tr>
                       <th>Available</th>
                        <td><input value="<?php echo $row["available"] ?>"  class ='form-control' type="text"  name="available"  placeholder ="available" /></td>
                   </tr>

                   <tr>
                       <th>Author first name</th>
                        <td><input value="<?php echo $row["author_fn"] ?>"  class ='form-control' type="text"  name="author_fn"  placeholder ="Enter author first name" /></td>
                   </tr>

                   <tr>
                       <th>Author last name</th>
                        <td><input value="<?php echo $row["author_ln"] ?>" class ='form-control' type="text"  name="author_ln"  placeholder ="Enter author last name" /></td>
                   </tr>

                   <tr>
                       <th>Publish date</th>
                        <td><input value="<?php echo $row["publish_date"] ?>"  class ='form-control' type="date"  name="publish_date"  placeholder ="Enter publish date" /></td>
                   </tr>

                   <tr>
                       <th>Publisher</th>
                        <td><input value="<?php echo $row["Publisher"] ?>" class ='form-control' type="text"  name="Publisher"  placeholder ="Enter Publisher Co" /></td>
                   </tr>

                   <tr>
                       <th>Publisher first name</th>
                        <td><input value="<?php echo $row["publisher_fn"] ?>"  class ='form-control' type="text"  name="publisher_fn"  placeholder ="Enter Publisher first name" /></td>
                   </tr>

                   <tr>
                       <th>Publisher last name</th>
                        <td><input value="<?php echo $row["publisher_ln"] ?>"  class ='form-control' type="text"  name="publisher_ln"  placeholder ="Enter Publisher last name" /></td>
                   </tr>

                   <tr>
                       <th>Publisher adresse</th>
                        <td><input value="<?php echo $row["publisher_adrs"] ?>" class ='form-control' type="text"  name="publisher_adrs"  placeholder ="Enter publisher adresse" /></td>
                   </tr>

                   <tr>
                       <th>Book size</th>
                        <td><input value="<?php echo $row["size"] ?>" class ='form-control' type="text"  name="size"  placeholder ="Enter Product size" /></td>
                   </tr>

                   
                   
                   <tr>
                       <input class= 'form-control' type="hidden"  name="id" value="<?php echo $row["id"] ?>"/>
                       <input class= 'form-control' type="hidden"  name="image" value="<?php echo $row["image"] ?>"/>
                       <td><button class ='btn btn-success' type= "submit">Update Product</button></td>
                       <td><a class= 'btn btn-warning' href="index.php" >Home</a><td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>