<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
<style media="screen">

body{
    padding: 0px;
    margin: 0px;
}

ul{
    list-style-type: none;
    background-color: teal;
    width: 100%;
    height: 50px;
    margin-top: 5px;
}
li{
    float: left;
    margin-top: 15px;
    margin-left: 30px;
}
li:hover{
    opacity: .9;
}
a{
    text-decoration: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

</style>

</head>
<body>

    <ul>
        <li style="margin-left:5px;"> <a href="../news.php">Online News Portal</a> </li>
        <li style="margin-right:15px;"> <a href="../news.php"> Home </a></li>
        <li><a href="national.php">National </a></li>
        <li><a href="international.php">International</a></li>
        <li><a href="sports.php">Sports</a></li> 
        <li><a href="agriculture.php">Agriculturer</a></li>
        <li><a href="science.php">Science</a></li>
        
       
       <li style="margin-left: 300px;">  <a href="../login.php"> Admin Login</a> </li>
        
    </ul>

</body>
</html>