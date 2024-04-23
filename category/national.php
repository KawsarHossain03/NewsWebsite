<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National</title>
    <style>
        body{
            background-color: azure;
        }
        .div1{
            border: 2px solid black;
            width: 470px;
            height: 270px;
            float:left;
            margin-left: 10px;
            padding-bottom: 15px;
            margin-top: 10px;
            
        }
        
        .div2{
            width: 200px;
            border: 1px solid white;
            max-height: 150px;
            overflow: hidden;
            float:left;
            margin-top: 1px;
            margin-left: 10px;
            padding: 1px;
            font-size: 23px;
            font-weight: bold;

        }
        img{
            width:220px;
            height:160px;
            float: left;
            margin-left: 20px;
            margin-top: 10px;
        }
        .divmain{
            margin-left: 50px;
        }
        .div3{
            float: left;
            
            margin-top: 1px;
            margin-left: 50px;
            margin-right: 200px;
        }
        #label1{
            font-size: 20px;
            font-weight: bold;
            margin-left: 60px;
        }
        #label2{
            font-size: 20px;
            font-weight: bold;
            margin-left: 14px;
        }
        #label3{
            font-size: 20px;
            font-style: italic;  
            color:green;          
        }
        form{
            margin-top: -50px;
            float: right; 
            margin-right: 55px;
        }
        #readfulnews{
            font-size:20px ;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <?php include 'navBarCat.php' ?>
     
    
    
    <div class="divmain">
        <?php
        include '../dbConnection.php';
        $sql="SELECT * FROM news WHERE category='National' order by id desc";
        $query=mysqli_query($conn,$sql);

        while($info=mysqli_fetch_array($query)){
            ?>
            <div class="div1">
                <img src="../image/<?php echo $info['image']; ?>" > <br> <br>
                <div class="div2">
                <label id="label3"> <?php echo $info['category'] ?> </label><br>
                    <?php echo $info['text']; ?>
                </div>
                <div class="div3">
                    <label id="label1"><?php echo $info['day']; ?> </label> <br> <br>
                    <label id="label2"> <?php echo $info['date']; ?> </label>
                    <label id="label2"> <?php echo $info['time'] ?></label>
                    
                </div>
                <form class="" action="fullNewsCat.php" method="post">
                <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>   
                <input id="readfullnews" type="submit" name="fullnews" value="Read Full News">

                </form>

            </div>
            <?php
        }
        
        ?>
    </div>
</body>
</html>