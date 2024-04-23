<?php 

$conn=mysqli_connect('localhost','root','','newswebsite');
if($conn==false)
{
    ?>
<script>
    alert('db is not connected');
    </script>

    <?php
}
?>