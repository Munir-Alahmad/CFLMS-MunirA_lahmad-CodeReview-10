<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if ($_POST) {    
   $name = $_POST['name'];
   $price = $_POST['price'];
   $ISBN_code = $_POST['ISBN_code'];
   $type = $_POST['type'];
   $description = $_POST["description"];
   $available = $_POST["available"];
   $author_fn = $_POST["author_fn"];
   $author_ln = $_POST["author_ln"];
   $publish_date = $_POST["publish_date"];
   $Publisher = $_POST["Publisher"];
   $publisher_fn = $_POST["publisher_fn"];
   $publisher_ln = $_POST["publisher_ln"];
   $publisher_adrs = $_POST["publisher_adrs"];
   $size = $_POST["size"];  
   $id = $_POST['id'];  

   
   $uploadError = '';

   $image = file_upload($_FILES['image']);//file_upload() called  
   if ($image->error===0){
       ($_POST["image"]=="product.png")?: unlink("../images/$_POST[image]");          
       $sql = "UPDATE media SET name = '$name' , price = $price , ISBN_code = '$ISBN_code' , type = '$type', image = '$image->fileName' , description ='$description' , available = '$available' , author_fn ='$author_fn' , author_ln ='$author_ln' , publish_date ='$publish_date' , Publisher ='$Publisher' , publisher_fn ='$publisher_fn' , publisher_ln ='$publisher_ln' , publisher_adrs ='$publisher_adrs' , size='$size' WHERE id = {$id} ";
   }else{
       $sql = "UPDATE media SET name = '$name' , price = $price , ISBN_code = '$ISBN_code' , type = '$type', description ='$description' , available = '$available' , author_fn ='$author_fn' , author_ln ='$author_ln' , publish_date ='$publish_date' , Publisher ='$Publisher' , publisher_fn ='$publisher_fn' , publisher_ln ='$publisher_ln' , publisher_adrs ='$publisher_adrs' , size='$size' WHERE id = {$id}  ";
   }    
   if ($conn->query($sql) === TRUE) {
       $class = "success";
       $message = "The record was successfully updated";
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while updating record : <br>" . $conn->error;
       $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
   }
   $conn->close();    
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php' ?> 
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Update request response</h1>
           </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>' ><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success"  type='button'>Home</button></a>
            </div>
       </div>
   </body>
</html>