<?php


    include('../dbConnection.php');
   $id=$_REQUEST['id'];
    

    $qry="DELETE FROM news WHERE id=$id";
    
    //include('imageController.php');
    //$run=mysqli_query($con,$qry);
    //echo "run".$run;
    if(mysqli_query($conn,$qry))
    {
        ?>
        <script>
            alert('Data Deleted Successfully.');
            window.open('deleteNews.php','_self');
        </script>
            <?php
    }



?>
