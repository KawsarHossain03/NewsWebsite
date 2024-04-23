<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>
    <style media="screen"> 
        img{
            width: 750px;
            height: 300px;
        }
        .div1{
            margin-left: 300px;
            margin-top: 40px;
        }
        .div2{
           width:750px; 
           margin-top: 20px;
           font-size: 20px;
        }
        label{
            font-size: 20px;
            font-weight: bold;
            margin-left: 300px;
        }
    </style>
</head>
<body>
    <?php 
    
    include 'navBarCat.php';
    include '../dbConnection.php';
    
    $id=$_POST['id'];
    $sql="SELECT * FROM news WHERE id=$id";
    $query=mysqli_query($conn,$sql);

    while($info=mysqli_fetch_array($query))
    {
        ?>
        <div class="div1">
           <label> <?php echo $info['date']."   ".$info['time'] ?> </label> <br> <br>
        
            <img src="../image/<?php echo $info['image']; ?>" alt="">
            <div class="div2">
                <?php echo $info['text']; ?>
            </div>
        </div>
        <?php
    }
    
    
    
    
    
    ?>
</body>
</html>