<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full News</title>
    <style media="screen"> 
       textarea{
    width: 700px;
    height: 300px;
    font-size: 20px;

}
div{
    border: 2px solid black;
    width:780px;
    margin-left: 250px;
    margin-top: 50px;
    padding: 30px;
}

input[type=file]{
    font-size: 20px;
}
input[type=submit]{
    font-size: 20px;
    font-weight: bold;
    margin-left: 200px;
}

    </style>
</head>
<body>
    <?php 
    
    
    include '../dbConnection.php';
    
    $id=$_POST['id'];
    $sql="SELECT * FROM news WHERE id=$id";
    $query=mysqli_query($conn,$sql);

    while($info=mysqli_fetch_array($query))
    {
        ?>
        

        <?php include 'navVarAdmin.php' ?>
    <div class="">
        <form class="" action="updateData.php" method="post" enctype="multipart/form-data">
    
       <label>update category: <input type="text" name="submitc" value="<?php echo $info['category'];?>"> </label> <br> <br>
            <textarea name="news" rows="40" cols="50" value="<?php echo $info['text']; ?>" required></textarea> <br> <br>
            <input type="file" name="simg" required><br><br>
            <input type="submit" name="submit" value="Submit">

        </form>
        
    </div>


        <?php
    }
    
    
    
    
    
    ?>
</body>
</html>