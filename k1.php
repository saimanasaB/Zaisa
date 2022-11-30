<html>
    <head>
        <link rel="stylesheet" href="styleslog.css">
        <title>Zaisa Shopping Mall</title>
    </head>
    <?php
        $host="localhost";
        $user="root";
        $password="";
        $connect=mysqli_connect($host,$user,$password,"zaisa");
        $id="k1";
        $quantity=$_GET['quantity'];
        $query = "SELECT * FROM productdetails where Product_id='$id'";
        $result = mysqli_query($connect,$query); 
        $row = mysqli_fetch_array($result);  
        if($row["Product_id"]==$id)
        {   
            $pay=$row["Price"]*$quantity;
        }
        mysqli_close($connect);          
    ?>
    <body>
        <div class="wrapper">
            <div class="title">
                Blazers
            </div>
            <center><img src="pic1.jpg" width=300 height=300></center>
            <div class="title">
                <br>Pay Rs.<?php echo "$pay" ?>
            </div>
            <div class="form-inner">
                <form action="k1pay.html">
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Proceed">
                    </div>
                </form>
            </div>   
        </div>
    </body>
</html>
