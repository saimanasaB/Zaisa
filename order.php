<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <link rel="stylesheet" href="styleslog.css">
        <title>Zaisa</title>
        <style>
            .wrapper{
                width: 700px;
                max-width: 700px;   /*Maximum width of an element is 390px*/
                background: #fff;
                padding: 50px;      /*generate space around an element's content*/
                border-radius: 5px; /*radius of the element's corner is 5px*/
                box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
            }
        </style>
    </head>
        <?php 
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $username=$_GET['username'];
            $id=$_GET['id'];
            $sql= "SELECT * FROM shopping where Name='$username' and ProductId='$id'";
            $result = mysqli_query($connect,$sql);  
            $row = mysqli_fetch_array($result);             
            if($row['Name']==$username && $row['ProductId']==$id)
            {
                $name=$row['Name'];
                $Pid=$row['ProductId'];
                $quantity=$row['Quantity'];
                $amount=$row['Amount'];
                $address=$row['Address'];
                $phone=$row['PhoneNumber'];
                $email=$row['Email'];
            }
            mysqli_close($connect);          
        ?>         
    <body>     
        <div class="wrapper">
            <div class="title">
                Order
            </div><br>
            <div class="form-inner">
                <table border=1 width=100%>
                    <tr>
                        <th>Name</th>
                        <th>Product_Id</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td><?php echo "$name"; ?></td>
                        <td><?php echo "$Pid"; ?></td>
                        <td><?php echo "$quantity"; ?></td>
                        <td><?php echo "$amount"; ?></td>
                        <td><?php echo "$address"; ?></td>
                        <td><?php echo "$phone"; ?></td>
                        <td><?php echo "$email"; ?></td>
                    </tr>
                </table>        
                <form action="index.html">
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Back">
                    </div>
                </form>
            </div> 
        </div>
    </body>    
</html>
