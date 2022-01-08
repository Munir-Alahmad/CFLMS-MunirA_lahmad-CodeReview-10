<?php
    require_once "db_connect.php";
    require_once "file_upload.php";

    if($_POST){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $image =file_upload($_FILES["image"]);
        $type = $_POST["type"];
        $ISBN_code = $_POST["ISBN_code"];
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

        $ErrorMsg = "";

        $sql = "INSERT INTO media (name, price, ISBN_code, type, image, description, available, author_fn, author_ln, publish_date, Publisher, publisher_fn, publisher_ln, publisher_adrs, size) VALUES ('$name', $price,$ISBN_code,'$type','$image->fileName', '$description', '$available', '$author_fn', '$author_ln', '$publish_date', '$Publisher', '$publisher_fn', '$publisher_ln', '$publisher_adrs', '$size')";
        if(mysqli_query($conn, $sql)){
            $class ="success";
            $message = "The entry below was successfully created <br>
                <p> $name <br> $price <br>$ISBN_code <br>$type <br> <hr> $description  <br> $available <br> <hr> $author_fn <br> $author_ln <br> <hr> $publish_date <br> $Publisher <br> $publisher_fn <br> $publisher_ln <br> $publisher_adrs <br> <hr> $size </p>";
            $uploadError = ($image->error !=0)? $image->ErrorMessage : '';
        }else{
            $class = "danger";
            $message = "error while creating record. Try again: <br>" . $conn->error;
            $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
        } 
        $conn->close();
    }else{
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
               <h1>Create request response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary"  type='button'>Home</button ></a>
           </div >
       </div>
   </body>
</html>