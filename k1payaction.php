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
            $id="k1";
            $username=$_GET['username'];
            $accountno=$_GET['accountno'];
            $cvv=$_GET['cvv'];
            $exdate=$_GET['exdate'];
            $exyear=$_GET['exyear'];
            $amount=$_GET['amount'];
            $address=$_GET['address'];
            $quantity=$_GET['quantity'];
            $phone=$_GET['phone'];
            $mail=$_GET['mail'];
            $query = "SELECT * FROM accountdetails where AccountNumber='$accountno'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);  
            if($row["AccountNumber"]==$accountno && $row["AccountHolder"]==$username && $row["CVV"]==$cvv && $row["ExpiryMonth"]==$exdate && $row["Expiryear"]==$exyear)
            {   
                if($row["BalanceAmount"]>=$amount)
                {
                    $sql="INSERT INTO shopping(Name, ProductId, Quantity, Amount, Address, PhoneNumber, Email) VALUES('$username', '$id', $quantity, $amount, '$address', $phone, '$mail')";
                    mysqli_query($connect,$sql);
                    $db=$row["BalanceAmount"]-$amount;
                    $query1="UPDATE accountdetails SET BalanceAmount='$db' WHERE AccountNumber='$accountno'";
                    mysqli_query($connect,$query1);
                    $query2 = "SELECT * FROM productdetails where Product_Id='$id'";
                    $result1 = mysqli_query($connect,$query2); 
                    $row1 = mysqli_fetch_array($result1); 
                    $db1=$row1["Quantity"]-$quantity;
                    $query1="UPDATE productdetails SET Quantity='$db1' WHERE Product_Id='$id'";
                    mysqli_query($connect,$query1);   
                    $subject = "Welcome ".$username;
                    $body = "Hi, there..."."\r\n"."Your product id is k1"."\r\n"."Your order has been placed successfully !";
                    $sender = "From: 2033015mdcs@cit.edu.in";
                    mail($mail, $subject, $body, $sender);    
                }
                else
                    include("k1payalert.html");
            }
            else
            {
                include("k1account.html");
            }
            mysqli_close($connect);          
        ?>       
    <body>
        <div class="wrapper">
            <div class="title">
                Order Placed <br>
                successfully<br><br>
                Thank you <br>for your shopping :) 
            </div>
            <div class="form-inner">
                <form name="form1" action="view.html">
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="View Order">
                    </div>
                </form>
            </div> 
        </div>
        <audio controls autoplay hidden="true">
            <source src="tune.mpeg">
        </audio>
    </body>    
</html>
