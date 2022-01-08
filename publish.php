<?php
    require_once "actions/db_connect.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $spl = "SELECT * FROM media WHERE publisher = $Cornelson";
        $result = mysqli_query($conn , $spl);
        $row = mysqli_fetch_assoc($result);  
    }
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>