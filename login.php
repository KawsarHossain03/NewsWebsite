<?php 
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/adminDash.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style screen="media">

        </style>

</head>
<body>
<?php include 'navVar.php' ?>
  <form action="login.php" method="post">
      <table align="center" style="margin-top:100px;" >
      <tr> <td colspan="2"> <h1 align="right">Admin Login</h1> </td> </tr>
          <tr>
              <td align="right">Username</td><td><input type="text" name="uname" required></td>
            </tr>
         <tr> 
             <td align="right">Password</td><td><input type="password" name="pass" required></td>

         </tr> 
         <tr>
             <td colspan="2" align="right"><input type="submit" name="login" value="Login"></td>

         </tr>  
        </table>
    </form>
</body>
</html>

<?php
include('dbConnection.php');
if(isset($_POST['login']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $qry="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
    
    $run= mysqli_query($conn,$qry);


    $row=mysqli_num_rows($run);

//here is some error, i can't understand why my code says error
//$row=1;
    if($row==false)
    {
     ?>
        <script> 
        alert('Username or password not match!!');
        window.open('login.php','_self');
        </script>
    
        <?php
        
       
    }

    else {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        session_start();
        $_SESSION['uid']=$id;
        header('location:admin/adminDash.php');

    }

}

?>