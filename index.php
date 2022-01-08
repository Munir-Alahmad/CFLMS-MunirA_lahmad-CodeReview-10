<?php
    require_once "actions/db_connect.php";

    $sql = "SELECT * FROM media";
    $result = mysqli_query($conn, $sql);
    $bage ="";

    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $bage .= "<div class='card' style='width: 18rem;'>
        <img src='images/{$row["image"]}' class='card-img-top' alt='...' height='270'>
        <div class='card-body'>
          <h4 class='card-title'>Title: {$row["name"]}</h4>
          <p class='card-text'>Price: {$row["price"]} €</p>
          <p class='card-text'>ISBN_Code: {$row["ISBN_code"]}</p>
          <p class='card-text'>Type: {$row["type"]}</p>
          <a href='update.php?id={$row["id"]}' class='btn btn-warning'>Update</a>
          <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
          <a href='details.php?id={$row["id"]}' class='btn btn-primary'>Details</a>
        </div>
      </div>";
    }
    }else{
        $bage = "No results";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php" ?>
    <style><?php include "css/index.css"; ?></style>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <title>Document</title>
    
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #7FC9B6;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Munir Alahmad CR10</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <div class="newbook">
            <a href='publish.php?Publisher={$row["Publisher"]}' class='btn btn-primary'>Cornelson</a>
                <!-- <a class= "btn btn-primary" href="publish.php">Cornelson</a> -->
                <a class= "btn btn-primary" href="create.php">Create a new Book</a>
            </div>
            
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <!-- bootstrap card -->
    <div class="container"> 
        <div class="row">
            <?php echo $bage ?>
        </div>
    </div>
    
</body>
</html>