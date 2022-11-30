<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <link rel="stylesheet" href="styleslog.css">
        <title>Zaisa</title>
    </head>
    <?php 
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $id=$_GET['id'];
            $stock=$_GET['stock'];
            $query = "Update medproductdetails SET Quantity='$stock' where Product_Id='$id'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);
            mysqli_close($connect);          
        ?>       
    <body>
        <div class="wrapper">
            <div class="title">
                Product stock <br>
                is updated<br><br>
                successfully :) 
            </div>
            <div class="form-inner">
                <form name="form1" action="upmedproductdetails.php">
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="View Product">
                    </div>
                </form>
            </div> 
        </div>
        <audio controls autoplay hidden="true">
            <source src="tune.mpeg">
        </audio>
    </body>    
</html>
