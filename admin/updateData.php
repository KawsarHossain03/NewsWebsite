<?php
if(isset($_POST['submit']))
{
    include('../dbconnection.php');
   
    $category=$_POST['submitc'];
    $text=$_POST['news'];
    

    $date=date("d/m/Y");
        
        $time=date("h:ia");
        $day=date("l");


        $fileName= $_FILES['simg']['name'];
        $tmploc= $_FILES['simg']['tmp_name'];
        $filetype=$_FILES['simg']['type'];
    
        $fileSize= $_FILES['simg']['size'];
        
        $uploc = "../image/".$fileName;
    move_uploaded_file($tmploc,$uploc);

    

    $qry="UPDATE student SET category=$category, text='$text',image='$fileName', date='$date', time='$time', day='$day' WHERE id=$id"; 
    
    //include('imageController.php');
    //$run=mysqli_query($con,$qry);
    //echo "run".$run;
    if(mysqli_query($conn,$qry))
    {
        ?>
        <script>
            alert('Data Updated Successfully.');
            window.open('updateForm.php?sid=<?php echo $id;?>','_self');
        </script>
            <?php
    }

}

?>