<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert News</title>
<style media="screen">
textarea{
    width: 500px;
    height: 300px;
    font-size: 20px;

}
div{
    border: 2px solid black;
    width:550px;
    margin-left: 450px;
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
    <?php include 'navVarAdmin.php' ?>
    <div class="">
        <form class="" action="insert.php" method="post" enctype="multipart/form-data">
            <textarea name="news" rows="40" cols="50" placeholder="Enter news" required></textarea> <br> <br>
            <input type="file" name="simg" required><br><br>
            <input type="submit" name="submit" value="Submit">

        </form>
        
    </div>
    
</body>
</html>
<?php 
       /* include ('dbConnection.php');
         if(isset($_POST['submit'])){
             $news=$_POST['news'];
             $imageName=$_FILES['image']['name'];
             $image_type=$_FILES['image']['type'];
             $image_size=$_FILES['image']['size'];
             $image_tem_loc=$_FILES['image']['tmp_name'];
            $image_store="image/".$imageName;
            move_uploaded_file($image_tem_loc,$image_store);
            $sql="INSERT INTO news(text,image) VALUES('$news','$imageName')";
            if(mysqli_query($conn,$sql))
                 {
                ?>
                <script>
                    alert('Data Inserted Successfully.');
                </script>
                    <?php
             }
         }
         */
        
if(isset($_POST['submit']))
{
    include('../dbConnection.php');
   
    
    $news=$_POST['news'];
    
    $fileName= $_FILES['simg']['name'];
    $tmploc= $_FILES['simg']['tmp_name'];
    $filetype=$_FILES['simg']['type'];

    $fileSize= $_FILES['simg']['size'];


    $uploc = "../image/".$fileName;
    move_uploaded_file($tmploc,$uploc);

        $date=date("d/m/Y");
        
        $time=date("h:ia");
        $day=date("l");
      //  echo $time;

 $qry="INSERT INTO news(text,image,date,time,day) VALUES ('$news','$fileName','$date','$time','$day')";
    
    //include('imageController.php');
    //$run=mysqli_query($con,$qry);
    //echo "run".$run;
    if(mysqli_query($conn,$qry))
    {
        ?>
        <script>
            alert('Data Inserted Successfully.');
        </script>
            <?php
    }

}

        ?>