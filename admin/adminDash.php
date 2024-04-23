<?php 
session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else{
        header('location: ../login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDash</title>
    <style screen="media">
        body{
            background-color:azure;
        }
        a{
            text-decoration: none;
            
            font-size: 20px;
            font-weight: bold;
        }
        </style>
</head>
<body>
    
<?php include 'navVarAdmin.php' ?>



<!--<h3 align="right"> <a href="logout.php" style="float:right; margin-right:70px; color:RED; font-size:20px; "> Logout </a> </h3> -->
<div class="admintitle">
<h1 align="center">Welcome to Admin Dashboard</h1> 
</div>

<div class="dashboard"> 
    <table style="width:50%;" align="center">
        <tr>
            <td>1.</td><td><a href="insert.php" style="color:blue;">Insert News</a></td>

        </tr>
        <tr>
            <td>2.</td> <td><a href="updateNews.php" style="color:blue;">Update News</a></td>
        </tr>   
        <tr>
            <td>3.</td> <td><a href="deleteNews.php" style="color:blue;">Delete News</a></td>
        </tr>
    </table>


</div>
</body>
</html>
